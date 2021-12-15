<!DOCTYPE html>
<html>
<head>
	<title>Forum</title>
	<link rel="stylesheet" type="text/css" href="forum.css">
	<meta charset="utf-8">
</head>
<body>
	<a href="froum/write.html" class="giper-add">
		<div class="add-btn">
			<p class="plus">+</p>
		</div>
	</a>
	<?php
	require 'menu-two.html';
	?>
	<br>
	<div class="on">
		<div class="search">
			<form method="POST">
				<select class="select-search">
						<option class="options" value="1">Все</option>
						<option class="options" value="2">Аниме</option>
						<option class="options" value="3">Дорама</option>
						<option class="options" value="4">Манга</option>
						<option class="options" value="5">K-Pop</option>
						<option class="options" value="6">Япония</option>
						<option class="options" value="7">Корея</option>
						<option class="options" value="8">Еда!!</option>
				</select>
				<select class="sort">
					<option value="New">New</option>
					<option value="Old">Old</option>
					<option value="Pupal">Pupal</option>
				</select>
				<input type="submit" name="btn-search" class="btn-search" value="OK">
				<span><img src="./img/editor.png"  class="img"
					id="img-search"></span>
			</div>
			<div class="input-search" id="inp">
				<input type="text" name="search-input" class="inp-search">
				<span><img src="./img/loupe.png" class="img-input-search"></span>
			</form>
		</div>
	</div>
	<div class="osnova">
		<div class="forum">
			<div class="question">
				<div class="ganre">
					<i class="teg">Anime</i>
				</div>
				<div class="content">
					<p class="heading">Какой аниме посматреть?</p>
					<p class="txt">Какой анdsadfsdufmclksadfrdsadsakjlsdlk
					sdajklasjdfkls'uaseorfd';sofad]sa
					dksapidpasdjnkla</p>
					<p class="info">вчера</p>
				</div>
			</div>
		</div>
		<div class="forum">
			<div class="question">
				<div class="ganre">
					<i class="teg">Anime</i>
				</div>
				<div class="content">
					<p class="heading">Какой аниме посматреть?</p>
					<p class="txt">Какой анdsadfsdufmclksadfrdsadsakjlsdlk
					sdajklasjdfkls'uaseorfd';sofad]sa
					dksapidpasdjnkla</p>
					<p class="info">вчера</p>
				</div>
			</div>
		</div>	
		<div class="forum">
			<div class="question">
				<div class="ganre">
					<i class="teg">Anime</i>
				</div>
				<div class="content">
					<p class="heading">Какой аниме посматреть?</p>
					<p class="txt">Какой анdsadfsdufmclksadfrdsadsakjlsdlk
					sdajklasjdfkls'uaseorfd';sofad]sa
					dksapidpasdjnkla</p>
					<p class="info">вчера</p>
				</div>
			</div>
		</div>	
	</div>
	<div>
		<a href= "prototype.html"><h2>Prototype</h2></a>
	</div>
<script src="forum.js"></script>
</body>
</html>