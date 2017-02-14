<?php

function connect() {
	$server = 'localhost';
	$login = 'website';
	$password = 'website';
	$database = 'website';

	$link = mysqli_connect($server, $login, $password, $database);

	if (!$link) {
		echo "erreur de connexion : " . mysqli_connect_error() . "<br />\n";
		exit();
	}

	mysqli_set_charset($link, 'utf8');

	return $link;
}
