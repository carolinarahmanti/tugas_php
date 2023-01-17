<!-- Menghubungkan PHP ke Database -->

<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname = 'percobaan';

$conn = mysqli_connect($hostname, $username, $password, $dbname);
?>