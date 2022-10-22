<?php

$databaseHost = 'db';
$databaseUsername = 'root';
$databasePassword = 'example';

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword);

if (!$conn) {
  die('Could not connect to MariaDB!: ' . mysqli_connect_error());
}
echo 'Connected to MariaDB!';

mysqli_close($conn)
?>