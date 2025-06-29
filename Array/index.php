<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " .$cars[0]." ".$cars[1]." and ".$cars[2]."<br> " ;

print_r($cars);
echo "<br>";
echo "<br>";

$person = array("Joy", "Rick", "Medha");
print_r(array_change_key_case($person,CASE_LOWER));
echo "<br>";
echo "<br>";

$age = array("Joy"=>"23","Rick"=>"5","Medha"=>"18");
print_r(array_change_key_case($age,CASE_UPPER));
echo "<br>";
echo "<br>";

$names = array("Joy","Rick","Medha","Rahul","Riva","Poly");
print_r(array_chunk($names,2));

echo "<br>";
echo "<br>";

$persons = array(
    array(
        'id' => 121,
        'first_name' => "Joy",
        'last_name' => "Baidya",
    ),
    array(
        'id' => 122,
        'first_name' => "Rick",
        'last_name' => "Baruri",
    ),
    array(
        'id' => 123,
        'first_name' => "Medha",
        'last_name' => "Baidya",
    )
    );

    $first_name = array_column($persons,'first_name');
    print_r($first_name);

    echo "<br>";
    echo "<br>";

    $fname = array("Joy","Rick","Medha");
    $age = array("23","6","18");
    $result = array_combine($fname,$age);
    print_r($result);

    echo "<br>";
    echo "<br>";

    $fruits = array("apple", "banana","apple", "orange","banana","apple", "orange", "mango");
    print_r(array_count_values($fruits));

    echo "<br>";
    echo "<br>";

    $color1 = array("red","green","blue","black","white");
    $color2 = array("red","white","black");
    $addColor = array_diff($color1, $color2);
    print_r($addColor);
    echo "<br>";
    print_r(array_diff_assoc($color1, $color2));
    echo "<br>";
    
    print_r(array_diff_key($color1, $color2));
    echo "<br/>";

    function myfunction($color1, $color2){
        if($color1===$color2){
        return 0;
        
    }
    return($color1> $color2)?1:-1;
    }
    print_r(array_diff_uassoc($color1, $color2,"myfunction"));
    echo "<br/>";
    print_r(array_diff_ukey($color1, $color2, "myfunction"));

    echo "<br>";
    echo "<br>";

    $a1 = array_fill(2,5,"red");
    $a2 = array_fill(0,2,"black");
    print_r($a1);
    echo "<br>";
    print_r($a2);
    echo "<br>";
    echo "<br>";

    $keys = array("a","b","c","d");
    $results = array_fill_keys($keys,"yellow");
    print_r($results);

    function test_odd($value){
        return ($value %2 == 1);
    }
    $b1 = array(1,2,3,4,5,6,7,5);
    print_r(array_filter($b1,"test_odd"));
    echo "<br>";
    echo "<br>";


    $b2 = array("cat","dog","ball","mango","fug");
    function myfun($value){
        return strpos($value, 'a') !== false||
               strpos($value, "d") !== false;
    }
    print_r(array_filter($b2,"myfun"));

?>