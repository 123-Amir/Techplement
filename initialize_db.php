<?php
// Database configuration
$host = "dpg-ctank356l47c73bo7aeg-a.render.com"; // Replace with Render hostname
$port = "5432";
$dbname = "login_41wi"; // Replace with your database name
$user = "render_user";  // Replace with your database username
$password = "YOUR_PASSWORD"; // Replace with your database password

try {
    // Connect to PostgreSQL
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Read SQL file content
    $sqlFile = file_get_contents("login.sql");
    if (!$sqlFile) {
        die("Error: Unable to read the login.sql file.");
    }

    // Execute SQL commands
    $pdo->exec($sqlFile);
    echo "Database initialized successfully.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
