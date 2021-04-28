
<style >
	.alert{
		/*padding: 5px 368px;*/

         /*width: 300px;*/
         /*text-align: center;*/
         float: center;

	}
</style>




<?php
session_start();
require 'insert.php';

if(isset($_POST['pid'])){
	$pid= $_POST['pid'];
	$pname= $_POST['pname'];
	$pprice= $_POST['pprice'];
	$pimage= $_POST['pimage'];
	$pqty= 1;

	$stmt = $con->prepare('SELECT `name` FROM `cart` WHERE name = ? ');
	$stmt->bind_param("s",$pname);
	$stmt->execute();
	$res=$stmt->get_result();
	$r=$res->fetch_assoc();
	$name=$r['name'];

	if(!$name){
		$query=$con->prepare('INSERT INTO cart (name,price,image,qty,total)VALUES(?,?,?,?,?)');
		$query->bind_param("sssss",$pname,$pprice,$pimage,$pqty,$pprice);
		$query->execute(); 

		echo '<div class="alert alert-success alert-dismissible mt-4 justify-content-center">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong> You have added your product.
</div>';

	}
	else
	{
      	echo '<div class="alert alert-danger alert-dismissible mt-4 right">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Sorry!</strong> you already added this product in your cart.
</div>';
	}
}
 
 if(isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item'){
	$stmt = $con->prepare("SELECT * FROM cart");
	$stmt->execute();
	$stmt->store_result();
	$rows=$stmt->num_rows;

	echo $rows;
}
if(isset($_GET['remove'])){
	$id = $_GET['remove'];

	$stmt=$con->prepare("Delete From cart WHERE id=?");
	$stmt->bind_param("i",$id);
	$stmt->execute();

	$_SESSION['showAlert']='block';
	$_SESSION['message']='Item has been removed from cart!';
	header('location:cart.php');

}

if(isset($_GET['id'])){
	$view = $_GET['id'];

	$stmt=$con->prepare("SELECT * FROM `shopping cart` WHERE id=?");
	$stmt->bind_param("i",$view);
	$stmt->execute();

	// $_SESSION['showAlert']='block';
	// $_SESSION['message']='Item has been removed from cart!';
	header('location:view.php');

}

if(isset($_GET['clear'])){
	$stmt=$con->prepare("DELETE FROM cart");
	$stmt->execute();
	$_SESSION['showAlert']='block';
	$_SESSION['message']='ALL Item has been removed from cart!';
	header('location:cart.php');
}

if(isset($_POST['qty'])){
	$qty=$_POST['qty'];
	$pid=$_POST['pid'];
	$pprice=$_POST['pprice'];
	$tprice=$qty*$pprice;

	$stmt=$con->prepare("UPDATE cart SET qty=?,total=? Where id=?");
	$stmt->bind_param("isi",$qty,$tprice,$pid);
	$stmt->execute();
}




	if (isset($_POST['action']) && isset($_POST['action']) == 'order') {
	  $name = $_POST['name'];
	  $email = $_POST['email'];
	  // $phone = $_POST['phone'];
	  $products = $_POST['products'];
	  $grand_total = $_POST['grand_total'];
	  $address = $_POST['address'];
	  $pmode = $_POST['pmode'];

	  $data = '';

	  $stmt = $con->prepare('INSERT INTO orders (name,email,address,pmode,products,amount_paid)VALUES(?,?,?,?,?,?)');
	  $stmt->bind_param('ssssss',$name,$email,$address,$pmode,$products,$grand_total);
	  $stmt->execute();
	  $stmt2 = $con->prepare('DELETE FROM cart');
	  $stmt2->execute();
	  $data .= '<div class="text-center">
								<h1 class="display-4 mt-2 text-danger">Thank You!</h1>
								<h2 class="text-success">Your Order Placed Successfully!</h2>
								<h4 class="bg-danger text-light rounded p-2">Items Purchased : ' . $products . '</h4>
								<h4>Your Name : ' . $name . '</h4>
								<h4>Your E-mail : ' . $email . '</h4>
								
								<h4>Total Amount Paid : ' . number_format($grand_total,2) . '</h4>
								<h4>Payment Mode : ' . $pmode . '</h4>
						  </div>';
	  echo $data;
	}
?>

<!-- <h4>Your Phone : ' . $phone . '</h4> -->

<!-- <?php

$search_value = $_POST["search"];

$conn = mysqli_connect("localhost","root","","foodmania") or die("Connection Failed");

$sql = "SELECT * FROM `shopping cart` WHERE name LIKE '%{$search_value}%' OR price LIKE '%{$search_value}%'";
$result = mysqli_query($conn, $sql) or die("SQL Query Failed.");
$output = "";
if(mysqli_num_rows($result) > 0 ){
  $output = '<table border="1" width="100%" cellspacing="0" cellpadding="10px">
              <tr>
                <th width="60px">Id</th>
                <th>Name</th>
                <th width="90px">Edit</th>
                <th width="90px">Delete</th>
              </tr>';

              while($row = mysqli_fetch_assoc($result)){
                $output .= "<tr><td align='center'>{$row["id"]}</td><td>{$row["name"]} {$row["price"]}</td><td align='center'><button class='edit-btn' data-eid='{$row["id"]}'>Edit</button></td><td align='center'><button Class='delete-btn' data-id='{$row["id"]}'>Delete</button></td></tr>";
              }
    $output .= "</table>";

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found.</h2>";
}

?>
 -->