<?php
$errors = array();
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);
$preferredlang =filter_input(INPUT_POST, 'preferredlang', FILTER_SANITIZE_STRING);
$notes =filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);
$erika = 'Erika Balarezo';
$erikaemail = 'erikabalarezo@yahoo.com';
$confirmmessage = 'Your registration is confirmed.';
$mailsubject = 'Registration';
$formOk = false;

if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(empty($name)) {
		$errors['name'] = true;
	}
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = true;
	}
	if(empty($username)) {
		$errors['username'] = true;
	}
	if(empty($password)) {
		$errors['password'] = true;
	}
	if (!array_key_exists($preferredlang, $possible_preferredlang)) {
		$errors['preferredlang'] = true;
	}
	if(!isset($_POST['acceptterms'])) {
		$errors['acceptterms'] = true;
	}
	
	if(empty($errors)) {
		echo 'Thank you, the form was submitted!';
		$formOk= true;
		$headers = 'From: ' . $erika . ' <' . $erikaemail . '>';
		mail($email, $mailsubject, $confirmmessage, $headers); 
		
	}
	
}