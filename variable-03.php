<?php

$resultat = 123 + 3.14;

echo $resultat;
echo "<br />\n";

$resultat = (123 + 3.14) * 2;

echo $resultat;
echo "<br />\n";

$resultat = (123 - 3.14) / 2;

echo $resultat;
echo "<br />\n";

$resultat = 10 % 3;

echo $resultat;
echo "<br />\n";

// fonctionne avec php <= 5.5
$resultat = pow(2, 3);

echo $resultat;
echo "<br />\n";

// fonctionne seulement avec php >= 5.6
$resultat = 2 ** 3;

echo $resultat;
echo "<br />\n";

