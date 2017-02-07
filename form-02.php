<?php

// var_dump($_POST);

$erreurs = array();

// le tableau contient-il des données ?
if ($_POST) {
  // isset() vérifie si la clé existe
  // trim() supprimer les blancs à gauche et à droite d'un string
  // empty() vérifie si une variable est vide
  if (!isset($_POST['titre'])|| empty(trim($_POST['titre']))) {
    $erreurs[] = "Vous n'avez pas renseigné le titre";
  }

  if (!isset($_POST['texte']) || empty(trim($_POST['texte']))) {
    $erreurs[] = "Vous n'avez pas renseigné le texte";
  }

  // y a-t-il des erreurs ?
  if (!$erreurs) {
    // il n'y a pas d'erreurs
    // je peux traiter les données
  }
}

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>titre</title>
  </head>
  <body>

    <div>
    <?php
    foreach ($erreurs as $erreur) {
      echo $erreur . "<br />\n";
    }
    ?>
    </div>

    <form action="<?php echo basename(__FILE__); ?>" method="post" enctype="multipart/form-data">
    	<div>
    		<input type="text" id="titre" name="titre" value="" placeholder="titre" />
    	</div>
    	<div>
    		<textarea id="texte" name="texte" placeholder="texte"></textarea>
    	</div>
    	<div>
    		<input type="submit" value="valider" />
    	</div>
    </form>

  </body>
</html>