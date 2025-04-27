<?php
$host = 'localhost';
$user = 'root';
$pass = 'bismillah.123';
$dbname = 'film_db';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
?>
