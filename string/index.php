<?php
$str = addcslashes("Hello World","W");
print_r($str);
echo "<br>";

$sentence = addslashes("Hello 'Bangladesh' how are you?");
print_r($sentence);
echo "<br>";

$sen = bin2hex("Hello php");
print_r($sen);
echo "<br>";

$a = chop("Hello world! ");
print_r($a);
echo "<br>";

$b = "Bangladesh";
print_r(chop($b,'h'));
echo "<br>";

$c = "HELLO BANGLADESH";
print_r(chunk_split($c,1,"."));
echo "<br>";
$d = convert_uuencode($c);
print_r($d);
echo "<br>";

$password = "123456";
$hashed = crypt($password,"hj"); //Here use the solt
echo $hashed;
echo "<br>";

$table = get_html_translation_table();
print_r($table);
echo "<br>";

$str = "Hello";
echo md5($str);
echo "<br>";

echo metaphone("World");
echo "<br>";

echo str_repeat("Wow<br>", 13);
echo "<br>";


$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Held!");
?>