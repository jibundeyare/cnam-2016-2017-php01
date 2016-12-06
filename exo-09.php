<?php

$t = array();

for ($i = 0; $i < 10; $i++) {
    $t[$i] = '';
}

$i = rand(0, 9);
$t[$i] = 'toto';

// parcourez le tableau $t
// avec une boucle for
// et affichez l'index ou se trouve 'toto'
