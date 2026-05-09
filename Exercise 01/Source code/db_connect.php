<?php
// Database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "student_db";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("❌ Database connection failed: " . mysqli_connect_error());
} else {
    echo "✅ Database connected successfully!";
}
?>