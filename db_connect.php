<?php
$conn = new mysqli("localhost", "root", "admin123", "bloodb", 3308);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
