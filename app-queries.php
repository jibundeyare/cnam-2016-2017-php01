<?php

/**
 * sélectionner tous les articles
 */
function selectArticles($link) {
	$sql = 'SELECT * FROM article';

	$result = mysqli_query($link, $sql);

	if (!$result) {
		echo mysqli_error($link) . "<br />\n";
		exit();
	}

	return $result;
}

/**
 * sélectionner un article
 */
function selectArticle($link, $id) {
	$sql = 'SELECT * FROM article WHERE id = ' . (int) $id;

	$result = mysqli_query($link, $sql);

	if (!$result) {
		echo mysqli_error($link) . "<br />\n";
		exit();
	}

	return $result;
}

/**
 * créer un nouvel article
 * la fonction renvoie l'id de l'article créé
 */
function insertArticle($link, $titre, $texte) {
	$sql = sprintf(
		"INSERT INTO article (titre, texte) VALUES ('%s', '%s')",
		mysqli_real_escape_string($link, $titre),
		mysqli_real_escape_string($link, $texte)
	);

	$result = mysqli_query($link, $sql);

	if (!$result) {
		echo mysqli_error($link) . "<br />\n";
		exit();
	}

	return mysqli_insert_id($link);
}

/**
 * mettre à jour un article
 */
function updateArticle($link, $id, $titre, $texte) {
	$sql = sprintf(
		"UPDATE article SET titre = '%s', texte = '%s' WHERE id = %d",
		mysqli_real_escape_string($link, $titre),
		mysqli_real_escape_string($link, $texte),
		(int) $id
	);

	$result = mysqli_query($link, $sql);

	if (!$result) {
		echo mysqli_error($link) . "<br />\n";
		exit();
	}

	return $result;
}

/**
 * supprimer un article
 */
function deleteArticle($link, $id) {
	$sql = 'DELETE FROM article WHERE id = ' . (int) $id;

	$result = mysqli_query($link, $sql);

	if (!$result) {
		echo mysqli_error($link) . "<br />\n";
		exit();
	}

	return $result;
}

/**
 * rechercher dans le titre ou le texte
 */
function searchArticles($link, $word) {
	$sql = sprintf(
		"SELECT * FROM article LIKE titre = '%%%s%%' OR texte = '%%%s%%'",
		mysqli_real_escape_string($link, $word),
		mysqli_real_escape_string($link, $word)
	);

	$result = mysqli_query($link, $sql);

	if (!$result) {
		echo mysqli_error($link) . "<br />\n";
		exit();
	}

	return $result;
}
