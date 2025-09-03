<?php
$arr=[2,3,5,67,8,7,8,9,55];
echo "original array:";
print_r($arr);
echo "<br><br>";

$temp=$arr;
sort($temp);
echo "sort()";
print_r( $temp)."<br>";



?>