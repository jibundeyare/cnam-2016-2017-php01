<?php

// à l'aide de la fonction strpos()
// déterminer la position du texte de la variable $recherche
// dans le texte de la variable $texte
// stocker cette valeur dans une variable

$recherche = 'baz';
$texte = 'foo bar baz';

$position = strpos($texte, $recherche);
