<?php
	if($_POST["submit"]){
		$recipient="milos_pruginic@yahoo.com";
		$subject=$_POST["subject"];
		$sender=$_POST["name"];
		$senderEmail=$_POST["email"];
		$message=$_POST["comments"];
		
		$mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
		
		mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");
		
		$thankYou="<p>Thank you! Your message has been sent.</p>";
	}
?>