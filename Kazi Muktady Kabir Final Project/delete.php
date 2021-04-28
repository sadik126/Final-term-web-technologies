

<?php 

require_once 'db_connection.php';

error_reporting(0);
$username=$_GET['username'];
$query="DELETE FROM users WHERE username='$username'";
$data=mysqli_query($conn,$query);
//$result=mysqli_fetch_delete_assoc($data);
if($data)
{
   

    echo"<font color='green'>Record deleted from database";

}

else{

echo"<font color='red'>Failed to delete from database";

}

 ?>





<form method="post" action="delete.php">
        <fieldset>
            <legend><b>Delete Product</b></legend>
            <table> 

                <tr>
                    <td>User ID</td>
                    <td> <input type="text" name="username" value=""></td>
                </tr>
            <tr>
                    <td>Email</td>
            
                    
            
                  <td> <input type="text" name="email" value=""></td>
                </tr>

                
        </fieldset>

    </form>
 <button id="submit">Delete</button> 
