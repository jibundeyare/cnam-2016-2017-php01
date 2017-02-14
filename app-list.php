<?php

require('app-connect.php');
require('app-library.php');
require('app-queries.php');

$link = connect();
$result = selectArticles($link);

?><!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8" />
	</head>
	<body>
		<div>
			<a href="app-create.php">créer un nouvel article</a>
		</div>

		<div>
			nombre d'articles : <?php echo $result->num_rows; ?>
		</div>
		<table>
			<tr>
				<th>titre</th>
				<th>actions</th>
			</tr>
			<?php
			while ($row = mysqli_fetch_assoc($result)) {
			?>
			<tr>
				<td>
					<a href="app-edit.php?id=<?php echo $row['id']; ?>"><?php echo $row['titre']; ?></a>
				</td>
				<td>
					<a href="app-delete.php?id=<?php echo $row['id']; ?>">supprimer</a>
				</td>
			</tr>
			<?php
			}
			?>
		</table>
	</body>
</html>