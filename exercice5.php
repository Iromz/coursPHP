<?php

// EX1


for ($i = 1; $i <= 10; $i++) {
    echo 'cela vaut : ', $i, PHP_EOL;
};

// EX2

$somme = 0;

while ($somme < 10) {
    echo 'somme = ', $somme++, PHP_EOL;
};

echo $somme, PHP_EOL;


// EX3

$number = 0;

do {
    echo $number++, PHP_EOL;
} while ($number <= 5);

echo $number, PHP_EOL;


// EX4

$fruits = ["pomme", "bananne", "orange", "kiwi"];

for ($i = 0; $i < count($fruits); $i++) {
    echo $fruits[$i], PHP_EOL;
}

// EX5

$personne = [
    'nom' => 'romain',
    'age' => '26',
];

var_dump($personne);

foreach ($personne as $key => $value) {
    echo $key, " => ", $value, PHP_EOL;
}


// EX6

for ($i = 0; $i <= 10; $i++) {
    if ($i == 5)
        continue;
    echo 'cela vaut : ', $i, PHP_EOL;
};


// EX7

$nombre = [1, 2, 3, 4, 5, 6, 7, 8, 9];

foreach ($nombre as $value) {
    if ($value == 0)
        continue;
    echo "numéro : $value", PHP_EOL;
}


// EX8 

for ($i = 10; $i > 0; $i--) {
    echo "valeur ", $i, PHP_EOL;
}


// EX9


// EX10


