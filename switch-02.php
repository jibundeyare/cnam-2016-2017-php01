<?php

$pommes = 242;

switch (true) {
	case $pommes == 1:
		echo "J'ai une pomme<br />\n";
		break;
	case $pommes > 100:
		echo "J'ai plus de 100 pommes<br />\n";
		break;
	case $pommes > 1:
		echo "J'ai des pommes<br />\n";
		break;
	default:
		echo "Je n'ai pas de pomme<br />\n";
}

// équivalent de
if ($pommes == 1) {
	echo "J'ai une pomme<br />\n";
} elseif ($pommes > 100) {
	echo "J'ai plus de 100 pommes<br />\n";
} elseif ($pommes > 1) {
	echo "J'ai des pommes<br />\n";
} else {
	echo "Je n'ai pas de pomme<br />\n";
}
