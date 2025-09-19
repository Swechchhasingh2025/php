<form method="get" action="">
    Number1: <input type="text" name="num1"><br>
    Number2: <input type="text" name="num2"><br>
    <input type="submit" value="Add">
</form>

<?php
if (isset($_GET['num1']) && isset($_GET['num2'])) {
    $sum = $_GET['num1'] + $_GET['num2'];
    echo "Sum = $sum";
}
?>