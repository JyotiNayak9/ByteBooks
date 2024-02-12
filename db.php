<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "bytebooks";

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}