<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'sports_club_db';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Sambungan gagal: " . $conn->connect_error);
}
?>