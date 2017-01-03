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

for ($i = 0; $i < count($t); $i++) {
    if ($t[$i] == 'toto') {
        echo '\'toto\' se trouve à l\'index ' . $i . "<br />\n";
    }
}
