
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
	header("location:loginpage.php");
	exit();
}
?>





<?php

include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="pro.css">
</head>
<body>
	<!-- <?php print_r($_SESSION['cart'])?> -->
	<div class="container">
		<div class="row">
			<div class="col-lg-3" align="center">
				<form action="manage_cart.php" method="POST">
					
				

				<div class="card" style="width: 18rem;" align="center">
  <img src="projectimg/1.jpg" height="200" width="300" >
  <div class="card-body">
    <h3 class="card-title">PIZZA</h3>
    <p class="card-text">The restuarant is clearly popular as we did have to wait a little - it would appear you have more chance if you are happy to go inside which we did. Good range of pizzas that are freshly cooked and not too filling as some can be. The rest of the menu was also good and all of this, along with the wine/beer was good value.
</p>
  
  <p><b>price:900 BDT</b></p>
    <button type = "submit" name="addcart" class="btn btn-primary" style="background: red;font-size: 20px;" >Order this</button>
    <input type="hidden" name="item_name" value="pizza">
    <input type="hidden" name="price" value="900">

  </div ><br>
  </form>

  <div class="container">
		<div class="row">
			<div class="col-lg-3" align="right">
				<form action="manage_cart.php" method="POST">
					
				

				<div class="card" style="width: 18rem;" align="center">
  <img src="projectimg/2.png" height="200" width="300" >
  <div class="card-body">
    <h3 class="card-title">BIRIYANI</h3>
    <p class="card-text">The restuarant is clearly popular as we did have to wait a little - it would appear you have more chance if you are happy to go inside which we did. Good range of biriyanis that are freshly cooked and not too filling as some can be. The rest of the menu was also good and all of this, along with the wine/beer was good value.
</p>
  
  <p><b>price:500 BDT</b></p>
    <button type = "submit" name="addcart" class="btn btn-primary" style="background: red;font-size: 20px;"> Order this </button> 
    <input type="hidden" name="item_name" value="biriyani">
    <input type="hidden" name="price" value="500">
    </form>

  </div><br>

</div>
				
			</div>
			
		</div>
		

	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-lg-3" align="center">
				<form action="manage_cart.php" method="POST">
					
				

				<div class="card" style="width: 18rem;" align="center">
  <img src="projectimg/3.jpg" height="200" width="300" >
  <div class="card-body">
    <h3 class="card-title">BURGER</h3>
    <p class="card-text">The restuarant is clearly popular as we did have to wait a little - it would appear you have more chance if you are happy to go inside which we did. Good range of burgers that are freshly cooked and not too filling as some can be. The rest of the menu was also good and all of this, along with the wine/beer was good value.
</p>
  
  <p><b>price:200 BDT</b></p>
    <button type = "submit" name="addcart" class="btn btn-primary" style="background: red;font-size: 20px;" >Order this</button>
    <input type="hidden" name="item_name" value="burger">
    <input type="hidden" name="price" value="200">

  </div ><br>
  </form>
  <?php include 'footerpro.php' ?>

</body>
</html>