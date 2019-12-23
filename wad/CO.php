<?php
if (isset ($_POST['na']) && isset ($_POST['em']) && isset ($_POST['no']) ){
	$n=$_POST['na'];
	$e=$_POST['em'];
	$no=$_POST['no'];
	$to="lina2lyna@gmail.com";
	$from = $e;
	$subject = 'New order';
	$message = '<b>Name:</b> '.$na.' <br><b>Email:</b> '.$em.' <p>'.$no.'</p>';
	$headers = "From: $from\n";
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
	if ( mail ($to, $subject, $message, $headers)) {
		echo "success";
	}	else{
		echo "The server failed to send the message. Please try again later.";
	}
}

?>
