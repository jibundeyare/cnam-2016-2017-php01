<?php

// initialisez une variable `$tab1` avec un tableau
// composé d'un integer, un string et un boolean

// initialisez une variable `$tab2` avec un tableau
// composé de trois integers

// inspectez la variable `$tab1`

// inspectez la variable `$tab2`

// effectuez une addition avec le 1er élément du tableau `$tab1` et un integer
// stocker le résultat dans la variable `$resultat`

// afficher la valeur de la variable `$résultat` en préfixant par "résultat : "

// affichez un saut de ligne html

// ajoutez le 2ème et le 3ème éléments du tableau `$tab1` au tableau `$tab2`

// inspectez la variable `$tab2`

// affichez le 1er élémennt du tableau `$tab2`

// affichez un saut de ligne html

$tab1 = array(
    123,
    'toto',
    true,
);

$tab2 = array(
    100,
    101,
    102,
);

var_dump($tab1);

var_dump($tab2);

$resultat = $tab1[0] + 2;

echo "résultat: $resultat";

echo "<br />\n";

$tab2[] = $tab1[1];
$tab2[] = $tab1[2];

var_dump($tab2);

echo $tab2[0];

echo "<br />\n";

