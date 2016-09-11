<?php
$favorites = ['Family', 'Rainy days', 'Quite', 'Sleep', 'Close friends', 'F00d', 'Sleep Again'];
function(pageCOntroller())
?>


<!DOCTYPE html>
<html>
<head>
	<title>Favorites</title>
	<style type="text/css">
		body {
			background-color: green;
		}
		h1{
			
			color: yellow;
		}
		.list-group {
			text-align;
		}
		.list-group :nth-child(odd){
			background-color: lightgray;
		}
	</style>
</head>
<body>
	<div class='container'>
		
	<h1>Favorites</h1>
	<ul class="list-group">
		<?php foreach($favorites as $key => $favorite): ?>
			<li class="list-group-item"><?= $favorite; ?></li>
		<?php endforeach; ?>
	</ul>
	<p>
		 
		<br>
		
	</p>

	</div>
	
</body>
</html>
