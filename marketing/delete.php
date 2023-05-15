<?php
include('connection.php');

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "DELETE FROM images WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        header('Location: dashboard.php');
    } else {
        echo "Error deleting image: " . mysqli_error($conn);
    }
}
?>
