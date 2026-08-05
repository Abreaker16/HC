<?php
// Database configuration constants
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'hc');

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
