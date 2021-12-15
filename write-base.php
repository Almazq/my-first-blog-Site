<?php
	$dsn = 'mysql:host=localhost;dbname=prochea';
	$pdo = new PDO($dsn , 'root', '');
	$title = $_POST['title'];
	$txt = $_POST['txt'];
	$sel = $_POST['sel'];
	$sql = 'INSERT INTO forum(title,txt,name) VALUES (:title,:txt,:sel)';
	$query = $pdo->prepare($sql);
	$query->execute(['title'=>$title,'txt'=>$txt,'sel'=>$sel]);
// header('Location: index.php');
?>