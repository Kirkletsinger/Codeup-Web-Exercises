<?php
function pageController()
{
	if(isset($_GET['count'])){
		$count = $_GET['count'];
	} else {
		$count = 0;
	}
	return ['count' => $count];
}
extract(pageController());

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pong</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<h2>Pong</h2>
	<h3><?= $count; ?></h3>
	<div>
	<a href="/ping.php?count=<?=$count+1 ?>">HIT</a>
	</div>
	<div>
	<a href="/ping.php">MISS</a>
	</div>

</body>
</html>