<?php

// @todo communiquer sur mysqli_set_charset()

// connexion à la base données
// adresse du serveur, utilisateur, mot de passe, base de données
$link = mysqli_connect('localhost', 'website', 'website', 'website');

// var_dump($link);

// si $link == false, la connexion a échoué
// on affiche un message d'erreur
// et on arrête le programme
if (!$link) {
	// une erreur s'est présenté
	echo "erreur de connexion : " . mysqli_connect_error() . "<br />\n";
	exit();
}

// sélection du codage de caractères
mysqli_set_charset($link, 'utf8');

echo "la connexion a fonctionné<br />\n";
