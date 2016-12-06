<?php

// remplir un tableau $t
// avec les nombres pairs de 0 à 100
// en se servant de la boucle for

$t = array();

for ($i = 0; $i <= 100; $i += 2) {
    $t[] = $i;
}

$t = array();

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $t[] = $i;
    }
}
