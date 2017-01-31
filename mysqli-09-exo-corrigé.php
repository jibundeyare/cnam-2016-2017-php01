<?php

// adaptez le code pour que la requête sql renvoit tous les utilisateurs

$link = mysqli_connect('localhost', 'website', 'website', 'website');

if (!$link) {
	echo mysqli_connect_error() . "<br />\n";
	exit();
}

mysqli_set_charset($link, 'utf8');

// une requête de sélection d'un seul utilisateur à partir de son id
$sql = sprintf(
	"SELECT * FROM user"
);

$result = mysqli_query($link, $sql);

if (!$result) {
	echo mysqli_error($link);
	exit();
}

echo 'résultats : ' . $result->num_rows . "<br />\n";

while ($row = mysqli_fetch_object($result)) {
	// var_dump($row);

	echo 'id : ' . $row->id . "<br />\n";
	echo 'nom : ' . $row->nom . "<br />\n";
	echo 'prenom : ' . $row->prenom . "<br />\n";
	echo 'email : ' . $row->email . "<br />\n";
	echo 'password_hash : ' . $row->password_hash . "<br />\n";
}
