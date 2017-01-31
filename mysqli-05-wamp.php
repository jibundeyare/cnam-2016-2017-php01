<?php

// variante de mysqli-05.php
// avec une configuration adaptée à la base de données faite avec wamp (identifiants, requête sql)

$link = mysqli_connect('localhost', 'root', '', 'BdDragon');

if (!$link) {
	echo mysqli_connect_error() . "<br />\n";
	exit();
}

mysqli_set_charset($link, 'utf8');

// une requête de sélection de tous les dragons
$sql = 'SELECT * FROM Dragon';

$result = mysqli_query($link, $sql);

if (!$result) {
	echo mysqli_error($link) . "<br />\n";
	exit();
}

echo 'nombre de résultats : ' . $result->num_rows . "<br />\n";

while ($row = mysqli_fetch_assoc($result)) {
	foreach ($row as $key => $value) {
		echo htmlentities($key) . ' : ' . htmlentities($value) . "<br />\n";
	}
}
