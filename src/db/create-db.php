<?php
// Basic connection settings
$databaseHost = 'db';
$databaseUsername = 'root';
$databasePassword = 'example';
// MariaDB connection
$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword);

if (!$conn) {
    die('Could not connect to MariaDB!: ' . mysqli_connect_error());
}
echo 'Connected to MariaDB!<br>';
// Get variable from form imput
$dbname = $_POST['db-name'];
// Create database
$sql = "CREATE DATABASE $dbname";

if ($conn->query($sql) === TRUE) {
    echo 'Database "' . $dbname . '" created successfully';
} else {
echo 'Error creating database: ' . $conn->error;
}
// Close connection
mysqli_close($conn)
?>