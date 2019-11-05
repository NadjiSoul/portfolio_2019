<?php

	if(isset($_POST['submit'])){
		$msg = '';
		if(empty($_POST['firstname'])){
			$msg .= 'Veuillez renseigner votre prénom.';
		}
		else if(strlen($_POST['firstname']) < 2){
			$msg .= 'Votre prénom doit comporter au moins 2 caractères.';
		}

		if(empty($_POST['lastname'])){
			$msg .= 'Veuillez renseigner votre nom.';
		}
		else if(strlen($_POST['lastname']) < 2){
			$msg .= 'Votre nom doit comporter au moins 2 caractères.';
		}
		if(empty($_POST['email'])){
			$msg .= 'Veuillez renseigner votre adresse mail';
		}
		else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$msg .= 'Votre email est considéré comme invalide';
		}
		if(empty($_POST['message'])){
			$msg .= 'Veuillez écrire votre message.';
		}
		else if(strlen($_POST['message']) < 20){
			$msg .= 'Votre message doit comporter au moins 20 caractères.';
		}
		if(empty($msg)){
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];

			$to_email = "dark9744@hotmail.fr";
	   		$subject = $_POST['subject'];
	   		$header = "From: $email";
			$message = $firstname." ".$lastname.": ".$_POST['message'];

			if(mail($to_email, $subject, $message, $header)){
				$msg = 'Votre message a bien été envoyer à'.$to_email;

			}
			else{
				$msg = 'Une erreur est survenue. Veuillez réessayer ultérieurement.';
			}
		}
	}

	echo $msg;
	   
	 
	   // if (mail($to_email, $subject, $body, $headers)) {
	   //    echo("Email successfully sent to $to_email...");
	   // } else {
	   //    echo("Email sending failed...");
	   // }
?>