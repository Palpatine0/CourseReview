<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_PORT', '3307');
define('DB_NAME', 'review');

$conn = new mySqLi(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

if ($conn->connect_error) {
    die("CONNECTION FAILED: " . $conn->connect_error);
}

//echo "CONNECTION SUCCESS";
