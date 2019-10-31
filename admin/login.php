<?php

session_start();
require_once('../includes/connect.php');
?>
<?php
    	if(isset($_POST['login'])){
    		$admin = $_POST['admin'];
            $pass = $_POST['pass'];

            $sql = "SELECT * FROM admin WHERE (username = '$admin' OR email = '$admin') AND password = '$pass'";
            $select = mysqli_query($cnx, $sql);
            if($admin&&$pass){
            	if($s = mysqli_fetch_assoc($select)){
	                $user = $s['username'];
	                $email = $s['email'];
	                $pw = $s['password'];
	                if(($admin==$user || $admin==$email)&&$pass==$pw){
	                    $_SESSION['admin'] = $admin;
	                    setcookie('name', $user);
	                    $_SESSION['pass'] = $pass;
	                    $_SESSION['id'] = $s['id'];
	                    header('Location: index.php');
	                }
            	}
            }
    	}
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Chaustore</title>
	<link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
	<header>
		<div class="opacity"></div>
		<div id="admin_conn">
			<a href="../index.php"><img src="./img/logo.png"></a>
			<h2>Administration</h2>
			<form method="POST">
				<input type="text" name="admin">
				<input type="password" name="pass">
				<input type="submit" name="login" value="Connexion">
			</form>
		</div>
	</header>
</body>
</html>