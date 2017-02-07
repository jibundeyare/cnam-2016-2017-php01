<?php

// définition d'une fonction anonyme / lambda
$makeEmail = function($user, $domain = 'lecnam.net') {
	return $user . '@' . $domain;
};

// appel d'une fonction anonyme / lambda sans le deuxième paramètre optionnel
// récupération de la valeur dans une variable
$email = $makeEmail('foo.bar');

echo $email . "<br />\n";

// appel d'une fonction anonyme / lambda avec le deuxième paramètre optionnel
// récupération de la valeur dans une variable
$email2 = $makeEmail('foo.bar', 'ailleurs.com');

echo $email2 . "<br />\n";
