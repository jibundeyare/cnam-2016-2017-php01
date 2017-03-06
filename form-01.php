<?php

var_dump($_POST);

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>titre</title>
  </head>
  <body>

    <form action="<?php echo basename(__FILE__); ?>" method="post" enctype="multipart/form-data">
      <div>
        <input type="text" id="article" name="article" value="" placeholder="article" />
      </div>
      <div>
        <input type="text" id="prix" name="prix" value="" placeholder="prix" />
      </div>
      <div>
        <textarea id="description" name="description" placeholder="description"></textarea>
      </div>
      <div>
        <input type="submit" value="valider" />
      </div>
    </form>

  </body>
</html>
