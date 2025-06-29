<?php
$path = "/testweb/home.php";
print_r(basename($path));
echo "<br>";

$p = "test.txt";
print_r(chgrp($p,"admin"));
echo "<br>";
echo "<br>";

$date = date_create("2025-03-16");
date_add($date,date_interval_create_from_date_string("40 days"));
echo date_format($date,"Y-m-d");
echo "<br>";

print_r(microtime());