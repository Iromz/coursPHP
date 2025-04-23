<?php

$var; // Création variable

$var = 'salut'; // une variable peut avoir plusieurs types
$var = 56;

$myVar = 'salut';

echo " <p>$var</p>" . PHP_EOL; // . = concatenation;  PHP_EOL = saut de ligne
echo ' <p>$var</p>', PHP_EOL;
print $var . PHP_EOL;

echo '<pre>';
print_r([12, 7]);  // Visualiser un tableau
var_dump([12, 7]); // Visualiser un tableau en détail
echo '</pre>'; // Visiualiser sur une serveur comme dans le terminal

// TYPES SCALAIRES

echo gettype(true), PHP_EOL;
echo gettype(67), PHP_EOL;
echo gettype('coco'), PHP_EOL;
echo gettype('ls'), PHP_EOL;

echo 'sleep 2 && ls..';

// TYPES COMPOSES

$friends = ['coco', 'jaco', 'pedro'];
echo gettype($friends), PHP_EOL;
// echo $friends;
print_r($friends);
var_dump($friends);

// TYPES SPECIAUX
// ressource (référence)

$user = null;
$user = NULL;
echo gettype($user), PHP_EOL;

// Vérification
// is_xxx()
print is_int(67); //true = 1
print is_int('67'); //false = 0
print is_numeric('7'); // true =1
print is_scalar('67'); // true = 1

// OPERATEURS

// Affectation
$a = 'a';

// Operateur combiné : affectation élargie
$nb1 = 1;
$nb1 += 12; // $nb1 = $nb1+ 12;
$nb1 /= 15;
$nb1 *= 15;
$nb1 -= 15;
$nb1 %= 3; // $nb1 = $nb1 / 3 mais affiche le restant
$n1 **= 3; // $nb1 = $nb1 exposant 3

// Comparaison
var_dump(5 == '5'); // true
var_dump(5 === '5'); // false
var_dump(5 != '5'); // false
var_dump(5 <> '5'); // false
var_dump(5 !== '5'); // true

// < > <= >=

var_dump(5 <=> 5); // 0
var_dump(3 <=> 5); // -1
var_dump(8 <=> 5); // 1

// Opérateur logiques
// &&, || (and, or) ! xor (exclusif (soit l'un soit l'autre))

var_dump(true || true); //true
var_dump(true or true); // true
var_dump(true xor true); // false

// Opérateur d'execution --> ``

$output = `pwd`; // script shell
echo $output, PHP_EOL;

// Contrôle d'erreur
echo @$none;

// Opérateur peur etre unaire, binaire ou ternaire
// unaire --> agit sur une opérante
$a = -1;
$a++;

// binaire --> agit sur deux opérante
$b = 2 + 4;

// ternaire --> agit sur trois opérante
$c = 'coco' ? 'ok' : 'pas ok';

// Précédence (priorité) des opérateurs

var_dump(true || false && true || false && false);
var_dump(true || false || false); // même var que ci-dessus = true

// Associativité (ordre quand il ya la même priorité)

echo 2 + 1 * 3; // 5
echo (2 + 1) * 3; // 9

// CONDITIONS

// if, elseif, else
$mood = 'content';

if ($mood === 'content') {
    echo "tu es $mood", PHP_EOL;
} elseif ($mood === 'triste') {
    echo "quel dommage :(", PHP_EOL;
} else {
    echo "quel est ton humeur?", PHP_EOL;
}


if ($mood === 'content'):  // même condition mais pas même syntaxe
    echo "tu es $mood", PHP_EOL;
elseif ($mood === 'triste'):
    echo "quel dommage :(", PHP_EOL;
else:
    echo "quel est ton humeur?", PHP_EOL;
endif;

?>

<?php if ($mood === 'content'): ?>
    <p> tu es <?= $mood ?></p>
<?php elseif ($mood === 'triste'): ?>
    <p>quel dommage :(</p>
<?php else: ?>
    <p>quel est ton humeur?</p>
<?php endif; ?>

<?php

// switch

switch ($mood) {
    case 'content':
        echo 'toi content !', PHP_EOL;
        break;
    case 'triste':
        echo 'dommage', PHP_EOL;
        break;
    default:
        echo 'ton humeur ?', PHP_EOL;
        break;
}

// match --> cas stricts

$userChoice = 'entrée';
$menu = match ($userChoice) {
    'plat principal' => 'raviolis',
    'entrée', 'salade' => 'riz/thon/tomate',
    default => 'plat non servi',
};

echo $menu, PHP_EOL;

// match --> cas complexe
$age = 18;
$accesAllowed = match (true) {
    $age >= 18 => true,
    default => false,
};

echo $accesAllowed ? 'accès autorisé' : 'accès interdit', PHP_EOL; // ? = si oui ; : = si non

$username;
$userConnected = $username ?? 'anonyme';
$userConnected = isset($username) ? $username : 'anonyme';  // même chose que ci-dessus
echo $userConnected, PHP_EOL;

// BOUCLES

// While, do while

$i = 0;

while ($i <= 10) {
    echo 'le compteur vaut : ', $i++, PHP_EOL;
}

// pas de syntaxe alternative !!!
do {
    print "irération $i" . PHP_EOL;
    $i++;
} while ($i <= 15);


// FOR

for ($i = 0; $i <= 10; $i++) {
    echo 'le compteur vaut : ', $i++, PHP_EOL;
}

for ($i = 0; $i <= 10; $i++):
    echo 'le compteur vaut : ', $i++, PHP_EOL;
endfor;

// FOREACH

foreach (str_split('LUIGI') as $char) {
    echo $char, PHP_EOL;
}

// TABLEAU

$array = [
    'one' => 'val1',
    'two' => 'val2',
    'three' => 'val3',
];

var_dump($array);

foreach ($array as $key => $value) {
    echo $key, " => ", $value, PHP_EOL;
}

// FONCTION

function greet($firstName, $lasteName)
{
    echo "bonjour $firstName ", strtoupper($lasteName), ' !', PHP_EOL; // strtoupper = MAJUSCULE
};

greet('romain', 'raffaitin');


$b = 'b';

function test($a)
{ // si on ajoute & (test (&$a)) la valeur initial de $b va être modifié
    $a = 'sdqcsdf';
    return $a;
};

echo test($b), PHP_EOL; // 'sdqcsdf'
echo $b, PHP_EOL; // 'b'

function entier($tab)
{
    $tab = [45, 29, 36, 59, 59];
};

$ar = [63.15165, -65.4];

entier($ar);
var_dump($ar);
