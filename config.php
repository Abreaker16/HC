<?php
// Database configuration - supports environment variables for Cloud Run
// Environment variables take precedence over hardcoded values
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
