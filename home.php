<?php include("model/header.php");?>
<?php

	require_once("class/session.php");

	require_once("class/class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css"  />
<title>ยินดีต้อนรับ <?php print($userRow['user_email']); ?></title>
  
  <style>
p{
	 background-color: #45a8e2;
    color: white;
    padding: 40px;
	}
h1{
   background-color: #009bdb;
   color: white;

}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 400px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>
<hr />
<div class="col-sm-2 sidenav">
<script src="time.js"></script>
<br>

  <hr />
         <div>
         <button type="button" class="btn btn-dark"><a href="mastermember.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ข้อมูลสมาชิกศิษย์เก่า&nbsp;&nbsp;&nbsp;&nbsp;</a></button>
</div>
<hr />
         <div>
         <button type="button" class="btn btn-dark"><a href="search.php">&nbsp;ค้นหาข้อมูลสมาชิกศิษย์เก่า&nbsp;</a></button>
</div>
</div>

<center><div class="col-sm-8 text-left">
<center><h1>ยินดีต้อนรับ</h1></center>
</center>
<!-- <div id="demo" class="carousel slide" data-ride="carousel">

 <ul class="carousel-indicators">
    <li data-target="img/la.jpg" data-slide-to="0" class="active"></li>
    <li data-target="img/chicago.jpg" data-slide-to="1"></li>
    <li data-target="img/ny.jpg" data-slide-to="2"></li>
  </ul>

  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/p3.jpg" alt="Los Angeles">
    </div>
    <div class="carousel-item">
      <img src="img/p3.jpg" alt="Chicago">
    </div>
    <div class="carousel-item">
      <img src="img/p4.jpg" alt="New York">
    </div>
  </div>

  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> -->

<div class="slideshow-container">
<div class="mySlides fade">
  <img src="img/ca001.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/ca002.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/ca003.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/ca004.jpg" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(10)">&#10094;</a>
<a class="next" onclick="plusSlides(-1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
</div>
<div class="w3-half">

  </div>
</center>
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

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
<br>

<footer class="container-fluid text-center">
  <p>Copyright © 2014 Nakhon Pathom Rajabhat University. All Rights Reserved. <br>
Nakhon Pathom Rajabhat University 85 Malaiman Road, Muang, Nakhon Pathom 73000 Thailand 
<br>
Tel : 0 3410 9300 Fax : 0 3426 1048 E-mail : rajabhat@npru.ac.th</p>
</footer>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>