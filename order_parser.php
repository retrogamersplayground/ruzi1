<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['da']) && isset($_POST['m']) && isset($_POST['mc']) && isset($_POST['r']) ){
	$n = $_POST['n']; // HINT: use preg_replace() to filter the data
	$e = $_POST['e'];
	$da = $_POST['da'];
	$m = $_POST['m'];
	$mc = $_POST['mc'];
	$r = $_POST['r'];

	
	
	
	
	
	
	
	$to = "neilfloyd99@gmail.com";	
	$from = $e;
	$subject = 'Contact Form Message';
	$message = '<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.' <br><b>Delivery Address:</b> '.$da.' <br><b>Mobile Number:</b> '.$m.' <br><b>Mobile Carrier:</b> '.$mc.' <br><b>Restaurant:</b> '.$r.'  ';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>