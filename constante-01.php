<?php

// définition de constantes
define('UN_NOMBRE', 123);
define('DU_TEXTE', 'foo bar baz');

// affichage / lecture d'une constante
echo UN_NOMBRE . "<br />\n";

// vérification de la définition d'une constante
if (defined('DU_TEXTE')) {
	echo "la constante DU_TEXTE est définie<br />\n";
}

// définition d'une constante
// la syntaxe const est recommandée par rapport à la syntaxe define()
const UN_FLOAT = 3.14;

// affichage / lecture d'une constante
echo UN_FLOAT . "<br />\n";

// vérification de la définition d'une constante
if (defined('UN_FLOAT')) {
	echo "la constante UN_FLOAT est définie<br />\n";
}
