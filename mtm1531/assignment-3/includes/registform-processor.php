<?php
$errors = array();
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$preferredlang =filter_input(INPUT_POST, 'preferredlang', FILTER_SANITIZE_STRING);
$notes =filter_input(INPUT_POST, 'notes', FILTER_SANITIZE_NUMBER_INT);
$acceptterms=filter_input(INPUT_POST, 'acceptterms', FILTER_SANITIZE_STRING);