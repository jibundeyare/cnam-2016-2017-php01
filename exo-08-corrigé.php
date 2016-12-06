<?php

$t = array();

for ($i = 0; $i <= 20; $i++) {
    $t[] = rand(0, 100);
}

// parcourez le tableau $t
// avec une boucle for
// et affichez tous les nombres pairs

for ($i = 0; $i <= 20; $i++) {
    if ($t[$i] % 2 == 0) {
        echo $t[$i] . "\n";
    }
}
