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
settype($string, 'integer');
var_dump($string);

$number = 7.8;
settype($number, 'string');
var_dump($number);

// EX4

$value = 0;
var_dump($value);
echo empty($value);

$value1 = null;
var_dump($value1);

$value2 = '';
var_dump($value2);

$value3 = false;
var_dump($value3);

$value3 = [];
var_dump($value3);

// EX5

$age = '35';
var_dump($age);
settype($age, 'integer');
var_dump($age);

// EX6

var_dump('0' == false); // == égal peut importe le type
var_dump('0' === false); // === égal en prenant en compte le type

// EX7

$table = [34, 34.5, true, 'bonjour', null];
var_dump($table);
