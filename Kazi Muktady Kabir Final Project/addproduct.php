<?php 

include'db_connection.php';

error_reporting(0);

?>



<html>
<body>

<form method="POST" action="Inventory.php">
		<fieldset>
			<legend><b>Add Product</b></legend>
			<table> 
                   
              <tr>
                    <td>ProductId</td>
                    <td> <input type="text" name="Productid" value=""></td>
                </tr>


                <tr>
                    <td>Name</td>
                    <td> <input type="text" name="name" value=""></td>
                </tr>
			<tr>
                    <td>Buying Price</td>
    		
            
            
                  <td> <input type="text" name="buyprice" value=""></td>
                </tr>
    		
    		
           <tr>
                    <td>Selling Price</td>
                   <td><input type="text" name="sellprice" value=""></td>
                </tr>
            
         <tr>
             
             
             <td><input type="checkbox" name="display" value=""></td>
             <td>Display</td>
         </tr>

    	</table>
        <input type="submit" name="save" value="Save">
		</fieldset>
	</form>
</body>
</html>
<?php
if(isset($_POST["save"]))
{
$proid=$_POST['Productid'];
$name=$_POST['name'];
$bp=$_POST['buyprice'];
$sp=$_POST['sellprice'];
if ($proid!="" && $name!="" && $bp!="" && $sp!="") {
	


$query="INSERT INTO item VALUES('$Item','$name','$buyprice','$sellprice')";

$data=mysqli_query($conn,$query);
if($data)
{
	echo"Data inserted into database";
}
}
else{
	echo"Failed to insert";
}
}
?>
</body>