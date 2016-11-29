<?php

// affectez une chaîne de caractères à une variable

// avec un bloc `if` vérifiez si la chaîne de caractères
// est égale à "Toto"

// si elle est égale, affichez "Bonjour Toto"
// en utilisant la variable

// ajoutez un saut de ligne html à la fin

$texte = "lorem ipsum";

if ($texte == "Toto") {
    // affichage par concaténation
    echo "Bonjour " . $texte;
    echo "<br />\n";
}

if ($texte == "Toto") {
    // affichage par interpolation
    echo "Bonjour $texte";
    echo "<br />\n";
}

