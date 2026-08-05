# Hospital Care - Appointment Booking System

A PHP-based hospital appointment booking system with user authentication and PDF generation capabilities.

## Features

- User registration and login (with secure password hashing)
- Appointment booking system
- PDF generation for booking confirmations
- Responsive design
- Patient records management

## Requirements

- PHP 7.4 or higher
- MySQL/MariaDB database
- Apache/Nginx web server
- DomPDF library (for PDF generation)

## Installation

### 1. Database Setup

Create a MySQL database named `hc` and import the following tables:

```sql
CREATE DATABASE hc;
USE hc;

-- Users table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Booking table
CREATE TABLE booking (
    id INT AUTO_INCREMENT PRIMARY KEY,
    CName VARCHAR(100) NOT NULL,
    CNumber VARCHAR(20) NOT NULL,
    Email VARCHAR(100) NOT NULL,
    Date DATE NOT NULL,
    Caddress TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### 2. Configure Database Connection

Edit `config.php` to match your database credentials:

```php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'hc');
```

### 3. Install DomPDF (for PDF generation)

```bash
cd /path/to/your/project
composer require dompdf/dompdf
```

Or download from: https://github.com/dompdf/dompdf/releases

### 4. Set Permissions

Ensure the web server has write permissions to the necessary directories.

## File Structure

```
/workspace
├── config.php          # Database configuration
├── index.php           # Home page
├── login.php           # Login page (legacy)
├── login1.php          # Login page (current)
├── register.php        # User registration
├── booking.php         # Appointment booking
├── Thanks.php          # Thank you page after registration
├── server.php          # Authentication logic
├── server1.php         # Booking logic
├── details_pdf.php     # PDF template
├── print-details.php   # PDF generation handler
└── your details.php    # Booking details view
```

## Security Improvements Made

1. **Password Hashing**: Upgraded from MD5 to `password_hash()` with bcrypt
2. **Prepared Statements**: All SQL queries now use prepared statements to prevent SQL injection
3. **XSS Protection**: Output is escaped using `htmlspecialchars()`
4. **Input Validation**: Enhanced validation for all user inputs
5. **Error Handling**: Improved error messages without exposing sensitive information
6. **Session Management**: Proper session handling with secure redirects

## Usage

1. Navigate to `index.php` in your browser
2. Register a new account via the "Sign up" link
3. Log in with your credentials
4. Book an appointment by filling out the booking form
5. Download your booking confirmation as PDF

## Notes

- The file `cockroachDB installation.txt` contains instructions for CockroachDB setup but is not currently used by this application
- CSS files are expected in the `css/` directory
- Image assets are expected in the `image/` directory

## License

This project is provided as-is for educational purposes.
