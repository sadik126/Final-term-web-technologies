


<?php
include'db_connection.php';
error_reporting(0);
  $id=$_GET['username'];
  $name=$_GET['email'];
  $buy=$_GET['name'];
 $sell=$_GET['gender'];
?>



<form method="post" action="">
		<fieldset>
			<legend><b>Edit User</b></legend>
			<table> 
                   
              <tr>
                    <td>User ID</td>
                    <td> <input type="text" name="username" value="<?php echo "$username"?>"></td>
                </tr>


                <tr>
                    <td>Name</td>
                    <td> <input type="text" name="email" value="<?php echo "$email"?>"></td>
                </tr>
			<tr>
                    <td>Email</td>
    		
                     <td> <input type="text" name="name" value="<?php echo "$name"?>"></td>
                </tr>
    		
    		
           <tr>
                    <td>Gender</td>
                   <td><input type="text" name="gender" value="<?php echo "$gender"?>"></td>
                </tr>
            
         <tr>
             
             
             <td><input type="checkbox" name="display" value=""></td>
             <td>Display</td>
         </tr>

    	</table>
        <input type="submit" name="submit" value="Save">
		</fieldset>
	</form>

    <?php

if($_GET[submit])
{
$id=$_GET['username'];
  $username=$_GET['username'];
  $email=$_GET['email'];
 $gender=$_GET['gender'];
$query="UPDATE users SET username ='$username',email='$email',name='$name',gender='$gender'WHERE username='$username'";

$data=mysqli_query($conn,$query);
if($data){

    echo "Record Updated";
}
else
{
    echo "Failed to update record";
}
}




    ?>