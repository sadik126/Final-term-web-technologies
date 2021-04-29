<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	header("location:loginpage.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome - <?php echo $_SESSION['username']?></title>
	
</head>
<body>
	






<?php

include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="regestration.css">
</head>
<body>
	<legend align="center" style="font-size: 2.0em">welcome - <?php echo $_SESSION['username']?></legend>
	<!-- <?php print_r($_SESSION['cart'])?> -->
	<div class="container">
		<div class="row">
			<div class="col-lg-3" align="center">
				<form action="manage_cart.php" method="POST">
					
				

			
  </form>
<?php include 'footerpro.php' ?>
</body>
</html>


</body>
</html>

