<?php

require('app-connect.php');
require('app-library.php');
require('app-queries.php');

$link = connect();

if (!isset($_GET['id']) || empty($_GET['id'])) {
	echo "erreur : id non spécifié";
	exit();
}

$erreurs = array();

if ($_POST) {
  if (!isset($_POST['titre'])|| empty(trim($_POST['titre']))) {
    $erreurs[] = "Vous n'avez pas renseigné le titre";
  }

  if (!isset($_POST['texte']) || empty(trim($_POST['texte']))) {
    $erreurs[] = "Vous n'avez pas renseigné le texte";
  }

  if (!$erreurs) {
    updateArticle($link, $_GET['id'], $_POST['titre'], $_POST['texte']);
  }
}

$result = selectArticle($link, $_GET['id']);

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

		<?php
		while ($row = mysqli_fetch_assoc($result)) {
		?>
		<form action="app-edit.php?id=<?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
			<input type="text" name="titre" value="<?php echo htmlentities($row['titre']); ?>" /><br />
			<textarea name="texte"><?php echo htmlentities($row['texte']); ?></textarea><br />
			<input type="submit" value="enregistrer" />
		</form>
		<?php
		}
		?>
	</body>
</html>