<?php

$link = mysqli_connect('localhost', 'website', 'website', 'website');

if (!$link) {
	echo mysqli_connect_error() . "<br />\n";
	exit();
}

mysqli_set_charset($link, 'utf8');

// requête d'insertion de 3 utilisateurs
// sha1() est une fonction de hashage (à utiliser pour les mots de passe)
$sql = "
INSERT INTO user
(nom, prenom, email, password_hash)
VALUES
('Bar', 'Foo', 'foo.bar@cnam.net', '" . sha1('123') . "'),
('Lorem', 'Ipsum', 'lorem.ipsum@cnam.net', '" . sha1('123') . "'),
('Baz', 'Toto', 'toto.baz@cnam.net', '" . sha1('123') . "')
";

$result = mysqli_query($link, $sql);

if (!$result) {
	echo mysqli_error($link) . "<br />\n";
	exit();
}

echo "les données ont été insérées<br />\n";

// affichage du dernier id inséré (celui de Baz Toto)
echo 'id du dernier élément inséré : ' . mysqli_insert_id($link) . "<br />\n";

