<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>

	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Open+Sans&display=swap" rel="stylesheet">

<link rel="stylesheet" media="screen and (max-width:1320px)" href="phone.css">

	<style>
	#home{
		display: flex;
		flex-direction: column;
		padding: 3px 200px;
		justify-content: center;
		align-items: center;
		height: 670px;
	}

	#home::before{
		content: "";
		background:url('projectimg/1.jpg');
		position: absolute;
		height: 100%;
		width: 100%;
		z-index: -1;
		opacity: 0.69;
		top: 0px;
		left: 0px;
	}
	#home h1{
		color: black;
		text-align: center;
		font-family: 'Baloo 2', cursive;
	}
	#home p{
		color: black;
		text-align: center;
		font-size: 1.5rem;
		font-family: 'Balsamiq Sans', cursive;
	}
	.h-primary{
		font-size: 3.8rem;
		padding: 12px;
	}
	.h-secondary{
		font-size: 2.8rem;
		padding: 12px;
	}
	.btn{
		padding: 6px 20px;
		border: 2px solid white;
		background-color: brown;
		color: white;
		margin: 17px;
		font-size: 1.5rem;
		border-radius: 12px;
		cursor: pointer;
	}
	.services{
		margin: 34px;
		display: flex;

	}
	.box{
		border:2px solid brown;
		padding: 58px;
		margin: 7px 16px;
		border-radius: 23px;
		background-color: #decbcb;
	}
	.box img{
		height: 160px;
		margin: auto;
		display: block;
	}
	.box p{
		text-align: center;
		font-size: 1.0rem;
		font-family: 'Balsamiq Sans', cursive;
	}
	.h-primary-center{
		text-align: center;
		font-size: 2.3rem;
		font-family: 'Balsamiq Sans', cursive;
	}
	.h-secondarycenter{
		text-align: center;
		font-family: 'Balsamiq Sans', cursive;
		font-size: 1.8rem;
	}
	.client{
		height: 400px;

	}
	#clients{
		display: flex;
		justify-content: center;
		align-items: center;
	}
	.clientprimary{
		text-align: center;
		font-family: 'Balsamiq Sans', cursive;
		font-size: 2.3rem;
	}
	#clients img{
		height: 234px;
	}
	.client-item{
		padding: 50px;
	}

	.header{
		text-align: center;
		font-family: 'Balsamiq Sans', cursive;
	}
	.contact{
		position: relative;
	}
	.contact::before{
		content: "";
		position: absolute;
		width: 100%;
		height: 100%;
		z-index: -1;
		opacity: 0.7;
		background: url('https://ashokleyland.com/image/journal/article?img_id=1495139&t=1552975596804')no-repeat center center/cover;
	}
	#contact-box input,#contact-box textarea{
		width: 100%;
		padding: 0.5rem;
		border-radius: 9px;
		font-size: 1.1rem;

	}
	#contact-box{
		display: flex;
		justify-content: center;
		align-items: center;
		padding-bottom: 43px;
	}
	#contact-box form{
		width: 45%;
	}
	#contact-box label{
		font-size: 1.3rem;
	}
	
	</style>


	
	
</head>
<body>

	<?php include 'navber.html' ?>

   <section id="home">

   	<h1 class="h-primary">Welcome to FOOD MANIA</h1>
   	<P>Keep enjoying our service</P>
   	<button class="btn">order now</button>
   	

   </section>
	

<!--  <div class="text" align="center" >
		<p>Hello,Welcome to </p>
		<h1>FOOD MANIA </h1>
		<p>And Keep Enjoying Our Service</p> 
		<button class="cbtn" href='loginpage.php'>Order Now</button>
		<p align="right"><img src="projectimg/logo2.jpg" width="400" height="400"></p>
		
	</div> -->

	<section class="services-container">
		<h1 class="h-primary-center">Our Services</h1>
		<div class="services">
			<div class="box">

				<img src="projectimg/2.png" alt="">
				<h2 class="h-secondarycenter">Food ordering</h2>

				<p>Food mania is a home meal delivery service that features nutrient rich ingredients, created by top of line chefs. You can place your order and receive it within 48 hours, delivered in coolers to keep it fresh!</p>
				
			</div>
			<div class="box">

				<img src="https://cdn.dribbble.com/users/1520198/screenshots/4728543/delivery_boy_animation.gif" alt="">
				<h2 class="h-secondarycenter">Safe delivery</h2>

				<p>keep ordering.we deliver fresh food just in time.you can get best service from food mania</p>
				
			</div>
			<div class="box">

				<img src="https://blog-cdn.crowdcontent.com/crowdblog/Category-Page-eCommerce-Gif.gif" alt="">
				<h2 class="h-secondarycenter">best catering</h2>

				<p>Best category system for find any kind of food in Food mania</p>
				
			</div>
		</div>

		
	</section>


	<section class="client">
		<h1 class="clientprimary">OUR CLIENTS
		</h1>
		<div id="clients">
			<div class="client-item">
				<img src="https://cdn.dribbble.com/users/1161517/screenshots/7896076/media/24ae74ddb6c9eb7789ae3a189a6b30ae.gif">
			</div>
			<div class="client-item">
				<img src="https://static.wixstatic.com/media/605d4e_3366d3c5ea03423da4578e5084d59135~mv2.gif">
			</div>
			<div class="client-item">
				<img src="https://i.pinimg.com/originals/b7/41/21/b741215d216b11b8ff17f27f4bff2a9d.gif">
			</div>
		</div>

		
	</section>


	<section class="contact">
		<h1 class="header">Contact us </h1>
		<div id="contact-box">
			<form action="">
				<div class="form-group">
					<label for="name">Name:</label>
					<input type="text" name="name" id="name" placeholder="enter your name">
					
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" placeholder="enter your email">
					
				</div>
				<div class="form-group">
					<label for="phone">Phone:</label>
					<input type="text" name="phone" id="phone" placeholder="enter your phone">
					
				</div>
				<div class="form-group">
					<label for="name">Message:</label>
					<textarea name="message"id="message"cols="30"rows="10">   </textarea>
					
				</div>
				
			</form>
			
		</div>
		
	</section>

	<?php include 'footerpro.php' ?>

	

	



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
<!-- <?php include 'footerpro.php' ?> -->