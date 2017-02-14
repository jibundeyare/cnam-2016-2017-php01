<?php

require('app-connect.php');
require('app-library.php');
require('app-queries.php');

$link = connect();

$erreurs = array();

$titre = '';
$texte = '';

if ($_POST) {
  if (isset($_POST['titre'])) {
    $titre = $_POST['titre'];
  }

  if (isset($_POST['texte'])) {
    $texte = $_POST['texte'];
  }

  if (!isset($_POST['titre'])|| empty(trim($_POST['titre']))) {
    $erreurs[] = "Vous n'avez pas renseigné le titre";
  }

  if (!isset($_POST['texte']) || empty(trim($_POST['texte']))) {
    $erreurs[] = "Vous n'avez pas renseigné le texte";
  }

  if (!$erreurs) {
    $id = insertArticle($link, $_POST['titre'], $_POST['texte']);

    // rediriger vers l'édition de l'article créé
	// redirect('app-edit.php?id=' . $id);

	// rediriger vers la liste d'articles
	redirect('app-list.php');
  }
}

?><!DOCTYPE>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
	</head>
	<body>
		<div>
			<a href="app-list.php">afficher la liste des articles</a>
		</div>

    	<div>
	    <?php
	    foreach ($erreurs as $erreur) {
	      echo $erreur . "<br />\n";
	    }
	    ?>
	    </div>

		<form action="app-create.php" method="post" enctype="multipart/form-data">
			<input type="text" name="titre" value="<?php echo htmlentities($titre); ?>" /><br />
			<textarea name="texte"><?php echo htmlentities($texte); ?></textarea><br />
			<input type="submit" value="enregistrer" />
		</form>
	</body>
</html>