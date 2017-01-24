<?php

// adaptez ce script pour qu'il fonctionne avec la base de donnée DbDragon
// qui a été créée dans l'environnement wamp

$link = mysqli_connect('localhost', 'root', '', 'DbDragon');

if (!$link) {
	echo mysqli_connect_error() . "<br />\n";
	exit();
}

// une requête de sélection d'un seul utilisateur à partir de son id
$dragon = 'bolong';
$sql = "SELECT * FROM user WHERE dragon = '" . mysqli_real_escape_string($link, $dragon) . "'";

$result = mysqli_query($link, $sql);

if (!$result) {
	echo mysqli_error($link);
	exit();
}

echo 'résultats : ' . $result->num_rows . "<br />\n";

while ($row = mysqli_fetch_object($result)) {
	// var_dump($row);

	echo 'dragon : ' . $row->dragon . "<br />\n";
	echo 'sexe : ' . $row->sexe . "<br />\n";
	echo 'longueur : ' . $row->longueur . "<br />\n";
	echo 'ecailles : ' . $row->ecailles . "<br />\n";
	echo 'crachefeu : ' . $row->crachefeu . "<br />\n";
}
