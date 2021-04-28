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
	<title></title>
	<link rel="stylesheet" type="text/css" href="pro.css">
</head>
	<?php include 'header.php' ?>
	<?php include'insert.php'?>
  <?php
include'sidebar.html';
?>
<body style="background-color: #ece4e4;">

	

	<?php


    $sql="select * from users where username='$_SESSION[username]'";
    $result = mysqli_query($con,$sql);

	?>

	<h1 align="center" style="font-size: 2.0em">Basic information</h1>

	<?php

	$row=mysqli_fetch_assoc($result);

	

	?>
	
<!--     <div align="center">
	<h2 align="center" style="font-size: 2.0em">
		<?php
        
       // echo  $_SESSION['username'];


		?>
	</h2>
</div> -->
<div align="center" style="font-size: 1.0em;">
<?php
 echo "<table align:'center'>";
  echo"<tr>";
   echo "<td>";
    echo "<b> NAME : </b>";
   echo "</td>";
    
   echo "<td>";
     echo $row['name'];
   echo "</td>";
  echo"</tr>";

   echo "<br>";
   echo "<br>";

   echo"<tr>";
   echo "<td>";
   echo "<b> EMAIL : </b>";
   echo "</td>";

   echo "<td>";
    echo $row['email'];
   echo "</td>";
  echo"</tr>";

  echo "<br>";

   echo"<tr>";
   echo "<td>";
    echo "<b> USERNAME : </b>";
   echo "</td>";

   echo "<td>";
    echo $row['username'];
   echo "</td>";
  echo"</tr>";

   echo"<tr>";
   echo "<td>";
    echo "<b> DATE OF BIRTH : </b>";
   echo "</td>";

   echo "<td>";
     echo $row['dateofbirth'];
   echo "</td>";
  echo"</tr>";

   echo"<tr>";
   echo "<td>";
    echo "<b> GENDER : </b>";
   echo "</td>";

   echo "<td>";
    echo $row['gender'];
   echo "</td>";
  echo"</tr>";

 echo "</table>";

?>
</div>

<div class="container">
		<form action="" method="POST">
			<!-- <button class="btn btn-default" style="float: right-bottom; width: 100px; color: red"name="submit">Edit</button> -->
			
		</form>
	</div>
  <br>
  <br>
  <br>
   <br>
  <br>
  <br> 
  <br>
  <br>
  <br>
   <br>
  <br>
  <br>
   <br>
  <br>
  <br>
   <br>
  <br>
  <br>
   <br>
  <br>
  <br>
  <?php include 'footerpro.php' ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
     load_number();
        
function load_number(){
        $.ajax({
          url:'action.php',
          method:'get',
          data:{cartItem:"cart_item"},
          success:function(response){
              $("#cart-item").html(response);
          }
        });




          
       }

  });


        </script>
</body>
</html>