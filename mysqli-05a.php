<?php

$link = mysqli_connect('localhost', 'website', 'website', 'website');

if (!$link) {
	echo mysqli_connect_error() . "<br />\n";
	exit();
}

mysqli_set_charset($link, 'utf8');

// requête d'insertion d'un seul utilisateur
// sha1() est une fonction de hashage (à utiliser pour les mots de passe)
$sql = "
INSERT INTO user
(nom, prenom, email, password_hash)
VALUES
('Titi', 'Tutu', 'titi.tutu@cnam.net', '" . sha1('123') . "')
";

$result = mysqli_query($link, $sql);

if (!$result) {
	echo mysqli_error($link) . "<br />\n";
	exit();
}

echo "les données ont été insérées<br />\n";

// affichage du dernier id inséré
echo 'id du dernier élément inséré : ' . mysqli_insert_id($link) . "<br />\n";
