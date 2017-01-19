<?php

$link = mysqli_connect('localhost', 'website', 'website', 'website');

if (!$link) {
	// une erreur s'est présenté
	echo "erreur de connexion : " . mysqli_connect_error() . "<br />\n";
	exit();
}

// une requête sql en lecture
$sql = 'SHOW TABLES';

// exécution de la requête sql
// et récupération du résultat dans la variable $result
$result = mysqli_query($link, $sql);

// si la requête a échoué
// on affiche un message d'erreur
// et on arrête le programme
if (!$result) {
	echo 'erreur de requête sql : ' . mysqli_error($link) . "<br />\n";
	exit();
}

// on affiche le nombre de résultats de la requête
echo 'nombre de résultats : ' . $result->num_rows . "<br />\n";

while ($row = mysqli_fetch_assoc($result)) {
	foreach ($row as $key => $value) {
		echo htmlentities($key) . ' : ' . htmlentities($value) . "<br />\n";
	}
}
