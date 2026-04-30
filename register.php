<?php
include 'db.php';

if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (username, password)
            VALUES ('$username', '$password')";

    if($conn->query($sql) === TRUE) {
        echo "Registered successfully! <a href='index.php'>Login</a>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<h2>Register</h2>
<form method="post">
Username: <input type="text" name="username" required><br><br>
Password: <input type="password" name="password" required><br><br>
<input type="submit" name="register" value="Register">
</form>

<a href="index.php">Already have account?</a>