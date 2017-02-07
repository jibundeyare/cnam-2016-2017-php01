<?php

// affectez l'inclusion du fichier include-03.php
// à la variable $config
// et affichez toutes les valeurs du tableau
$config = include('include-03.php');

foreach ($config as $valeur) {
	echo "$valeur<\br />\n";
}
