<?php

// déclaration d'un tableau de 3 éléments
// avec des clés alphanumériques
$tableau = array(
	'foo' => 'Lorem ipsum dolor sit amet',
	'bar' => 'consectetur adipiscing elit',
	'baz' => 'Praesent ligula lectus',
);

foreach ($tableau as $cle => $valeur) {
	// affichage avec interpolation
	// des paires clé / valeur
	echo "$cle => $valeur<br />\n";

	// même chose mais avec concaténation
	//echo $cle . " => " . $valeur . "<br />\n";
}
