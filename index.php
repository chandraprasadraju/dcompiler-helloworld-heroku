<?php
$servername = "us-cdbr-east-02.cleardb.com";
$username = "ba5cf8055fb07c";
$password = "3c0c9c23";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>