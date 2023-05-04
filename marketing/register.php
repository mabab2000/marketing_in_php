<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>Registration Form</h1>
	<form method="post" action="register_process.php">
		<label for="fname">First Name:</label><br>
		<input type="text" id="fname" name="fname"><br>

		<label for="lname">Last Name:</label><br>
		<input type="text" id="lname" name="lname"><br>

		<label for="phone">Phone:</label><br>
		<input type="tel" id="phone" name="phone"><br>

		<label for="email">Email:</label><br>
		<input type="email" id="email" name="email"><br>

		<label for="password">Password:</label><br>
		<input type="password" id="password" name="password"><br>

		<label for="confirm_password">Confirm Password:</label><br>
		<input type="password" id="confirm_password" name="confirm_password"><br>

		<input type="submit" value="Submit">
	</form>
	<p>Already have an account? <a href="login.php">Log in here</a>.</p>
</body>
</html>
