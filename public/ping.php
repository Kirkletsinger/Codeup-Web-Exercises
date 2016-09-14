<?php
require_once "../input.php";

function pageController()
{
   $data = [];
   if (input::Has('value')) {
       $data['value'] = input::Get('value');
   } else {
       $data['value'] = 0;
   }
   return $data;
}
extract(pageController());

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ping</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
        <h2>Ping</h1>
        <h2>Volley<?= ($value) ?></h1>
        <h2 class="col-md-6"><a href="pong.php?value=<?= ($value + 1) ?>">hit</a></h2>
        <h2 class="col-md-6"><a href="pong.php?value=0">miss</a></h2>
    </div>
</body>
</html>