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

<?php
include'sidebar.html';
?>

<!DOCTYPE html>
<html>
<head>
	<title>welcome  - <?php echo $_SESSION['username']?></title>
</head>
<body>
	<legend align="center" style="font-size: 2.0em; padding: 50px 5px;" >Hello - <?php echo $_SESSION['username']?></legend>
   <legend align="center" style="font-size: 4.0em; padding: 50px 5px;" >welcome to food mania</legend>

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
   <?php 
include 'footerpro.php'; 
?>
</body>
</html>

