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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>ยินดีต้อนรับ <?php print($userRow['user_email']); ?></title>
  
  <style>
  p.text-body{
	 background-color: #45a8e2;
    color: white;
    padding: 40px;
	}
h1{
   background-color: #009bdb;
   color: white;
    border-width: 5px;
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
<br><br><br>
<center><h1> โปรไฟล์ส่วนตัว</h1></center><br>
<br>

<center>
    <table border="0" cellpadding="1" cellspacing="1" style="width:700px;">
      <tbody>
        <tr>
          <td style="text-align: center; width: 50%px;">
            <a href="http://pws.npru.ac.th/sutarat/" target="_blank"><img alt="" src="img/h6.jpg" style="width:40%; height: 250px;"></a>
            <p>
            <h4>นายธนายุท สามสังข์</h4>
            </p>
            <tr>
          <td style="text-align: center; width: 50%px;">
            <strong style="text-align: center;"><span style="font-size: 16px;"><a href="https://www.facebook.com/nongnooporpat" target="_blank">  Thanayut Samsang</a></span></strong>
          </td>
          <br>
          



          </tbody>
    </table>

<center>
<div class="alert alert-secondary" role="alert">
<ul class="list-unstyled">
  
  <li class="media my-4">
   
    <div class="media-body">
      <h4 class="mt-0 mb-1">ศึกษา อยู่</h4>
      <td style="text-align: center; width: 50%px;">
            <strong style="text-align: center;"><span style="font-size: 16px;"><a href="https://www.npru.ac.th/intro_slide.php" target="_blank">มหาวิทยาลัยราชภัฏนครปฐม</a></span></strong>
          </td>
      
    </div>
  </li>
  <li class="media">
    
    <div class="media-body">
      <h4 class="mt-0 mb-1">คณะ</h4>
      <td style="text-align: center; width: 50%px;">
            <strong style="text-align: center;"><span style="font-size: 16px;"><a href="http://sc.npru.ac.th/newsc/index.php" target="_blank">วิทยาศาสตร์และเทคโนโลยี</a></span></strong>
          </td>
      
  </li>
  <li class="media">
    
    <div class="media-body">
      <h4 class="mt-0 mb-1">สาขา</h4>
      <td style="text-align: center; width: 50%px;">
            <strong style="text-align: center;"><span style="font-size: 16px;"><a href="http://pgm.npru.ac.th/se/" target="_blank"> วิศวกรรมออฟร์แวต์</a></span></strong>
          </td>
    


</center>




<br><br><br>

<a href="index.php">หน้าแรก</a>

<br><br><br>
<footer class="container-fluid text-center">
  <p class="text-body">Copyright © 2014 Nakhon Pathom Rajabhat University. All Rights Reserved. <br>
Nakhon Pathom Rajabhat University 85 Malaiman Road, Muang, Nakhon Pathom 73000 Thailand 
<br>
Tel : 0 3410 9300 Fax : 0 3426 1048 E-mail : rajabhat@npru.ac.th</p>
</footer>
<script src="bootstrap/js/bootstrap.min.js"></script>


</body>
</html>