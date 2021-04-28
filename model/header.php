

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="pro.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
		.navber{
			background-color: #397284;
			border-radius: 7px;
			/*display: flex;*/
			margin: -3px -2px;
			opacity: 0.95;
			flex-direction: column;
			padding-bottom: 20px;

			

		}
		.navber ul{
			overflow: auto;
		}
		.navber li{
			float: right;
			list-style: none;
			margin: 29px 28px;

		}
		.navber li a{
		   display: block;
	       padding: 4px 1px;
	       text-decoration: none;
	       font-size: 18px;
	       color: white;
	       font-family: 'Open Sans', sans-serif;
		}

		.navber li a:hover{
		 
	       
	       color: black;
		}
		/*.search{
			float: right;
			padding: 18px 22px;
			border-radius: 4px;

		}*/

	/*	.navber input {
			border: 4px solid;
			border-radius: 14px;
			padding: 5px 15px;
			width: 183px;
		}
*/
        .logo{
        	float: left;
        	color: white;
        	padding: 26px 46px;
        	font-size:10px;
        	
        	

        	
        }
        .logo h1{
        	font-family: Georgia, serif;
        	font-size: 25px;
        	letter-spacing: 4px;
        	font-weight: bold;
        }

        .logo span{
        	color: red;
        	font-weight: bold;
        }

        .menu1 {
        	padding: 38px 10px;
        }
       
	</style>
<body>
	<header>
	<!-- <nav> -->
		

		<?php
			$count=0;
			if(isset($_SESSION['cart']))
			{
				$count=count($_SESSION['cart']);
			}

			 ?>


			 <body>
	<header>
		<nav class="navber">

			

			<ul>
				<div class="logo" ><h1>Food <span>Mania</span></h1></div>


				
				
				 <!-- <li><a href="logout.php">LOG OUT </a></li>
				<li><a href="profile.php">PROFILE</a></li>
			    <li><a href="editprofile.php">EDIT</a></li> -->
			    

				<li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span id="cart-item" class="badge badge-danger"></span></a></li>
                 <!-- CART(<?php echo $count;?>) -->
				<!-- <li><a href="welcome.php"><i class="fa fa-home" aria-hidden="true"></i> HOME</a></li> -->

				<!-- <div class="search">
				<input type="text" name="search" placeholder="search here">
				
			    </div> -->
				 
             
			</ul>

			
		</nav>
	</header>
 
</body>

		<!-- <div class="menu" align="right" >
			<a href="welcome.php">HOME |</a>
			
			
			
			
			


			
			<a href="mycart.php" >CART(<?php echo $count;?>) |</a>

		
			


			


			
		</div> -->
	<!-- </nav> -->
</header>



  <!--  <div class="menu1" align="left" >
			

			
		</div>
 -->


</body>
</html>