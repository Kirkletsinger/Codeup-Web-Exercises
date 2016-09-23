<?php

session_start();
function pageController() 
{
    $data = [];
    $data['alert'] = '';
    if (!empty($_POST)) {
        if (inputGet('username') == 'guest' && inputGet('password') == 'password') {
            $_SESSION['logged_in_user'] = $_POST['username'];    
            header("Location: /authorized.php"); 
            die;
        } else {
            $data['alert'] =
            '<div class="alert alert-danger" role="alert">
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                <span class="sr-only">Error:</span>
                Enter a valid username and password
            </div>'; 
        }
    }  
    return $data;
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