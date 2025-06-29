<?php
$color = array("red","green");
print_r((array_pad($color,5,"blue")));
echo "<br>";
echo "<br>";

$animals = array("cat","dog","frug");
array_pop($animals);
print_r($animals);
echo "<br>";
echo "<br>";

$num = array(5,5);
echo (array_product($num));
echo "<br>";
echo "<br>";

$fruits = array("apple","banana","orange");
array_push($fruits,"mango","angul");
print_r($fruits);
echo "<br>";
echo "<br>";

$animal = array("dog", "cat", "rat");
$key = array_rand($animal);
echo "Random value is:".$animal[$key];
echo "<br>";
echo "<br>";

$words = ["i", "love", "php"];
function myfunction($a,$b){
return $a ." ". $b;
}
$sentence = array_reduce($words,"myfunction");
echo $sentence;
echo "<br>";
echo "<br>";

$numbers = [2, 3, 5];
function myfun($num1, $num2){
    return $num1 * $num2;
}
$result = array_reduce($numbers,"myfun",1);
echo $result;
echo "<br>";
echo "<br>";

$color1 = array("red","blue");
$color2 = array("green","black");
print_r(array_replace($color1,$color2));
echo "<br>";
echo "<br>";

$a1 = array("a"=>array("red"), "b"=>array("green","blue"));
$a2 = array("a"=>"black","b"=>array("red"));
print_r(array_replace_recursive($a1,$a2));
echo "<br>";
echo "<br>";


$cars=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($cars));
?>