<!DOCTYPE html>
<html>
<head>
  <script src="login_validation.js"></script>
    <title>Food Mania</title>
    <link rel="stylesheet" type="text/css" href="registration.css">
</head>
<style>
  body {
  background-image: url('foodmania.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
<body>

<?php include 'headerpro.php' ?>

<?php 

$login = false;
$showerror = false;

if($_SERVER["REQUEST_METHOD"]=="POST"){

 
  include'insert.php';
 
  $username=$_POST["username"];
  
  $password=$_POST["password"];
 
 
  

  

    $sql="select * from users where username='$username'and password='$password'";
    $result = mysqli_query($con,$sql);
    $num = mysqli_num_rows($result);

    if($num > 0){

      $login =  true;
      session_start();
      $_SESSION['loggedin']=true;
      $_SESSION['username']=$username;
      header("Managerpage.php");

      
    }
  
  else
  {
    

    $showerror = "please try again";
  
  }
}
  
?>
  <?php
  if($login)
{  

echo'<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <h2><p><b>You are logged in as a Manager</b></p></h4>
  <hr> 

</div>';

}
if(!empty($showerror))
{
echo'<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Sorry!</h4>
  <p>Password did not matched</p>
  <hr>
  <p class="mb-0">Please try again.</p>
</div>';

}

?>


  
<form method="POST" action="Managerpage.php"  >
    <fieldset>
    <legend align="center" style="font-size: 2.0em">Welcome to Login</legend>
    
   <table cellpadding="2" width="40%"  align="center"cellspacing="10">
    <tr>
      <td><b>USERNAME</b></td>
      <td><input type="text" id="username" name="username" size="30" required="1"></td>
    </tr>

    <tr>
      <td><b>PASSWORD</b></td>
      <td><input type="text" id="password" name="password" size="30" required="1"></td>
    </tr>

   
        <tr>
          <td></td>
          <td><input style="background-color: red;color: white;padding: 10px 28px; font-size: 16px; " type="Submit" name="Submit" value="Submit">
</td>



        </tr>
        
        

       
  </table>

  

       <div  align="center">

    
    <span class="psw" ><a href="forgetpass.php"> <span style="color: #ff0000">Forgot password?</span></a></span>
   </div>


        
    
</fieldset>

</form>


<?php include 'footerpro.php' ?>
</body>
</html>