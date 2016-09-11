<?php
function pageController() 
{
    $data = [];
    $data['message'] = '';
    if (!empty($_POST)) {
        if ($_POST['username'] == 'guest' && $_POST['password'] == 'password'){
        header("Location: /authorized.php");
        die;
    } else {
        $data['message'] = 'Invalid login'; 
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