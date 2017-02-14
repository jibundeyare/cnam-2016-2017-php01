<?php

require('app-connect.php');
require('app-library.php');
require('app-queries.php');

if (!isset($_GET['id']) || empty($_GET['id'])) {
	echo "erreur : id non spécifié";
	exit();
}

$link = connect();
deleteArticle($link, $_GET['id']);

redirect('app-list.php');
