<?php

$unNombre = 123;
$unAutreNombre = 3.14;
$duTexte = 'bonjour';
$encoreDuTexte = "hello";

$unTableau = array();
var_dump($unTableau);

$unTableau[] = $unNombre;
var_dump($unTableau);

$unTableau[] = $unAutreNombre;
$unTableau[] = $duTexte;
$unTableau[] = $encoreDuTexte;
var_dump($unTableau);
