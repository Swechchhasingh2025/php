<?php
$countries = array("India" => "New Delhi", "France" => "Paris", "Germany" => "Berlin");
$capital = "Paris";
$country = array_search($capital, $countries);

if ($country) {
    echo "$capital is the capital of $country.";
} else {
    echo "Capital not found.";
}
?>