<?php
session_start();
function pageController() 
{
    
    if (!empty($_POST)) {
        if ($_POST['username'] === 'guest' && $_POST['password'] === 'password'){
            $_SESSION['logged_in_user'] = true; 
            $_SESSION['username'] = $_POST['username'];
            }  
        } 
    if (isset($_SESSION['username'])){
        header("Location: /authorized.php");
        die();
    }
} 
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Login Form</h1>
    <form action="login.php" method="POST">
        <label>Username</label>
        <input type="text" name="name"><br>
        <label>Password</label>
        <input type="text" name="password"><br>
        <input type="submit">
    </form>
</body>
</html>