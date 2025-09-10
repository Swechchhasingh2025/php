<?php
//Associative array
$fruits = ["Apple"=>100,"Banana"=>40,"Mango"=>80,"Orange"=>60,"Grapes"=>70];
//sort by values
asort($fruits);
echo "sorted by values: <br>";
foreach($fruits as $fruit=>$price){
    echo $fruit.":".$price."<br>";
}
echo "<br>";
// sort by keys
ksort($fruits);
echo "sorted by keys: <br>";
foreach($fruits as $fruit=>$price){
    echo $fruit.":".$price."<br>";
}
?>