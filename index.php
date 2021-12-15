<!DOCTYPE html>
<html>
<head>
	<title>Prochae</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
	<script data-ad-client="ca-pub-4891345632978585" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<style type="text/css">
.one_news h1{
  position: absolute;
  width: 100%;
  left: 0;
  bottom: 20%;
  color: #fff;
  font-family: Roboto;
  font-style: normal;
  font-weight: 400;
  font-size: 29px;
  line-height: 37px;
  z-index: 2;
}

@media screen and (max-width: 1100px){
	.one_news{
		width: 85%;
		margin-left:1%
		min-height: 700px;
		display: block;
	}
	.con{
		margin-left: 5%;
		margin-top: 10%;
	}
	.one_news h1{
		font-size: 15px;
	}
	.img{
		width:100%;
		margin-left:2px;
		height:430px;
		min-height: 420px;
		max-height: 455px;
	}
	.min{
		display: block;
		margin-top: 5%;
		width: 85%;
	}
	.min_one_news{
		width: 47%;
		height: 500px;
		font-size: 17px;
		margin-left: 2%;
	}
	.min_one_news p{
		height: 70px;
	}
	.min_one_news:hover{
		width: 47.5%;
	}
	.min_img{
		min-height: 276px;
		max-height: 400px;
}


	</style>
	<?php
	require 'db.php';
	require 'menu.php';
	?>
	<br>
	<div class="con">
		<?php
			$comm = $pdo->query("SELECT * FROM `static` ORDER BY `id` DESC LIMIT 1");
			$rwo = $comm ->fetch(PDO::FETCH_OBJ);
		?>
		<a href="/static.php?id=<?php echo $rwo->id; ?>">
			<div class="one_news">
				<div class="wra">
				<div class="img" style="background-image: url(img/<?php
					echo $rwo->image?>);"></div>
					<h1>
					<!-- <p class="artical-one-news"> -->
				<?php
					echo substr($rwo->title,0, 120);
				?></h1>
				<p class="date"><?php echo $rwo->datetime?></p>
				</div>
			</div>
		</a>
		
		
		<div class="min">
			<?php
				$comm = $pdo->query("SELECT * FROM `static` ORDER BY `id` DESC LIMIT 20");
				while ($row = $comm ->fetch(PDO::FETCH_OBJ)){
			?>
			<a href="/static.php?id=<?php echo $row->id; ?>">
				<div class="min_one_news">
					<div class="min_img" style="background-image: url(img/<?php echo $row->image;?>);"></div>
					<p class="title-min-news"><?php echo substr($row->title, 0, 95); ?></p>
				</div>
			</a>
			<?php 
				}
			?>
			</div>
		</div>
		
		</div>
	</div>
<script type="text/javascript">
	var btn = document.getElementById('ikone-menu');
	var oneBlock = document.getElementById('conteiner-menu');
	var content = document.getElementById('two-menu');
	content.style.display = "none";
	btn.onclick = function(){	
		if (content.style.display == "none") {
			content.style.display = "block";
			content.style.animation = "open 1s";
		}
		else if (content.style.display === "block") {
			content.style.animation = "close 1s";
			function close(){
				content.style.display = "none";
			}
			setTimeout(close,900);
		}
	}
</script>
</body>
</html>