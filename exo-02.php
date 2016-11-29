<?php

// $tab1 (entier, string, boolean)
$tab1 = array(
	123,
	'toto',
	true,
);

// $tab2 ()
$tab2 = array(
	100,
	101,
	102,
);

// inspecter $tab1
var_dump($tab1);
// inspecter $tab2
var_dump($tab2);

// $resultat = $tab1 (entier) + entier
$resultat = $tab1[0] + 2;

// afficher le résultat
// résultat: 999.99
echo "résultat: $resultat";
echo "<br />\n";

// ajouter à $tab2 les valeurs $tab1 (string), $tab1 (boolean)
$tab2[] = $tab1[1];
$tab2[] = $tab1[2];

// inspecter $tab2
var_dump($tab2);

// afficher $tab2 (string)
echo $tab2[0];
echo "<br />\n";
