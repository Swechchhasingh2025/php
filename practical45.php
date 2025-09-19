<form method="post" action="">
    Enter Name: <input type="text" name="name">
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_POST['name'])) {
    echo "Welcome, " . $_POST['name'] . "!";
}
?>