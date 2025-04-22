<?php

// EX1

$age = 18;

if ($age >= 18) {
    echo 'tu es majeur', PHP_EOL;
} else
    echo 'tu es mineur', PHP_EOL;

// EX2

$nombre = 4;

if ($nombre >= 0) {
    echo 'tu es positif', PHP_EOL;
} elseif ($nombre <= 0) {
    echo 'tu es négatif', PHP_EOL;
} else
    echo 'tu es nul', PHP_EOL;

// EX3

$nombre = 88;
$result = $nombre %= 2;

if ($result == 0) {
    echo 'tu es pair', PHP_EOL;
} else
    echo 'tu es impair', PHP_EOL;

// EX4

$age = 69;

if ($age >= 18 && $age <= 65) {
    echo 'tu es dans la plage', PHP_EOL;
} else
    echo "tu n'es pas dans la plage", PHP_EOL;

//EX5

$password = 1235;

if ($password === 1234) {
    echo 'mot de passe valide', PHP_EOL;
} else
    echo 'mot de passe invalide', PHP_EOL;

//EX6

$nombre = 31;
$result = $nombre %= 5;
$nombre = 31;
$result1 = $nombre %= 3;

if ($result === 0 && $result1 === 0) {
    echo 'ce nombre est divible par 3 et 5', PHP_EOL;
} else
    echo "ce nombre n'est pas divisible par 3 et 5 ", PHP_EOL;

// EX7

$temperature = 14;

if ($temperature > 30) {
    echo 'fait chaud', PHP_EOL;
} elseif ($temperature >= 15 && $temperature <= 30) {
    echo 'fait bon', PHP_EOL;
} else
    echo 'fait froid', PHP_EOL;

//EX8

