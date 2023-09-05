<?php
session_start();
ob_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "slayRecipes";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
