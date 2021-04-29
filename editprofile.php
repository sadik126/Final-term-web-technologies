
<?php
include'insert.php';
?>



<?php include 'header.php' ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="regestration.css">
	
</head>
<h1 align="center">EDIT YOUR PROFILE</h1>
<body>

 <form method="POST" action="" >
    <fieldset>
    <legend align="center" style="font-size: 2.0em">Fill this box</legend>

   
    
    <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="10">
    <tr>
      <td>NAME</td>
      <td><input type="text" maxlength="30" name="name" size="30" required=""></td>
    </tr>

    <tr>
      <td>EMAIL</td>
      <td><input type="email" name="email" size="30" required=""></td>
    </tr>


    <tr>
      <td>USERNAME</td>
      <td><input type="text" maxlength="8" name="username" size="30" required=""></td>
    </tr>

    <tr>
      <td>DATE OF BIRTH</td>
      <td><input type="Date" name="dateofbirth" size="30" min="1953-01-01" max="1999-01-01" required=""></td>
    </tr>


    <tr>
      <td>PASSWORD</td>
      <td><input type="text" name="password" size="30" required=""></td>
    </tr> 


   

    <tr>
      <td>GENDER</td>
      <td><input type="radio" name="gender" value="Male" size="30" >Male
      <input type="radio" name="gender" value="Female" size="30" >Female
      <input type="radio" name="gender" value="Other" size="30" >Other
       
    </td>
    </tr>

    
  

    
        <tr>
          <td></td>
          <td><input style="background-color: green;color: white;padding: 10px 28px; font-size: 16px; " type="Submit" name="updatedata" value="updatedata"></td>
        </tr>
      
  </table>



  <?php
  if(isset($_POST['updatedata']))
  {
  	$username=$_POST['username'];
  	$sql="update users set name='$_POST[name]',email='$_POST[email]',dateofbirth='$_POST[dateofbirth]',password='$_POST[password]',gender='$_POST[gender]'where username='$_POST[username]'";
  	$run=mysqli_query($con,$sql);
  	if($run)
  	{
  		echo'<script>alert("data updated")</script>';
  	}
  	else
		{
			echo'<script>alert("data not updated")</script>';
		}

  }


  ?>
    


    

        
    
    

        
    
</fieldset>

</form>

<?php include 'footerpro.php' ?>

</body>
</html>