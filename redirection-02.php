<?php

// définition d'une fonction utilisateur
function redirect($url) {
	header('location: ' . $url, true, 302);
	exit();
}

// redirection vers un moteur de recherche
redirect('http://duckduckgo.com');
