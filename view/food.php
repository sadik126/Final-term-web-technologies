<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location:loginpage.php");
  exit();
}
?>

<?php include 'header.php' ?>

<?php
include'sidebar.html';
?>

<!-- 	<?php
			// $query="SELECT * FROM `shopping cart`";
   //             $queryfire=mysqli_query($con,$query);
   //             $num=mysqli_num_rows($queryfire);

   //            if($num > 0){
		 // while($product = mysqli_fetch_array($queryfire)){

		 // 	  $id=$row['id'];

		 //     }

	?> -->


<!DOCTYPE html>
<html>
<head>
	<title>Food cart system</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<div class="container">
		<div id="message"></div>
		<div class="row mt-5 pb-5">
			<?php
              include'insert.php';
              $stmt = $con->prepare("SELECT * FROM `shopping cart`");
              $stmt->execute();
              $result=$stmt->get_result();
              while($row = $result->fetch_assoc()):
  //             $query="SELECT * FROM `shopping cart`";
  //             $queryfire=mysqli_query($con,$query);
  //             $num=mysqli_num_rows($queryfire);

  //             if($num > 0){
		// while($product = mysqli_fetch_array($queryfire)){
			?>


			<div class="col-lg-6" style="padding:26px 128px;">
				<div class="card-deck">
					<div class="card p-2 border-secondary mb-4" >
						<img src="<?=  $row['image']  ?>" class="card-img-top" height="250">
						<div class="card-body p-1">
							<h4 class="card-title text-center text-info">
								<?=  $row['name'] ?>
							</h4>
							<h5 class=" card-text text-center text-danger">
								<?=number_format( $row['price'],2 )?> ৳
							</h5>

						</div>
						<div class="card-footer p-1">
							<form action="" class="form-submit">
								<input type="hidden" class="pid" value="<?= $row['id']?>">
								<input type="hidden" class="pname" value="<?= $row['name']?>">
								<input type="hidden" class="pprice" value="<?= $row['price']?>">
								<input type="hidden" class="pimage" value="<?=  $row['image']?>">

                           <div>
								<button class="btn btn-info btn-block  addItemBtn"><i class="fas fa-cart-plus"></i>&nbsp;Add to cart</button><!-- <button class="btn btn-warning viewItemBtn" ><a href="view.php?id=<?=$row['id'] ?>">View products</a></button> -->

							</div>	
							</form>
							
							</a>
							
						</div>

					</div>
				</div>

			</div>
			 <?php endwhile; ?>
		</div>
	</div>


	

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$(".addItemBtn ").click(function(e){
			e.preventDefault();
			var $form = $(this).closest(".form-submit");
			var pid = $form.find(".pid").val();
			var pname = $form.find(".pname").val();
			var pprice = $form.find(".pprice").val();
			var pimage = $form.find(".pimage").val();


     


			$.ajax({
				url:'action.php',
				method:'post',
				data:{pid:pid,pname:pname,pprice:pprice,pimage:pimage},
				success:function(response){
                  $("#message").html(response);
                  window.scrollTo(0,0);
                  load_number();
				}
                
         
		   
			
			});
			


		});

		// $(".viewItemBtn").click(function(e){
		// 	e.preventDefault();
		// 	var $form = $(this).closest(".form-submit");
		// 	var pid = $form.find(".pid").val();
		// 	var pname = $form.find(".pname").val();
		// 	var pprice = $form.find(".pprice").val();
		// 	var pimage = $form.find(".pimage").val();

		// 		$.ajax({
		// 		url:'view.php',
		// 		method:'post',
		// 		data:{pid:pid,pname:pname,pprice:pprice,pimage:pimage},
		// 		success:function(response){
  //                 $("#message").html(response);
  //                 window.scrollTo(0,0);
  //                 load_number();
		// 		}
                

		// 	});
			


		// });

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
