<?php

// définition d'une fonction
// qui prend deux paramètres
// dont le deuxième paramètre est optionnel
// et qui renvoit une valeur
function makeEmail($user, $domain = 'lecnam.net') {
	return $user . '@' . $domain;
}

// appel d'une fonction sans le deuxième paramètre optionnel
// récupération de la valeur dans une variable
$email = makeEmail('foo.bar');

echo $email . "<br />\n";

// appel d'une fonction avec le deuxième paramètre optionnel
// récupération de la valeur dans une variable
$email2 = makeEmail('foo.bar', 'ailleurs.com');

echo $email2 . "<br />\n";
