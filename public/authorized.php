<?php
session_start();
if (!$_SESSION['logged_in_user']) {
    $message = "User is not authorized.";
    header("Location: /login.php");
} else {
    $message = $_SESSION['logged_in_user'];
}
?>



<!DOCTYPE html>
<html lang="en">

<head>

    <title>Authorized Page</title>


</head>

<body>

    <main class="container">

        <h1>AUTHORIZED</h1> 

    </main>
    
    

    <script src="===PATH HERE==="></script>

</body>

</html>