<?php

$link = mysqli_connect('localhost', 'website', 'website', 'website');

if (!$link) {
	echo mysqli_connect_error() . "<br />\n";
	exit();
}

// requête de création de la base de données
$sql = '
CREATE TABLE IF NOT EXISTS user (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  nom varchar(100) NOT NULL,
  prenom varchar(100) NOT NULL,
  email varchar(255) NOT NULL,
  password_hash varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
';

$result = mysqli_query($link, $sql);

// si $result == false, la requête a échoué
// on affiche un message d'erreur
// et on arrête le programme
if (!$result) {
	// une erreur s'est présenté
	echo mysqli_error($link) . '<br />';
}

echo 'la table a été créée<br />';
