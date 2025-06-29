<?php
$names = array("joy","rick","rahul");
print_r(array_search("rick",$names));
echo "<br>";
echo "<br>";

$animal = array("cat","dog","rat");
print_r(array_shift($animal));
echo "<br>";
print_r($animal);
echo "<br>";
echo "<br>";

$color = array("red","green","blue","black","white","orange");
print_r(array_slice($color,2));
echo "<br>";
echo "<br>";

$person = array("rick","medha","poly");
array_splice($person, 1, 2, array("rahu","joy"));
print_r($person);
echo "<br>";
echo "<br>";

$num = array(5, 45, 85);
print_r(array_sum($num));
echo "<br>";
echo "<br>";

$colors = array("red","green","red","blue","green", "black");
print_r(array_unique($colors));
echo "<br>";
echo "<br>";

$ani = array("cat","rat","dog");
array_unshift($ani,"bird","hours");
print_r($ani);
echo "<br>";
echo "<br>";

function myFunction(&$value){
    return $value = $value * 2;
}
$numbers = array(3,4,5,6);
array_walk($numbers,"myFunction");
print_r($numbers);
echo "<br>";
echo "<br>";

$marks = array(45, 67, 56, 78);
arsort($marks);
print_r($marks);
echo "<br>";
asort($marks);
print_r($marks);
echo "<br>";
echo "<br>";

$name = "Rick";
$age = 5;
$country = "Germany";
$result = compact("name","age","country");
print_r($result);
echo "<br>";
echo "<br>";

$amni = array("a","v","d","g");
print_r(count($amni));
echo "<br>";
echo "<br>";

$fruits = array("banana","apple","orange");
if(in_array("apple",$fruits)){
    echo "This fruits availble";
}else{
    echo "This fruits not availble";
}
echo "<br>";
echo "<br>";

$data = array('Joy',24,'Dhaka');
list($name,$age,$city) = $data;
echo $name;
echo "<br>";
echo $age;
echo "<br>";
echo $city;
echo "<br>";

$letters = range('A', 'E');
print_r($letters);
?>