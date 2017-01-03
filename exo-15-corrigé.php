<?php

// créez un tableau de 3 entrées
// avec des clés alphanumériques
// et des valeurs de type string au choix
// une des clé doit être 'foo'

$t = array(
	'foo' => 'toto',
	'bar' => 'titi',
	'baz' => 'tata',
);

// parcourez le tableau avec une boucle foreach
// et affectez la valeur 123 à la clé 'foo'

foreach ($t as $c => $v) {
	if ($c == 'foo') {
		$t[$c] = 123;
	}
}

// inspectez le contenu du tableau
var_dump($t);
