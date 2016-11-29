<?php

$nombre1 = 123;
$nombre2 = 42;

$condition1 = $nombre1 > 50;
var_dump($condition1);

$condition2 = $nombre2 > 50;
var_dump($condition2);

if ($nombre1 > 50) {
	echo "ce code est toujours exécuté";
	echo "<br />\n";
}

if ($nombre2 > 50) {
	echo "ce code n'est jamais exécuté";
	echo "<br />\n";
}
