<?php
/*
This file contains database configuration assuming you are running MySQL using user "root" and password ""
*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check the connection
if (!$conn) {
    die("Error: Cannot connect to the database. " . mysqli_connect_error());
}
?>
