<?php
$names=["niyati" =>61, "tanu" => 60,"saumya" => 40];
$key = "saumya";
if(array_key_exists($key,$names)){
    echo "key '$key' exists in the array";
}else{
        echo "key '$key' does not  the array";
    }
?>