<?php

// affectez un integer à une variable

// affectez un float à une variable

// initialiser une variable `$resultat` avec `null` comme valeur

// effectuez une opératrion arithmétiques avec les opérateurs `+` et `*`
// et stockez le résultat dans la variable `$resultat`

// inspecter la variable `$resultat`

// effectuez une opératrion arithmétiques avec les opérateurs `-` et `/`
// et stockez le résultat dans la variable `$resultat`

// inspecter la variable `$resultat`

// afficher la valeur de la variable `$résultat` en préfixant par "résultat : "

$entier = 432;

$virgule = 3.14;

$resultat = null;

$resultat = $entier + $virgule * $entier;

var_dump($resultat);

$resultat = $entier - $virgule / $entier;

var_dump($resultat);

$texte = "résultat: ";
echo $texte . $resultat;
