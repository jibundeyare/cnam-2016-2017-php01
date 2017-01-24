<?php

$link = mysqli_connect('localhost', 'website', 'website', 'website');

if (!$link) {
	echo mysqli_connect_error() . "<br />\n";
	exit();
}

// une requête de sélection de tous les utilisateurs
$sql = 'SELECT * FROM user';

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
