<?php

$url = 'http://duckduckgo.com';

// redirection vers la page $url
// on remplace d'éventuelles redirections définies au préalable
// on spécifie qu'il s'agit d'une redirection temporaire
header('location: ' . $url, true, 302);
// exit();

// cette redirection n'aura jamais lieu (car après l'exit)
header('location: http://google.com', true, 302);
