<?php
session_start();
if (isset($_POST['email']) && isset($_POST['password'])) {
    include 'connection.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['first_name'] = $row['fname'];
            $_SESSION['last_name'] = $row['lname'];
            $_SESSION['email'] = $row['email'];
            header('Location: dashboard.php');
        } else {
            $error_message = 'Invalid email or password';
        }
    } else {
        $error_message = 'Invalid email or password';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($error_message)) { ?>
        <div><?php echo $error_message; ?></div>
    <?php } ?>
    <form method="POST">
        <div>
            <label>Email:</label>
            <input type="email" name="email" required>
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>
