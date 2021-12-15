<!DOCTYPE html>
<html>
<head>
	<title>Other</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="other.css" >
</head>
<body>
	<?php
	require 'db.php';
	?>
	<style type="text/css">
		.good{
			margin-left: 6%;
			margin-top: 5%;
			width: 100%;
			height: 350px;
			display:contents;
		}
		.img-other-static{
			width: 100%;
		    height: 335px;
		    box-shadow: none;
		}
		.other-content{
			margin-left: 6%;
			margin-top:6%;
		}
	</style>
	<?php
	require 'menu.php';
	?>
	<br>
	<div class="other-content">
	<?php
	$comm = $pdo->query("SELECT * FROM `static` ORDER BY `id` DESC LIMIT 30");
	while ($row = $comm ->fetch(PDO::FETCH_OBJ)){
	?>
	<a href="/static.php?id=<?php echo $row->id?>">
	<div class="good">
		<div class="other">
			<div class="static">
				<div style="background-image: url(img/<?php echo $row->image?>); background-size: 100% 100%;" class="img-other-static"
				id="img-static"></div>
			</div>
			<div class="artic-other">
				<p class="txt" id="txt"><?php echo substr($row->title, 0, 135); ?></p>
			</div>
		</div>
	</div>
	</a>
	<?php
		}
	?>
	</div>
<script src="other.js"></script>
</body>
</html>