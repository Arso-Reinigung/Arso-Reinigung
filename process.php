<?php
    
	$name = $_POST['name'];
	$email = $_POST['email'];
	$tel = $_POST['tel'];
	$message = $_POST['message'];
	
	 $to = "info@arso-reinigung.ch";
	 $subject = "Kontaktaufnahme arso Reinigung Webseite";
	 $body = "Name: $name\n\nTel: $tel\n\nMitteilung:\n\n$message";
	 $headers = "From: $email\r\n" .
     "X-Mailer: php";
	 
	 if (mail($to, $subject, $body, $headers)) {
	   print "Ihre Nachricht wurde erfolgreich übermittelt.";
	  } else {
	   print "Ihre Nachricht konnte nicht übermittelt werden.";
	  }
?>