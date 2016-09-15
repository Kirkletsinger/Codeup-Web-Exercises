<?php
require 'functions.php';
require_once '../auth.php';

function pageController() {
	
	session_start();
	$data = [];
	if(!Auth::check()) {

		header('Location: login.php');
		exit;
	}

	$data['username'] = escape($_SESSION['logged_in_user']);
	return $data;
}
extract(pageController());
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Authorized Page</title>


</head>

<body>
	<ul>
		<li>Logged in user: <?= $username; ?></li>
	</ul>




    <main class="container">

        <h1>AUTHORIZED</h1> 


        <a href="logout.php">LOGOUT</a>

    </main>
    
    


</body>

</html>