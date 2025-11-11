<?php
$host = "localhost";
$user = "root";
$password = ""; // Default XAMPP password is empty
$database = "my_portfolio"; // Change to your actual DB name

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
