<?php

// afficher les nombres de 0 à 100, par pas de 2
// en utilisant une boucle `while`

// affectation de l'index
$i = 0;

// tant que l'index est <= à 100, on boucle
while ($i <= 100) {
    // on affiche $i
    echo $i;

    // on affiche un saut de ligne
    echo "<br />\n";

    // on incrémente $i de 2
    $i = $i + 2;
}
