<?php
$errors = array();
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$preferredlang =filter_input(INPUT_POST, 'preferredlang', FILTER_SANITIZE_STRING);
$notes =filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_STRING);

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
	
	
}