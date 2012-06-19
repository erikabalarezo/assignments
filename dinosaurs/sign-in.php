<?php
//need db and users
require_once 'includes/db.php';
require_once 'includes/users.php';

$errors = array();

//filter and if statements
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(empty($username)) {
		$errors['username'] = true;
	}
	if(empty($password)) {
		$errors['password'] = true;
	}
	if(empty($errors)) {
		$user_id = user_get($db, $username, $password);
		var_dump($user_id);
		if($user_id){
			user_sign_in($user_id);
			//after signed in they are redirected to the page they came from
			var_dump($_SESSION);
			header('Location: ' . $_SESSION['referrer']);
			exit;
		} else {
			$errors['no-user'] = true;
		}
		
	}
	
}

?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Sign In</title>
</head>

<body>
	<form method="post" action="sign-in.php">
    	<div>
        	<label for="username">Username</label>
            <input id="username" name="username" required>
        </div>
        <div>
        	<label for="password">Password</label>
            <input id="password" name="password" required>
        </div>
        <button type="submit">Sign In</button>
  	</form>

</body>
</html>