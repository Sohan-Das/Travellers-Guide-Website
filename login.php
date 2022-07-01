<?php
	if(isset($_POST['login']))
	{
		session_start();
		

		$hostname = "localhost"; 
		$username = "root";
		$password = "";
		$dbname = "travellers-guide";

		$conn = mysqli_connect($hostname,$username,$password,$dbname)or die(mysqli_connect_error());

		
		$p_email = $_POST['email'];
		$p_password = $_POST['password'];

		$s = " select * from register where Email = '$p_email' && Password = '$p_password' ";
		$result = mysqli_query($conn, $s);
		$num = mysqli_num_rows($result);
		if($num == 1){
			$row = mysqli_fetch_array($result);
			$_SESSION['name'] = $row['Name'];
			$_SESSION['email'] = $row['Email'];
			$_SESSION['mobile'] = $row['Mobile'];
			header('location:1.php');
		}else{
			header('location:register.html');
		}
	
		mysqli_close($conn);
	}

?>



