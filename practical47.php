<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration Form</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get values
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validation
        if (empty($username) || empty($email) || empty($password)) {
            echo "<h3 style='color:red;'>Error: All fields are required!</h3>";
        } else {
            echo "<h3 style='color:green;'>Registration Successful!</h3>";
            echo "<p><strong>Username:</strong> " . htmlspecialchars($username) . "</p>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
            echo "<p><strong>Password:</strong> " . htmlspecialchars($password) . "</p>";
        }
        echo "<hr>";
    }
    ?>

    <form action="" method="POST">
        <label>Username:</label>
        <input type="text" name="username"><br><br>

        <label>Email:</label>
        <input type="email" name="email"><br><br>

        <label>Password:</label>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>