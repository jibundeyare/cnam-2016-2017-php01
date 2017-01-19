<?php

$texte = 'lorem ipsum lorem ipsum lorem ipsum';

// passage de la variable $texte par valeur
$texte2 = str_replace('ipsum', 'baz', $texte);

// la variable $texte n'est pas modifiée
var_dump($texte);
var_dump($texte2);
