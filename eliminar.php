<?php
include 'conex.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: leer.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>