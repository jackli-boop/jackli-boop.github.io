<?php

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];
	
	$mailTo = "jili1@s.sfusd.edu";
	$headers = "From: ".$mailFrom;
	$txt = "You have revieced an email from".$name.".\n\n".$message;
	
	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.html?mailsend");
}