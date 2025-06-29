<?php 
$color1 = array("red", "green", "yellow", "blue","black");
$color2 = array("red","green","black");
print_r(array_intersect($color1, $color2));
echo "<br>";
echo "<br>";
print_r(array_intersect_assoc($color1,$color2));
echo "<br>";
echo "<br>";
print_r(array_intersect_key($color1,$color2));
echo "<br>";
echo "<br>";

// array key
$cars = array("Volvo"=>"XC90","BMW"=>"X5");
if(array_key_exists("Volvo",$cars)){
    echo "key exists!";
}else{
    echo "Key does not exists!";
}
echo "<br>";
echo "<br>";

print_r(array_keys($cars));
echo "<br>";
echo "<br>";

$math = array(1,2,3,4,5);
function myFun($num){
    return ($num * $num);
}
print_r(array_map("myFun",$math));
echo "<br>";
echo "<br>";

$a1= array("apple", "mango", "orange");
$a2 = array("cat","dog");
print_r(array_merge($a1,$a2));
echo "<br>";
echo "<br>";

$b1 = array("a"=>"red","b"=>"black");
$b2 = array("c"=>"green", "a"=>"White");
print_r(array_merge_recursive($b1,$b2));
echo "<br>";
echo "<br>";


$names = ["Rana", "Jamal", "Asif"];
$ages = [30, 25, 35];
array_multisort($ages,$names);
print_r($ages);
echo "<br>";
print_r($names);
echo "<br>";
echo "<br>";

?>