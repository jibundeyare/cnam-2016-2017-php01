<?php

$pommes = 42;

switch ($pommes) {
	case 0:
		echo "Je n'ai pas de pomme<br />\n";
		break;
	case 1:
		echo "J'ai une pomme<br />\n";
		break;
	default:
		echo "J'ai des pommes<br />\n";
}

// équivalent de
if ($pommes == 0) {
	echo "Je n'ai pas de pomme<br />\n";
} elseif ($pommes == 1) {
	echo "J'ai une pomme<br />\n";
} else {
	echo "J'ai des pommes<br />\n";
}
