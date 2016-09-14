
<?php 
session_start();
// clear session data in memory & on disk and send user a new session cookie
function clearSession()
{
    // clear $_SESSION array
    session_unset();

    session_destroy();
    
    session_regenerate_id();

    session_start();
}
clearSession();
header("Location: /login.php");
die();
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
    
    

</body>

</html>