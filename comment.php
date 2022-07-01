<!DOCTYPE html>
<html>
<head>
	<title>Comment Database</title>
</head>
<body>

<?php
	if(isset($_POST['postmycomment']))
	{
		$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "travellers-guide";

		$conn = mysqli_connect($hostname,$username,$password,$dbname) or die(mysqli_connect_error());

		$c_comment = $_POST['comment'];
		$c_name = $_POST['name'];
		$c_email = $_POST['email'];

		if(empty($c_comment) || empty($c_name) || empty($c_email) )
		{
			echo '<script>alert("Please Enter All The Required Fields !! ")</script>';
		}else{
			$sql = "INSERT INTO `comment`(`No. Of Comments`, `Comment`, `Name`, `Email`) VALUES (NULL,'$c_comment','$c_name','$c_email')";
			if(mysqli_query($conn, $sql))
			{
				echo '<script>alert("Your Comment Received Successfully .. ")</script>';
			}else{
				echo '<script>alert("Error : ". mysqli_error($conn))</script>';
			}
		}
		mysqli_close($conn);

	}

?>



</body>
</html>
