<?php
$conn = new mysqli("localhost", "root", "admin123", "bloodb", 3308);

$id = $_GET['id'];

if ($conn->query("DELETE FROM doctor WHERE doctor_id=$id") === TRUE) {
    echo "<script>
        alert('Doctor deleted successfully.');
        window.location.href='display_doctor.php';
    </script>";
} else {
    echo "Error deleting doctor: " . $conn->error;
}

$conn->close();
?>

