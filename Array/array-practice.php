<?php
function myFunction($value){
    return strpos($value,'a') !== false ||
    strpos($value,'e') !== false;
}
$names = array("joy","rahul","medha");
print_r(array_filter($names,"myFunction"));
echo "<br>";

function myFun($value){
    return ($value %2 == 1);
}
$numbers = array(12, 4, 7, 9, 5,80);
print_r(array_filter($numbers,"myFun"));


$n = array("a","b","c");
print_r(array_rand($n));

$p = ["a",["b"],"c",["d"]];

?>