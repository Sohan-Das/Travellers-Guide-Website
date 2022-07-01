
<?php 
session_start();
if(!isset($_SESSION['name']))
{
	header('location:1.html');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>TRAVELLER'S GUIDE</title>
	<link rel="stylesheet" href="one.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>
		.fa{
	padding: 20px;
	font-size: 20px;
	width: 50px;
	text-align: center;
	text-decoration: none;
	margin: 5px 4px;
	border-radius:50%;
	}

	.fa:hover {
    opacity: 0.7;
	}


	.fa-facebook {
  background: #3B5998;
  color: white;
	}
	.fa-twitter {
  background: #55ACEE;
  color: white;
	}
	.fa-linkedin {
	  background: #007bb5;
	  color: white;
	}

	.fa-youtube {
	  background: #bb0000;
	  color: white;
	}

	.fa-instagram {
	  background: #125688;
	  color: white;}
	  .fa-pinterest {
  background: #cb2027;
  color: white;
}
.fa-skype {
  background: #00aff0;
  color: white;
}
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 20px;
  z-index: 99;
  font-size: 12px;
  border: none;
  outline: none;
  background-color: black;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 8px;
}

#myBtn:hover {
  background-color: #555;
  color: white;
}
p{
	font-size:1.5em;
	
}
</style>
</head>
<body>
	<div class="nav" style="border-radius: 34px;">
		<div style="font-size: 2.8em;">Traveller's Guide</div>
		
			<div class="nav-right">
				<a href="profile.php">WELCOME  , <?php echo $_SESSION['name']; $_SESSION['email'];$_SESSION['mobile']; ?></a>
				<a href="logout.php">Logout</a>

			</div>
	
		</div>
	</div>
	<div class="content">
		

	<br>
	<iframe src="carousel.html" style="width:1300px;height:600px;border:2px solid black;border-radius:28px"></iframe><br>
		<h1>WELCOME TO TRAVELLER'S GUIDE</h1>
	<p>Our Website "Traveller's Guide" is a Travel Blogging Website Which will help travellers to get to know which are the best tourists places to visit in India.Our Website helps the tourists to get the tourists places Seggregated State Wise all over India.So,You can go and get the number of tourist places by going to the state where that place is located and you will get the detailed information about that particular place and also the sub-places that you should visit during visiting that place.</p><br><br><p>The Tourists Places Seggregated State Wise:</p></div><br><br><br><br>
	<div class="con">
		<a href="andhra.html" target="_blank">Andhra Pradesh</a>
		<a href="arunachal.html" target="_blank">Arunachal Pradesh</a>
		<a href="assam.html" target="_blank">Assam</a>
		<a href="bihar.html" target="_blank">Bihar</a>
		<a href="chattisgarh.html" target="_blank">Chhattisgarh</a>
		<a href="goa.html" target="_blank">Goa</a>
		<a href="gujrat.html" target="_blank">Gujrat</a><br>
		<a href="haryana.html" target="_blank">Haryana</a>
		<a href="himachal.html" target="_blank">Himachal Pradesh</a>
		<a href="j&k.html" target="_blank">Jammu & Kashmir</a>
		<a href="jharkhand.html" target="_blank">Jharkhand</a>
		<a href="karnataka.html" target="_blank" >Karnataka</a><br>
		<a href="kerala.html" target="_blank">Kerala</a>
		<a href="madhya.html" target="_blank">Madhya Pradesh</a>
		<a href="maharashtra.html" target="_blank">Maharashtra</a>
		<a href="manipur.html" target="_blank">Manipur</a>
		<a href="meghalaya.html" target="_blank">Meghalaya</a>
		<a href="mizoram.html" target="_blank" >Mizoram</a><br>
		<a href="nagaland.html" target="_blank">Nagaland</a>
		<a href="orissa.html" target="_blank">Orissa</a>
		<a href="punjab.html" target="_blank">Punjab</a>
		<a href="rajasthan.html" target="_blank">Rajasthan</a>
		<a href="sikkim.html" target="_blank">Sikkim</a>
		<a href="tamil.html" target="_blank" >Tamil Nadu</a><br>
		<a href="telangana.html" target="_blank">Telangana</a>
		<a href="tripura.html" target="_blank">Tripura</a>
		<a href="uttar.html" target="_blank">Uttar Pradesh</a>
		<a href="uttarakhand.html" target="_blank">Uttarakhand</a>
		<a href="west.html" target="_blank">West Bengal</a>
		
	</div>

	<div class="content">
		<hr/><br>
		<div class="comment">
			<h2>* Leave a Comment :</h2>
			<form action="comment.php" method="post">
				<label><h3>Comment</h3></label>
				<textarea id="comment" name="comment" rows="8"cols="80" required></textarea>
				<label><h3>Name</h3></label>
				<input type="text" id="name" name="name" required>
				<label><h3>Email</h3></label>
				<input type="text" id="email" name="email" required><br><br>

				<input type="submit" name="postmycomment" value="Post My Comment">
			</form>

		</div>

	</div>
<br>
<div class="content"><h2>You can follow us on Social Media : </h2> 
<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-pinterest"></a>
<a href="#" class="fa fa-skype"></a>
<br><hr/>
</div>
<br><br>
<h4 style="text-align: center;">Copyright &copy; 2021 Traveller's Guide Site</h4>

<button onclick="topFunction()" id="myBtn" title="Go to top">Go To Top</button>
<script>
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

</script>
</body>
</html>









