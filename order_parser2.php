<?php
if( isset($_POST['n']) && isset($_POST['e']) && isset($_POST['sa']) && isset($_POST['m']) && isset($_POST['mc']) && isset($_POST['r']) ){
	$n = htmlentities($_POST['n']); // HINT: use preg_replace() to filter the data
	$e = htmlentities($_POST['e']);
	
	$sa = htmlentities($_POST['sa']);
	
	$m = htmlentities($_POST['m']);
	$mc = htmlentities($_POST['mc']);
	$r = htmlentities($_POST['r']);
	
	
	$to = "ruzidelivery@gmail.com";	
	$from = $e;
	$subject = 'Contact Form Message';
	$message = htmlentities('<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.' <br><b>Address:</b> '.$sa.' <br><b>Mobile Number:</b> '.$m.' <br><b>Mobile Carrier:</b> '.$mc.' <br><b>Restaurant:</b> '.$r.'');
	$headers = htmlentities("From: $from\n");
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if( mail($to, $subject, $message, $headers) ){
		echo "success";
	} else {
		echo "The server failed to send the message. Please try again later.";
	}
}
?>