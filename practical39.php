<?php
$fruits = array("Apple" => 200, "Banana" => 50, "Orange" => 100);

echo "Sorted by values:<br>";
asort($fruits);
print_r($fruits);

echo "<br><br>Sorted by keys:<br>";
ksort($fruits);
print_r($fruits);
?>