<?php
//existing associative array
$countries=array("India"=>"New Delhi","USA"=>"Washingoton","UK"=>"London","France"=>"Paris","Japan"=>"Tokyo");
echo "Before adding:<br>";
print_r($countries);
echo "<br>";
//add a new key-value pair
$countries["Germany"]="Berlin";
echo "After adding Germany:<br>";
print_r($countries);
?>