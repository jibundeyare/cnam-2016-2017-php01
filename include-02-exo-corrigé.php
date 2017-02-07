<?php

// faites une inclusion du fichier include-01.php
// et affichez toutes les clés et valeur du tableau
// avec une boucle foreach
include('include-01.php');

foreach ($config as $cle => $valeur) {
	echo "$cle => $valeur<br />\n";
}
