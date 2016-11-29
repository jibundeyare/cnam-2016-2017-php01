<?php

// integer
$entier = 432;
// float
$virgule = 3.14;

// $resultat
$resultat = null;

// $resultat = + *
$resultat = $entier + $virgule * $entier;

// inspecter $resultat
var_dump($resultat);

// $resultat = - /
$resultat = $entier - $virgule / $entier;

// inspecter $resultat
var_dump($resultat);

// afficher le résultat
// résultat: 999.99
$texte = "résultat: ";
echo $texte . $resultat;
