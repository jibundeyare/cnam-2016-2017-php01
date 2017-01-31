<?php

$link = mysqli_connect('localhost', 'website', 'website', 'website');

if (!$link) {
	echo mysqli_connect_error() . "<br />\n";
	exit();
}

mysqli_set_charset($link, 'utf8');

// une requête de sélection d'un seul utilisateur à partir de son id
$id = 1;
$sql = 'SELECT * FROM user WHERE id = ' . mysqli_real_escape_string($link, $id);

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
