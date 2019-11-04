<?php

session_start();
require_once('../includes/connect.php');

?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Portfiolio :: Admin</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>
<body>
<?php require_once('./header.php');?>
	<main>
		<button onclick="bloc();">Ajouter</button>
		<div class="bloc">
			<div id="form" style="display: none;">
				<form method="POST" action="update.php?id=0" >
					<input type="text" name="name">
					<textarea name="description"></textarea>
					<input type="text" name="url">
					<input type="text" name="ddl">
					<input type="text" name="git">
					<input type="submit" name="add" value="Créer">
				</form>
					
			</div>
	<?php
		if(isset($_SESSION['admin'])){

			$sql = "SELECT * FROM project ORDER BY id DESC";
			$select = mysqli_query($cnx, $sql);

			while($s = mysqli_fetch_assoc($select)){
	?>
			<div>	
				<form method="POST" action="update.php?id=<?php echo $s['id']; ?>">
					<input type="text" name="name" value="<?php echo $s['name']; ?>">
					<textarea name="description" rows="15" cols="21"><?php echo $s['description']; ?></textarea>
					<input type="file" name="url">
					<input type="text" name="ddl" value="<?php echo $s['ddl']; ?>">
					<input type="text" name="git" value="<?php echo $s['git']; ?>">
					<input type="submit" name="update" value="Modifier">
					<input type="submit" name="delete" value="Supprimer">
				</form>
				<img height="70%" src="../img/project/<?php echo $s['url']; ?>">
			</div>

	<?php
			}
	?>
		</div>
	<?php
		}
		else{
			header('Location: login.php');
		}
	?>
	</main>
	<script type="text/javascript" src="./js/script.js"></script>
</body>
</html>