
<?php
// Database connection using environment variables
$servername = getenv('DB_HOST');  // Fetch DB Host from environment variables
$username = getenv('DB_USER');    // Fetch DB User from environment variables
$password = getenv('DB_PASSWORD'); // Fetch DB Password from environment variables
$dbname = getenv('DB_NAME');      // Fetch DB Name from environment variables

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

