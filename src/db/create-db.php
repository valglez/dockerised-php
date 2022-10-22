<?php

$databaseHost = 'db';
$databaseUsername = 'root';
$databasePassword = 'example';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword);

if (!$conn) {
    die('Could not connect to MariaDB!: ' . mysqli_connect_error());
}
echo 'Connected to MariaDB!<br>';

$dbname = $_POST['db-name'];

$sql = "CREATE DATABASE $dbname";

if ($conn->query($sql) === TRUE) {
    echo 'Database ' . $dbname . ' created successfully';
} else {
echo 'Error creating database: ' . $conn->error;
}
?>