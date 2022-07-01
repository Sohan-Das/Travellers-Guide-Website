<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<style>
		.profile{
			text-align:center;
			border:4px solid black;
			background-color:rgba(211,211,211,0.5);
			
			margin:auto;
			margin-top: 80px;
			width:50%;
			border-radius: 18px;
			font-size:1.8em;
			padding:20px;
		}
		body{
			background: linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url('bg_images/profile.jpg');
			background-position: center;
			background-repeat: no-repeat;
			background-size: 1540px 1400px;
		}

	</style>
</head>
<body>



<div class="profile">
<?php
session_start();
echo "Name :-  ".$_SESSION['name']."<br> <br>";
echo "Email :-  ".$_SESSION['email']."<br> <br>" ;
echo "Mobile No :-  ".$_SESSION['mobile'];



?>

</div>




</body>
</html>