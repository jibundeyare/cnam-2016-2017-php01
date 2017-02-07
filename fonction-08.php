<?php

// définition d'une fonction
// qui prend deux paramètres
// et qui renvoit une valeur
function makeEmail($user, $domain) {
	return $user . '@' . $domain;
}

// appel d'une fonction qui prend deux paramètres
// récupération de la valeur dans une variable
$email = makeEmail('foo.bar', 'lecnam.net');

echo $email . "<br />\n";
