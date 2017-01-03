<?php

$tableau = array(1, 42, 123);

for ($i = 0; $i < count($tableau); $i++) {
    echo $$tableau[$i] . "<br />\n";
}

