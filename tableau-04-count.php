<?php

$t = array();

// on inspecte la taille du tableau (le nombre d'éléments dans le tableau)
var_dump(count($t));

// on inspecte le contenu du tableau
var_dump($t);

// on ajoute le nombre 123 dans le tableau
$t[] = 123;

var_dump(count($t));
var_dump($t);

// on ajoute la chaîne de caractères 'foo' à l'index 100
$t[100] = 'foo';

var_dump(count($t));
var_dump($t);

// on ajoute un index 'bar' et on met 'baz' dedans
$t['bar'] = 'baz';

var_dump(count($t));
var_dump($t);
