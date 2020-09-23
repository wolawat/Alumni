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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<link rel="stylesheet" href="style.css" type="text/css"  />
<title>ศิษย์เก่า</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
p{
	 background-color: #B4D8E7;
    color: white;
    padding: 40px;
	}
h1{
   background-color: #45a8e2;
   color: white;
	border-style: solid;
    border-width: 5px;
}

</style>
<body>
<hr />
         <div class="col-sm-2 sidenav">

</div>
<hr />
<center><h1>ค้นหาศิษย์เก่าและนักศึกษาปัจจุบัน</h1>
</hr>
<div class ="container flud">
  <form action="/action_page.php">
    <label for="fname">รหัส</label>
    <input type="text" id="fname" name="firstname" placeholder="Your pass">

    <label for="lname">ชื่อนักศึกษา</label>
    <input type="text" id="lname" name="lastname" placeholder="Your name..">

    <label for="lname">ปีการศึกษา</label>
    <input type="text" id="lname" name="lastname" placeholder="255.">
    </select>
    <hr />
         <div>
         <button><p><a href="showuser.php">ค้นหา</a></p></button>
</div>
  </form>
</div></center>
</hr>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<script src="bootstrap/js/bootstrap.min.js"></script>
<footer>
  <p class="w3-medium">Copyright © 2014 Nakhon Pathom Rajabhat University. All Rights Reserved.
Nakhon Pathom Rajabhat University 85 Malaiman Road, Muang, Nakhon Pathom 73000 Thailand
Tel : 0 3410 9300 Fax : 0 3426 1048 E-mail : rajabhat@npru.ac.th</p>
</footer>
</body>
</html>