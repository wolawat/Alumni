<?php

	require_once("class/session.php");

	require_once("class/class.user.php");
	$auth_user = new USER();


	$user_id = $_SESSION['user_session'];

	$stmt = $auth_user->runQuery("SELECT * FROM users WHERE user_id=:user_id");
	$stmt->execute(array(":user_id"=>$user_id));

	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<title>Software Engineering</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>

<body>
<!-- Navbar -->
<nav class="navbar navbar-light" style="background-color: #45a8e2;">


    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a class="w3-bar-item w3-button w3-padding-large"></a>
    <a href="home.php" class="w3-bar-item w3-button w3-padding-large"><img src="img/h2.jpg"width="100" height="40"></a>
    <a class="w3-bar-item w3-button w3-padding-large"></a>
    <a href="register.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ลงทะเบียนศิษย์เก่า</a>
    <a href="mastermember.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ข้อมูลสมาชิกศิษย์เก่า</a>
    <a href="master.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">บุคลากรประจำสาขา</a>
    <a href="contact.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ติดต่อ</a>
    <div class="w3-dropdown-hover w3-hide-small ">
      <button class="w3-padding-large w3-button" title="More">&nbsp;สวัสดี' <?php echo $userRow['user_email']; ?>&nbsp;<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="viewprofile.php" class="w3-bar-item w3-button">&nbsp;View Profile</a>
        <a href="class/logout.php?logout=true" class="w3-bar-item w3-button">&nbsp;ออกจากระบบ</a>
      </div>
    </div>
    <a href="search.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
</nav>

<img src="img/bg02.jpg"width="1550" height="390">
<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>