<?php
// database records
$host = "127.0.0.1";
$database = "filmbibliotek";
$username = "root";
$password = "";

// connect to database
$conn =  new mysqli($host, $username, $password, $database);

if ($conn->connect_errno) {
    echo "<h2>Database connection fail<h2>";
    echo $conn->connect_errno;
    echo $conn->connect_error;
}
