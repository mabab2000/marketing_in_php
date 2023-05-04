<?php
include('register.php');
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$phone = $_POST["phone"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];

	// Validate form data
	if (empty($fname) || empty($lname) || empty($phone) || empty($email) || empty($password) || empty($confirm_password)) {
		echo "Please fill in all fields.";
	} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid email format.";
	} else if ($password != $confirm_password) {
		echo "Passwords do not match.";
	} else {
		// Hash the password for security
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);

		// Store the user data in the database
		// TODO: Replace this with actual code to store the data in your database
		try {
			$conn->query("INSERT INTO users (fname, lname, phone, email, password) VALUES ('$fname', '$lname', '$phone', '$email', '$hashed_password')");
			// Redirect the user to the login page
			header("Location: login.php");
			exit();
		} catch (mysqli_sql_exception $e) {
			// Check for duplicate entry error
			if ($e->getCode() === 1062) {
				echo "Email already exists.";
			} else {
				echo "Error: " . $e->getMessage();
			}
		}
	}
}
?>
