<?php

// EX1

$couleurs = ['rouge', 'bleu', 'vert'];

foreach ($couleurs as $value) {
    echo "couleur : $value", PHP_EOL;
};

// EX2

$personne = [
    'nom' => 'romain',
    'age' => '26',
];

print_r($personne);
var_dump($personne);

// EX3

$fruits = ['pomme', 'banane'];

$fruits[] = 'kiwi';

var_dump($fruits);

// EX4

$animaux = ['chat', 'chien', 'lapin'];

unset($animaux[0]);

var_dump($animaux);

// EX5

$nombres = [5, 2, 9, 1, 7];

sort($nombres);
print_r($nombres);

// EX6

$fruits = ['pomme', 'banane', 'kiwi', 'orange', 'poire', 'mandarine'];

var_dump(count($fruits));

// EX7

$sports = ['football', 'basketball', 'tennis'];

if (in_array('handball', $sports)) {
    echo 'il y a le basket', PHP_EOL;
} else {
    echo "ce sport n'existe pas", PHP_EOL;
};

// EX8

$tableau1 = ['a', 'b'];
$tableau2 = ['c', 'd'];

var_dump(array_merge($tableau1,$tableau2));
