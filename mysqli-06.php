<?php

$link = mysqli_connect('localhost', 'website', 'website', 'website');

if (!$link) {
	echo mysqli_error_connect() . "<br />\n";
	exit();
}

// une requête de sélection d'un seul utilisateur à partir de son id
$id = 1;
$sql = 'SELECT * FROM users WHERE id = ' . mysqli_real_escape_string($id);

$result = mysqli_query($link, $sql);

if (!$result) {
	echo mysqli_error($link);
	exit();
}

echo 'résultats : ' . $result->num_rows . "<br />\n";

while ($row = mysqli_fetch_assoc($result)) {
	foreach ($row as $key => $value) {
		echo $key . ' : ' . $value . "<br />\n";
	}
}
