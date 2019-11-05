<?php

	if(isset($_POST['submit'])){
		$msg = '';
		if(empty($_POST['firstname'])){
			$msg .= '<span class="warning">Veuillez renseigner votre prénom.</span><br/>';
		}
		else if(strlen($_POST['firstname']) < 2){
			$msg .= '<span class="warning">Votre prénom doit comporter au moins 2 caractères.</span><br/>';
		}

		if(empty($_POST['lastname'])){
			$msg .= '<span class="warning">Veuillez renseigner votre nom.</span><br/>';
		}
		else if(strlen($_POST['lastname']) < 2){
			$msg .= '<span class="warning">Votre nom doit comporter au moins 2 caractères.</span><br/>';
		}
		if(empty($_POST['email'])){
			$msg .= '<span class="warning">Veuillez renseigner votre adresse mail.</span><br/>';
		}
		if(empty($_POST['tel'])){
			$tel = 'Phone non renseigné';
		}
		else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$msg .= '<span class="warning">Votre email est considéré comme invalide</span><br/>';
		}
		if(empty($_POST['subject'])){
			$msg .= '<span class="warning">Veuillez renseigner un objet.</span><br/>';
		}
		if(empty($_POST['message'])){
			$msg .= '<span class="warning">Veuillez écrire votre message.</span><br/>';
		}
		else if(strlen($_POST['message']) < 20){
			$msg .= '<span class="warning">Votre message doit comporter au moins 20 caractères.</span><br/>';
		}
		if(empty($msg)){
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];

			$to_email = "dark9744@hotmail.fr";
	   		$subject = $_POST['subject'];
	   		$header = "From: $email";
			$message = $firstname." ".$lastname.": ".$_POST['message']." Telephone: ".$tel;

			if(mail($to_email, $subject, $message, $header)){
				$msg = '<span class="notice">Votre message a bien été envoyé</span>';

			}
			else{
				$msg = '<span class="error">Une erreur est survenue. Veuillez réessayer ultérieurement.</span>';
			}
		}

		
	}
	 
	   // if (mail($to_email, $subject, $body, $headers)) {
	   //    echo("Email successfully sent to $to_email...");
	   // } else {
	   //    echo("Email sending failed...");
	   // }
?>