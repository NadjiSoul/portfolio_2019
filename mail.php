<?php

	if(isset($_POST['submit'])){
		$msg = '';
		if(empty($_POST['firstname'])){
			$msg .= '<span class="warning">Veuillez renseigner votre prénom.</span>';
		}
		else if(strlen($_POST['firstname']) < 2){
			$msg .= '<span class="warning">Votre prénom doit comporter au moins 2 caractères.</span>';
		}

		if(empty($_POST['lastname'])){
			$msg .= '<span class="warning">Veuillez renseigner votre nom.</span>';
		}
		else if(strlen($_POST['lastname']) < 2){
			$msg .= '<span class="warning">Votre nom doit comporter au moins 2 caractères.</span>';
		}
		if(empty($_POST['email'])){
			$msg .= '<span class="warning">Veuillez renseigner votre adresse mail.</span>';
		}
		else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$msg .= '<span class="warning">Votre email est considéré comme invalide</span>';
		}
		if(empty($_POST['message'])){
			$msg .= '<span class="warning">Veuillez écrire votre message.</span>';
		}
		else if(strlen($_POST['message']) < 20){
			$msg .= '<span class="warning">Votre message doit comporter au moins 20 caractères.</span>';
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
				$msg = '<span class="notice">Votre message a bien été envoyer</span>';

			}
			else{
				$msg = '<span class="error">Une erreur est survenue. Veuillez réessayer ultérieurement.</span>';
			}
		}

		echo $msg;
	}
	   
	 
	   // if (mail($to_email, $subject, $body, $headers)) {
	   //    echo("Email successfully sent to $to_email...");
	   // } else {
	   //    echo("Email sending failed...");
	   // }
?>