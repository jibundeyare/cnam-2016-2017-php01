<?php

$link = mysqli_connect('localhost', 'website', 'website', 'website');

if (!$link) {
	echo mysqli_connect_error() . "<br />\n";
	exit();
}

// requête de la liste des base de données
$sql = 'SHOW TABLES';

$result = mysqli_query($link, $sql);

if (!$result) {
	echo 'erreur de requête sql : ' . mysqli_error($link) . "<br />\n";
	exit();
}

// on affiche le nombre de résultats de la requête
echo 'nombre de résultats : ' . $result->num_rows . "<br />\n";

// on boucle sur chaque ligne du résultat
while ($row = mysqli_fetch_assoc($result)) {
    // on boucle sur chaque colonne de ligne en cours
	foreach ($row as $key => $value) {
        // on affiche le nom de la colonne et sa valeur
		echo htmlentities($key) . ' : ' . htmlentities($value) . "<br />\n";
	}
}
