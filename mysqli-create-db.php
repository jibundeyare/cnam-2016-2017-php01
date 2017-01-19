<?php

$link = mysqli_connect('localhost', 'website', 'website', 'website');

$sql = '
DROP TABLE IF EXISTS user;
CREATE TABLE IF NOT EXISTS user (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  nom varchar(100) NOT NULL,
  prenom varchar(100) NOT NULL,
  email varchar(255) NOT NULL,
  password_hash varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1
';

$result = mysqli_query($sql);

if ($result) {
	echo 'la table user a été créée<br />';
} else {
	echo 'erreur<br />';
}
