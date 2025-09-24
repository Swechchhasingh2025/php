<form method="post" action="">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <input type="submit" value="Login">
</form>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == "admin" && $pass == "12345") {
        echo "Login successful!";
    } else {
        echo "Invalid credentials.";
    }
}
?>
