<?php
	if(isset($_POST['regis']))
	{
		session_start();
		header('location:login.html');

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
			echo "User Already Exists !!";

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


