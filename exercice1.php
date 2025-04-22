<?php

// EX1
$name = 'romain';
echo $name, PHP_EOL;

//EX2
$firstName = 'romain';
$lastName = 'raffaitin';

echo "bonjour je mappelle $firstName $lastName", PHP_EOL;


//EX3

$a = 5;
$b = 3;

echo $a + $b, PHP_EOL;
echo $a - $b, PHP_EOL;
echo $a * $b, PHP_EOL;
echo $a / $b, PHP_EOL;

//EX4

$isLoggedIN = false;
echo gettype($isLoggedIN), PHP_EOL;
//echo "Utlisateur connexté : $isloggedIN ";

// EX5

$variable1 = 'test'; // pas de chiffre en premiere position
$ma_variable = 'exemple'; // pas de tiret dans la variable
$class = 'PHP';

// EX6

$temperature = 37;

var_dump($temperature);

$temperature = 'trente sept';

var_dump($temperature);
