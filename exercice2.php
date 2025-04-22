<?php

// Ex1

$chaine = 'salut';
$entier = 4;
$boolean = false;

echo gettype($chaine), PHP_EOL;
echo gettype($entier), PHP_EOL;
echo gettype($boolean), PHP_EOL;

// Ex 2

$a = "10";
$b = 5;
$result = $a + $b;

echo $result, PHP_EOL;
echo gettype($result), PHP_EOL;

// EX3

$string = '123';
settype($string);
var_dump($string);

$number = 7.8;
print is_string($number);
var_dump($number);