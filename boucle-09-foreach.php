<?php

include('tableau-06-imbriqués.php');

foreach ($rows as $row) {
    echo $row['id'] . "<br />\n";
    echo $row['nom'] . "<br />\n";

    if ($row['actif']) {
        echo "actif<br />\n";
    } else {
        echo "not actif<br />\n";
    }
}
