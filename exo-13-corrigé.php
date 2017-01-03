<?php

// créez un tableau avec trois entrées
// avec 2 clés alphanumériques
// et 1 clé numérique
// et des valeurs au choix

$t = array(
	'foo' => 123,
	'bar' => true,
	42 => 'lorem ipsum',
);

// effectuez une boucle foreach sur le tableau
// et affichez la valeur de chaque élément
// suivi d'un saut de ligne html

foreach ($t as $e) {
	echo $e . "<br />\n";
}
