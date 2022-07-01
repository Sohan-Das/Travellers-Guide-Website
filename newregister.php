<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sign up</title>
	<style>
		body{
			background:linear-gradient(rgba(0,0,50,0.5),rgba(0,0,50,0.5)),url(bg_images/login-image.jpg);
			
			background-position: center;
			background-repeat: no-repeat;
			background-size: 1600px 880px;
			}
	#st-register{
		text-align: center;
		color: black;
		border-radius: 40px;
		background-color:rgba(211,211,211,0.5);
		font-size: 1.5em;
		margin: auto;
		margin-top: 60px;
		padding-top: 22px;
		height: 590px;
		width: 50%;
	}
	#st-register:hover{
		border: 4px solid black ;
	}
	input[type="text"]{
		padding: 8px 20px;
		width:50%;
	}
	input[type="submit"]{
		padding:10px;
		font-size: 1.1em;
	}

	</style>
</head>
<body>

	<?php
	if(isset($_POST['regis']))
	{
		session_start();
		

		$hostname = "localhost"; 
		$username = "root";
		$password = "";
		$dbname = "travellers-guide";

		$conn = mysqli_connect($hostname,$username,$password,$dbname)or die(mysqli_connect_error());

		$p_name = $_POST['name'];
		$p_email = $_POST['email'];
		$p_mobile = $_POST['mobile'];
		$p_password = $_POST['password'];


		$s = " select * from register where Email = '$p_email' && Password = '$p_password' ";
		$result = mysqli_query($conn, $s);
		$num = mysqli_num_rows($result);
		
		if($num == 1){
			echo "<script>alert('User Already Exists !! Please do login.');document.location(1.html);</script>";

		}else{

			$sql = "INSERT INTO `register`(`id`, `Name`, `Email`, `Mobile`, `Password`) VALUES (NULL, '$p_name', '$p_email', '$p_mobile', '$p_password')";
			if(mysqli_query($conn, $sql))
			{
				echo "<b>Registered Successfully</b>";
			}else{
				echo "Error : ".mysql_error($conn);
			}
		}	
		
		mysqli_close($conn);
	}

?>



	<form action="" method="post" >
	<div id="st-register">
		<h2>Sign up</h2>
		<h4>Welcome ! Please Sign up By Completing The Following Details.</h4>
		<label>Name: &nbsp;&nbsp;&nbsp;</label>
		<input type="text" id="name" name="name" required><br><br>
		<label>Email:  &nbsp;&nbsp;&nbsp;</label>
		<input type="text" id="email" name="email" required><br><br>
		<label>Mobile: &nbsp;&nbsp;</label>
		<input type="text" id="mobile" name="mobile" required><br><br>
		<label>Password:</label>
		<input type="text" id="password" name="password" required><br><br>
		<input type="submit" name="regis" value=" Sign up " ><br><br><br>
		<div>Already have an account ! <a href="login.html" style="color:white;background-color:black;border-radius: 8px;padding:12px;">Login</a> </div>

	</div>
	</form>
</body>
</html>