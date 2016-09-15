<?php
require_once '../auth.php';


session_start();
function pageController() 
{

    if($_POST)
    {
        Auth::attempt(Input::get('username'), Input::get('password'));
        if(Auth::check())
        {
            header('Location: authorized.php');
        }
    }
    
}
(pageController());
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <?php if (isset($message)) : ?>
        <div class="alert alert-danger" role="alert"><?= $message ?></div>
    <?php endif; ?>
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