<?php
// Basic connection settings
$databaseHost = "172.22.0.2";
$databaseUsername = 'root';
$databasePassword = 'example';

// Connect to the database
$enlace = mysqli_connect($databaseHost, $databaseUsername, $databasePassword);

if (!$enlace) {
  die('Could not connect to database!: ' . mysqli_connect_error());
}
echo 'Connected to database!';
