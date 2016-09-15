
<?php 
require_once '../auth.php';


session_start();
// clear session data in memory & on disk and send user a new session cookie
function pageController() {
	Auth::logout();
	header('Location: login.php');
	exit;
}
pageController();
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
    
    

</body>

</html>