<?php
$arr= [10,20,34,56,88,99,100,99,20,10];
echo "Original Array: ";
print_r($arr);
echo"<br>";
$unique=array_unique($arr);
echo "Array after removing duplicates: ";
print_r($unique);
?>