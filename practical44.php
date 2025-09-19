<form method="get" action="">
    Marks: <input type="text" name="marks">
    <input type="submit" value="Check">
</form>

<?php
if (isset($_GET['marks'])) {
    $marks = $_GET['marks'];
    echo ($marks >= 40) ? "PASS" : "FAIL";
}
?>
