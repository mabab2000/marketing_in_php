<?php
include('connection.php');

if (isset($_POST['submit'])) {
    // Get image data from form
    $name = mysqli_real_escape_string($conn, $_FILES['image']['name']);
    $description = mysqli_real_escape_string($conn, $_POST['description']);
    $image = mysqli_real_escape_string($conn, file_get_contents($_FILES['image']['tmp_name']));
    $head = $_POST['head'];
    $type = $_POST['ubwoko'];


    // Insert image data into database
    $sql = "INSERT INTO images (head, name, description,type, image) VALUES ('$head', '$name', '$description','$type', '$image')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Image uploaded successfully";
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Error uploading image: " . mysqli_error($conn);
    }
}
?>
