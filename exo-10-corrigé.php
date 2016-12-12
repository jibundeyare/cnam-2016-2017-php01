<?php

$t = array();

for ($i = 1; $i <= 100; $i++) {
    $utilisateur = array();
    $utilisateur['nom'] = 'utilisateur ' . $i;
    $utilisateur['age'] = rand(14, 99);

    $t[] = $utilisateur;
}

// filtrez la liste des utilisateurs :
// avec une boucle for affichez le nom de
// tous les utilisateurs dont
// l'age est inférieur à 18 ans

for ($i = 0; $i < count($t); $i++) {
    $utilisateur = $t[$i];

    if ($utilisateur['age'] < 18) {
        echo $utilisateur['nom'];
        echo "<br />\n";
    }
}
