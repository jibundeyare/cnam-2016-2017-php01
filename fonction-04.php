<?php

$tableau = [255, 3.14, 123, 42];

var_dump($tableau);

// passage de la variable $tableau par référence
$resultat = sort($tableau);

// la variable $tableau a été modifiée
var_dump($tableau);
var_dump($resultat);
