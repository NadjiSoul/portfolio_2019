<?php

session_start();
require_once('../includes/connect.php');

$id = $_GET['id'];



if(isset($id)){
	$name = $_POST['name'];
	$description = $_POST['description'];
	$url = $_POST['url'];
	$ddl = $_POST['ddl'];
	$git = $_POST['git'];
	if($id == 0){
		$sql = "INSERT INTO project SET name = '$name', description = '$description', url = '$url', ddl = '$ddl', git = '$git'";
		$select = mysqli_query($cnx, $sql);

		header('Location: index.php');

	}
	else if(isset($_POST['update']) && $id > 0){

		$sql = "SELECT * FROM project WHERE id = $id";
		$select = mysqli_query($cnx, $sql);
		$s = mysqli_fetch_assoc($select);

		if(empty($url)){
			$url = $s['url'];
		}

		$sql = "UPDATE project SET name = '$name', description = '$description', url = '$url', ddl = '$ddl', git = '$git' WHERE id = $id";
		$select = mysqli_query($cnx, $sql);

		header('Location: index.php');
	}
	else if(isset($_POST['delete']) && $id > 0){

		$sql = "DELETE FROM project WHERE id = $id";
		$select = mysqli_query($cnx, $sql);

		header('Location: index.php');
	}	
}
else{
	header('Location: index.php');
}