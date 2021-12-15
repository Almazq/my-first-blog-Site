<!DOCTYPE html>
<html>
<head>
	<title>b</title>
	<link rel="stylesheet" type="text/css" href="write.css">
	<meta charset="utf-8">
</head>
<body>
	<?php
	require '../menu-two.html';
	require '../db.php';
	?>

	<div class="write">
		<form class="form" method="POST" action="write-base.php">
			<h3 class="artical-h">Вопрос</h3>
			<br>
			<input type="text" name="title" class="title" maxlength="88">
			<p class="info">Вопрос должен быть меньше 88 символов</p>
			<br>
			<h3 class="artical-h">Уточните вопрос</h3><br>
			<textarea class="question-text" type ="text" name="txt"></textarea>
			<br>
			<h3 class="artical-h" id="artic-sel">Выберите направление вопроса</h3><br>
			<select class="sel" name="sel">
				<option class="options" value="0">Аниме</option>
				<option class="options" value="1">Дорама</option>
				<option class="options" value="2">Манга</option>
				<option class="options" value="3">K-Pop</option>
				<option class="options" value="4">Япония</option>
				<option class="options" value="5">Корея</option>
				<option class="options" value="6">Еда!!</option>
			</select><br><br>
			<input type="submit" name="btn" value="Отправить" class="btn">
		</form>
	</div>
</body>
</html>