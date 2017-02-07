<?php

// créer une fonction qui renvoit par défaut
// vers la page "login.php".
// appelez cette fonction sans paramètre.
// puis appelez cette fonction avec
// "http://lecnam.net" comme paramètre.

function redirection($url = 'login.php') {
	header('location: ' . $url, true, 302);
	exit();
}

// redirection();

redirection("http://lecnam.net");
