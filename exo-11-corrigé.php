<?php

$t = array();

for ($i = 1; $i <= 100; $i++) {
    $utilisateur = array();
    $utilisateur['nom'] = 'utilisateur ' . $i;
    $utilisateur['age'] = rand(14, 99);

    $t[] = $utilisateur;
}

$i = rand(0, count($t) - 1);
$t[$i]['nom'] = 'toto';

// retrouvez toto :
// parcourez le tableau $t avec une boucle for
// et affichez l'age de toto

for ($i = 0; $i < count($t); $i++) {
    $utilisateur = $t[$i];

    if ($utilisateur['nom'] == 'toto') {
        echo $utilisateur['age'];
        echo "<br />\n";
    }
}
