<?php
$conn = new mysqli("localhost", "root", "admin123", "bloodb", 3308);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM donor WHERE donor_id = $id";

if ($conn->query($sql) === TRUE) {
  echo "<script>
    alert('Donor deleted successfully.');
    window.location.href = 'display_donor.php';
  </script>";
} else {
  echo "Error deleting donor: " . $conn->error;
}

$conn->close();
?>
