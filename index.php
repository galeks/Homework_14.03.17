<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

$countries = array(1 => 'Ukraine', 2 => 'USA',3 =>'Poland', 4 => 'Canada',5=>'Germany');

echo '<pre>';
print_r($countries);

echo '</pre>';

$var = 'Something';
$arr = array(5,10,3, 'some string',false, 2.54, $var);

$apples_amount = $fruits[0];
$bananas_amount = $fruits[1];
$oranges_amount = $fruits[2];

$fruits[2]=24; // no we get array of 5, 10, 24

echo '<br>';

$numbers = array(22 => 'twenty two', '100' => 'one hundred','45'=>'forty five');

echo $numbers[100]; // we get 'one hundred'

   ?>
</body>
</html>