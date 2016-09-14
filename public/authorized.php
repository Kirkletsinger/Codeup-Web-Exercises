<?php
session_start();
function pageController(){
if (!isset($_SESSION['username'])) {
    header("Location: /login.php");
    die();
 }
 $data = [];
 $data = ['username' => $_SESSION['username']];

 return $data;
}
exract(pageController());

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <title>Authorized Page</title>


</head>

<body>

    <main class="container">

        <h1>AUTHORIZED</h1> 
        <a href="logout.php">LOGOUT</a>

    </main>
    
    


</body>

</html>