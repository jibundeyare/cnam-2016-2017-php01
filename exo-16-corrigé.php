<?php

$mails = rand(0, 50);

// avec un bloc switch affichez le nombre de mails
// sous la forme :
//   il n'y a pas de nouveau mail
//   il y a un nouveau mail
//   il y a N nouveaux mails

switch ($mails) {
	case 0:
		echo "il n'y a pas de nouveau mail<br />\n";
		break;
	case 1:
		echo "il y a un nouveau mail<br />\n";
		break;
	default:
		echo "il y a $mails nouveaux mails<br />\n";
}
