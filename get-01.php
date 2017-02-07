<?php

$id = 123;
$product_id = 42;

?><!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title></title>
  </head>
  <body>

    <div>
    <?php
    echo '<pre>';
    var_dump($_GET);
    echo '</pre>';
    ?>
    </div>

    <a href="<?php echo basename(__FILE__); ?>">lien 1</a><br />
    <a href="<?php echo basename(__FILE__); ?>?cle=valeur">lien 2</a><br />
    <a href="<?php echo basename(__FILE__); ?>?id=<?php echo $id; ?>">lien 3</a><br />
    <a href="<?php echo basename(__FILE__); ?>?foo=bar&amp;lorem=ipsum">lien 4</a><br />
    <a href="<?php echo basename(__FILE__); ?>?id=<?php echo $id; ?>&amp;product_id=<?php echo $product_id; ?>">lien 5</a><br />

  </body>
</html>
