<?php
session_start(); 
require_once '../classes/__autoload.php';
 
$user = new User();
 
if(isset($_POST['login'])){

	$username = $user->escape_string($_POST['username']);
	$password = $user->escape_string($_POST['password']);
 
	$auth = $user->check_login($username, $password);
 
	if(!$auth){
		// echo 'Invalid username or password';
		$_SESSION['error'] = 'Invalid username or password';
    	header('location: ../signin.php');
	}
	else{
		$_SESSION['user'] = $auth;
		// $_SESSION['role'] = $auth;
		header('location: ../index.php');
	}
}
else{
	// echo 'You need to login first';
	$_SESSION['error'] = 'You need to login first';
	header('location: ../signin.php');
}
?>