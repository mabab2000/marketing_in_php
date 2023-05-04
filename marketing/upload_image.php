<?php
include('dashboard.php');

?><!DOCTYPE html>
<html>
<head>
	<title>My Form</title>
	<style>
		body {
			margin: 0;
			padding: 0;
		}
		.container {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
			background-image: url('electronic.php');
			background-size: cover;
		}
		form {
			box-shadow: 0 0 5px 2px #888888;
			padding: 20px;
			background-color: rgba(255, 255, 255, 0.8);
		}
		form label,
		form input,
		form textarea,
		form button {
			margin: 10px;
		}
	</style>
    <form action="upload.php" method="post" enctype="multipart/form-data">
label for="description">Enter image description:</label>
    <input type="text" name="head" id="description" ></input>
    <br>
    <label for="image">Select image to upload:</label>
    <input type="file" name="image" id="image">
    <br>
    <label for="description">Enter image description:</label>
    <textarea name="description" id="description" rows="5"></textarea>
    <br>
    <input type="submit" value="Upload Image" name="submit">
</form>
