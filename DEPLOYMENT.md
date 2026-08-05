# Deployment Guide for Google Cloud Run

This guide explains how to deploy the Hospital Appointment Booking System to Google Cloud Run.

## Prerequisites

1. **Google Cloud Project**: You need a GCP project with billing enabled
2. **Cloud SDK**: Install [Google Cloud SDK](https://cloud.google.com/sdk/docs/install)
3. **Required APIs**: Enable the following APIs:
   ```bash
   gcloud services enable cloudbuild.googleapis.com run.googleapis.com artifactregistry.googleapis.com
   ```

## Pre-Deployment Setup

### 1. Create Artifact Registry Repository

```bash
gcloud artifacts repositories create hospital-app-repo \
    --repository-format=docker \
    --location=us-central1 \
    --description="Docker repository for hospital appointment system"
```

### 2. Configure Database Connection

Since this is a PHP application that uses MySQL/MariaDB, you have several options:

#### Option A: Use Cloud SQL for MySQL (Recommended)

1. Create a Cloud SQL instance:
```bash
gcloud sql instances create hospital-db-instance \
    --database-version=MYSQL_8_0 \
    --tier=db-f1-micro \
    --region=us-central1 \
    --root-password=YOUR_SECURE_PASSWORD
```

2. Create a database:
```bash
gcloud sql databases create hc --instance=hospital-db-instance
```

3. Update `config.php` to use environment variables or Cloud SQL connection:
```php
<?php
// Database configuration - using environment variables
define('DB_HOST', getenv('DB_HOST') ?: '127.0.0.1');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DB_NAME', getenv('DB_NAME') ?: 'hc');

// For Cloud SQL connection, use the Unix socket
// DB_HOST should be set to: /cloudsql/PROJECT_ID:REGION:INSTANCE_ID
?>
```

4. Deploy with Cloud SQL connection:
```bash
gcloud run deploy hospital-appointment-system \
    --image us-central1-docker.pkg.dev/YOUR_PROJECT_ID/hospital-app-repo/hospital-appointment-system \
    --region us-central1 \
    --platform managed \
    --allow-unauthenticated \
    --port 8080 \
    --set-env-vars DB_HOST=/cloudsql/YOUR_PROJECT_ID:us-central1:hospital-db-instance,DB_USER=root,DB_PASS=YOUR_PASSWORD,DB_NAME=hc \
    --add-cloudsql-instances YOUR_PROJECT_ID:us-central1:hospital-db-instance
```

#### Option B: Use External Database

Update the environment variables during deployment to point to your external database.

### 3. Using Secret Manager for Sensitive Data (Recommended)

Store sensitive credentials in Secret Manager:

```bash
# Create secrets
echo -n "your_db_password" | gcloud secrets create db-password --data-file=-
echo -n "your_db_user" | gcloud secrets create db-user --data-file=-
echo -n "your_db_host" | gcloud secrets create db-host --data-file=-
echo -n "hc" | gcloud secrets create db-name --data-file=-

# Grant Cloud Run service account access to secrets
SERVICE_ACCOUNT=$(gcloud iam service-accounts list --filter="compute@developer.gserviceaccount.com" --format="value(email)")

gcloud secrets add-iam-policy-binding db-password \
    --member="serviceAccount:$SERVICE_ACCOUNT" \
    --role="roles.secretmanager.secretAccessor"

# Repeat for other secrets...
```

Then update `cloudbuild.yaml` to reference these secrets.

## Deployment Steps

### Quick Deploy (Using cloudbuild.yaml)

1. Navigate to the project directory:
```bash
cd /workspace
```

2. Submit the build:
```bash
gcloud builds submit --config=cloudbuild.yaml \
    --substitutions=_REGION=us-central1,_REPOSITORY=hospital-app-repo,_SERVICE_NAME=hospital-appointment-system
```

### Manual Deploy (Step by Step)

1. Build the Docker image:
```bash
docker build -t us-central1-docker.pkg.dev/YOUR_PROJECT_ID/hospital-app-repo/hospital-appointment-system .
```

2. Push the image:
```bash
docker push us-central1-docker.pkg.dev/YOUR_PROJECT_ID/hospital-app-repo/hospital-appointment-system
```

3. Deploy to Cloud Run:
```bash
gcloud run deploy hospital-appointment-system \
    --image us-central1-docker.pkg.dev/YOUR_PROJECT_ID/hospital-app-repo/hospital-appointment-system \
    --region us-central1 \
    --platform managed \
    --allow-unauthenticated \
    --port 8080 \
    --memory 512Mi \
    --cpu 1
```

## Post-Deployment Configuration

### 1. Update Application Configuration

The application needs to read database credentials from environment variables. Update `config.php`:

```php
<?php
// Database configuration - supports environment variables for Cloud Run
define('DB_HOST', getenv('DB_HOST') ?: 'localhost');
define('DB_USER', getenv('DB_USER') ?: 'root');
define('DB_PASS', getenv('DB_PASS') ?: '');
define('DB_NAME', getenv('DB_NAME') ?: 'hc');

// Create database connection
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection and handle errors
if ($con->connect_errno) {
    error_log("Database connection failed: " . $con->connect_error);
    die('Database connection error. Please try again later.');
}

// Set charset to UTF-8
$con->set_charset('utf8mb4');
?>
```

### 2. Initialize Database

You'll need to run your database schema on your chosen database (Cloud SQL or external).

### 3. Configure File Uploads (if needed)

Cloud Run has an ephemeral filesystem. If your app needs persistent file storage:
- Use Google Cloud Storage
- Mount a Cloud Storage bucket as a volume

## Environment Variables

Set these environment variables when deploying:

| Variable | Description | Default |
|----------|-------------|---------|
| `DB_HOST` | Database host | `localhost` |
| `DB_USER` | Database username | `root` |
| `DB_PASS` | Database password | `` |
| `DB_NAME` | Database name | `hc` |

## Monitoring and Logs

View logs:
```bash
gcloud run services logs read hospital-appointment-system --region us-central1
```

Check service status:
```bash
gcloud run services describe hospital-appointment-system --region us-central1
```

## Updating the Deployment

To update after code changes:

```bash
gcloud builds submit --config=cloudbuild.yaml
```

Or manually:

```bash
docker build -t us-central1-docker.pkg.dev/YOUR_PROJECT_ID/hospital-app-repo/hospital-appointment-system:latest .
docker push us-central1-docker.pkg.dev/YOUR_PROJECT_ID/hospital-app-repo/hospital-appointment-system:latest
gcloud run deploy hospital-appointment-system \
    --image us-central1-docker.pkg.dev/YOUR_PROJECT_ID/hospital-app-repo/hospital-app-repo/hospital-appointment-system:latest \
    --region us-central1
```

## Cost Optimization

- Use minimum instances: `--min-instances=0` (default, scales to zero)
- Set maximum instances: `--max-instances=10`
- Choose appropriate memory/CPU based on workload
- Consider using Cloud SQL proxy for efficient database connections

## Troubleshooting

### Common Issues

1. **Database Connection Failed**
   - Verify Cloud SQL instance is accessible
   - Check service account permissions
   - Ensure correct connection string format for Cloud SQL

2. **Application Errors**
   - Check Cloud Run logs: `gcloud run services logs read SERVICE_NAME`
   - Verify all required PHP extensions are installed
   - Check file permissions

3. **Build Failures**
   - Ensure Artifact Registry repository exists
   - Verify Cloud Build API is enabled
   - Check service account permissions

## Security Best Practices

1. ✅ Use Secret Manager for sensitive credentials
2. ✅ Enable HTTPS only (Cloud Run does this by default)
3. ✅ Use service accounts with minimal permissions
4. ✅ Regular security updates to base image
5. ✅ Implement proper input validation (already done in the codebase)
6. ✅ Use prepared statements to prevent SQL injection (already implemented)

## Additional Resources

- [Cloud Run Documentation](https://cloud.google.com/run/docs)
- [Cloud Build Documentation](https://cloud.google.com/build/docs)
- [Cloud SQL for MySQL](https://cloud.google.com/sql/docs/mysql)
- [Secret Manager](https://cloud.google.com/secret-manager/docs)
