<?php

// créez un tableau de 3 entrées
// avec des clés alphanumériques
// et des valeurs de type string au choix

$t = array(
	'foo' => 'toto',
	'bar' => 'titi',
	'baz' => 'tata',
);

// parcourez le tableau avec une boucle foreach
// et affichez les clés et valeurs
// sous la forme :
//   cle: valeur
// suivi d'un saut de ligne html

foreach ($t as $c => $v) {
	echo "$c: $v<br />\n";
}
