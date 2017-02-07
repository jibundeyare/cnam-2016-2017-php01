<?php

session_start();

echo 'session_id : ' . session_id() . "<br />\n";

session_destroy();

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
