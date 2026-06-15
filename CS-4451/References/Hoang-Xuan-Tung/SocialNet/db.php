<?php

$host = "localhost";
$dbname = "socialnet";
$dbuser = "testuser";
$dbpass = "123456";


$conn = new mysqli($host, $dbuser, $dbpass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
