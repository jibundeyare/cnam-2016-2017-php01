<?php

session_start();

$_SESSION['user_id'] = 123;
$_SESSION['user_is_logged'] = true;
$_SESSION['user_role'] = 'admin';

echo '<pre>';
var_dump($_SESSION);
echo '</pre>';
