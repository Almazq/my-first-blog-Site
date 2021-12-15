<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php
	require 'db.php';
	$comm = $pdo->query("SELECT * FROM `static` WHERE `id` =".(int)$_GET['id']);
	$coon = $comm ->fetch(PDO::FETCH_OBJ);
	?>
	<title><?php echo $coon->title;?></title>
	<link rel="stylesheet" type="text/css" href="static.css">
</head>
<body>
<style type="text/css">
		@media screen and (max-width: 1000px){
		.title{
			display: block;
			margin-top: 5%;
			font-size: 29px;
		}
		.img-static{
			margin-top:5%;
			margin-bottom:5%;
			width: 96%;
			height: 450px;
			margin-left: 1%;

		}
		.txt-static{
			width: 92%;
			margin-left: 3.5%;
			margin-top: 2%;
			font-size: 25px;
			font-family: mr_DopestyleG;
		}
		.img{
			width: 98%;
			height: 200px;

		}
		.prev, .next{
			font-size: 20px;
			padding: 20px;
		}
		.dot{
			width: 20px;
			height: 20px;
		}

}
	.img-center{
		width:60%;
		height:auto;
		margin-left:20%;
	}
	</style>
	<?php
	require 'menu.php';
	?>
	<?php
	require 'db.php';
	$comm = $pdo->query("SELECT * FROM `static` WHERE `id` =".(int)$_GET['id']);
	$con = $comm ->fetch(PDO::FETCH_OBJ);
	?>
	<style type="text/css">
		.static-content{
			margin-top: 10%;
			display: block;

		}
	</style>
	<div class="static-content">
	<div class="title"><h2><?php echo $con->title ?></h2></div>
	<div class="img-static" 
	style="background-image: url(img/<?php echo $con->image; ?>)"></div>
	<div class="txt-static">
		<?php
		echo $con->txt;
		?>
<div class="slideshow-container">

  <?php
	// $comm = $pdo->query("SELECT * FROM `static`");
	// $imgn = $pdo->query("SELECT `image1`,`image2`,`image3` FROM `static` WHERE `id` = 8");
	// $own = $imgn->fetch(PDO::FETCH_OBJ);
	// $rwo = $comm ->fetch(PDO::FETCH_OBJ)
		?>
	  <div class="mySlides fade">
	    <div class="numbertext">1 / 3</div>
	    <div style="background-image: url(img/<?php echo $con->image1;?>); background-size: 100% 100%; height: 100%;  width: 100%;min-height: 570px;max-height: 700px;" class="img"></div>
	  </div>
	  <div class="mySlides fade">
	    <div class="numbertext">2 / 3</div>
	    <div style="background-image: url(img/<?php echo $con->image2;?>); background-size: 100% 100%; height: 100%;  width: 100%;min-height: 570px;max-height: 700px;" class="img"></div>
	  </div>
	  <div class="mySlides fade">
	    <div class="numbertext">3 / 3</div>
	    <div style="background-image: url(img/<?php echo $con->image3;?>); background-size: 100% 100%; height: 100%;  width: 100%;min-height: 570px;max-height: 700px;" class="img"></div>
	  </div>
  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
<br>
</div>
</div>
<!-- Slideshow container -->

<script type="text/javascript">
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	// Thumbnail image controls
	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";
	  dots[slideIndex-1].className += " active";
	}
</script>
</body>
</html>