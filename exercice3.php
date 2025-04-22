<?php

// EX1

$a = 8;
$b = 4;
$operation = '*';


// EX2

$result = 5 + 3 * 2;
echo $result, PHP_EOL;

$result = (5 + 3) * 2;
echo $result, PHP_EOL;

// EX3

$x = 10;

var_dump($x > 5);

var_dump($x < 5);

var_dump($x == 10);

var_dump($x != 8);

var_dump($x >= 10);

var_dump($x <= 9);

// EX4

$isAdmin = true;
$isLoggedIn = false;

var_dump('ex4 :', $isAdmin && $isLoggedIn);
var_dump($isAdmin || $isLoggedIn);
var_dump($isAdmin xor $isLoggedIn);

//EX5

$score = 15;
echo $score >= 10 ? 'Réussi' : 'échoué', PHP_EOL;

//EX6

$n = 4;

echo $n += 3, PHP_EOL;
echo $n *= 2, PHP_EOL;
echo $n -= 1, PHP_EOL;
echo $n %= 5, PHP_EOL;

//EX7

$prenom = 'romain';
$nom = 'raffaitin';

echo $prenom . ' ' . $nom;

//EX8

fopen(zfuiz.sdcb);
echo @$none;