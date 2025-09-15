<?php
$countries=array("India"=>"New Delhi","USA"=>"Washington","France"=>"Paris","Japan"=>"Tokyo","Nepal"=>"Kathmandu");
$capital="Paris";
$country=array_search($capital,$countries);
if($country!==false){
    echo"The capital city '$capital'belongs to country";
}else{
    echo "capital city '$capital'not found in the list.";
}
?>
