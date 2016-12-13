<?php

// attention : les mots "index" et "clé" sont synonymes

$t = array();

// affectation de la valeur 'lorem ipsum' dans le tableau $t
// à l'index numérique 42
$t[42] = 'lorem ipsum';

// affectation de la valeur de l'index numérique 42
// à la variable $valeur
$valeur = $t[42];

// affectation de la valeur 'bar' dans le tableau $t
// à l'index alpha-numérique 'foo'
$t['foo'] = 'bar';

// affectation de la valeur de l'index alpha-numérique 'foo'
// à la variable $valeur
$valeur = $t['foo'];

var_dump($t);
