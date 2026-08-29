<?php
$servername = "loanform1.c74u6oq6k99z.eu-west-2.rds.amazonaws.com";
$username = "admin";
$password = "admin123";
$dbname = "quickloan_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>