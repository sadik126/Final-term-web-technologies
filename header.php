

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="pro.css">
</head>
<body>
	<header>
	<nav>
		<div class="logo" ><img src="Image/logo.png" width="55" height="50" align="left"><h1>Food <span>Mania</span></h1></div>

		<?php
			$count=0;
			if(isset($_SESSION['cart']))
			{
				$count=count($_SESSION['cart']);
			}

			 ?>

		<div class="menu" align="right" >
			
			<a href="welcome.php">HOME |</a>
			

		</div>
	</nav>
</header>



   <div class="menu1" align="left" >
			<a href="profile.php">PROFILE</a><br>
			<a href="editprofile.php">EDIT</a><br>
			<a href="addemployee.php">ADD EMPLOYEE</a><br>
			<a href="employeedetails.php">EMPLOYEE DETAILS</a><br>
			<a href="index.php">LIVE SEARCH</a><br>
			<a href="logout.php">LOG OUT </a>


			
		</div>


&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;&#8212;
</body>
</html>