<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
    <link rel="stylesheet" type="text/css" href="regestration.css">

</head>
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
      header("location:welcome.php");

      
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
  <p>You are logged in</p>
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

   
    if($login)   
  {  
   if(!empty($_POST["remember"]))   
   {  
    setcookie ("member_login",$username,time()+ (10 * 365 * 24 * 60 * 60));  
    setcookie ("member_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
    $_SESSION["username"] = $username;
   }  
   else  
   {  
    if(isset($_COOKIE["member_login"]))   
    {  
     setcookie ("member_login","");  
    }  
    if(isset($_COOKIE["member_password"]))   
    {  
     setcookie ("member_password","");  
    }  
   }  
   header("location:welcome.php"); 
  }  
  





?>



  
  <h1 style="text-align:center">Login Here</h1>
  
  <form method="POST" action="loginpage.php" >
    <fieldset>
    <legend align="center" style="font-size: 2.0em">Welcome to Login</legend>

   <table cellpadding="2" width="40%"  align="center"cellspacing="10">
    <tr>
      <td><b>USERNAME</b></td>
      <td><input type="text" id="username" name="username" size="30" required="1" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>"></td>
    </tr>

    <tr>
      <td><b>PASSWORD</b></td>
      <td><input type="text" id="password" name="password" size="30" required="1"value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>"></td>

    </tr>

     <tr>
       <td>
         <div class="form-group">  
     <input type="checkbox" name="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> />  
     <label for="remember-me">Remember me</label>  
    </div> 
        
       </td>
     </tr>
      
     

   
       <tr>
          <td></td>
          <td><input style="background-color: red;color: white;padding: 10px 28px; font-size: 16px; " type="Submit" name="submit" value="Submit"></td>
        </tr>

        

       
  </table>

  

       <div  align="center">

    
    <span class="psw" > <a href="forgetpass.php"> <span style="color: #ff0000">Forgot password?</span></a></span>
   </div>


        
    
</fieldset>
</form>



<?php include 'footerpro.php' ?>
</body>
</html>