<?php
session_start();

if ( isset( $_SESSION["userstate"] ) && $_SESSION["userstate"] == 'login done' ) { 
	// simulate login done already
	echo $_SESSION["userid"];
	return true;
}
	

if ( $_SERVER['REQUEST_METHOD'] === 'POST') {
	if ( isset( $_POST['userid'] ) && $_POST['userid'] == 'test' ) {
		$_SESSION["userstate"] = 'login done';
		$_SESSION["userid"] = 'test';
		echo "Login OK";
		return true;
	} 
}
http_response_code( 401 ); // Unauthorized
echo "Unauthorized";
?>