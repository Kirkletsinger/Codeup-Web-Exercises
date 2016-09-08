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
	<title>Counter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<h1>Counter</h1>
	<h2><?= $count; ?></h2>
	<div>
		<a href="?count=<?=$count+1 ?>">up</a>
	</div>
	<div>
		<a href="?count=<?=$count-1 ?>">down</a>
	</div>
	<p>
		<?php var_dump($count);?>
	</p>

</body>
</html>
