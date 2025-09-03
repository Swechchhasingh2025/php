<?php
$arr=[20,30,40,50,60,70];
$smallest=$arr[0];
$largest=$arr[0];
for($i=0; $i<count($arr);  $i++){
    if($arr[$i]<$smallest){
        $smallest=$arr[$i];
    }
    if($arr[$i]>$largest){
        $largest=$arr[$i];
    }
    
   
}
echo "smallest number is :".$smallest;
echo "<br>";
echo "largest number is :".$largest;









?>