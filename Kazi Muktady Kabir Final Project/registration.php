<!DOCTYPE html>
<html>
<head>
 <script src="login_validation.js"></script>

	<title>Food Mania</title>
  
  <link rel="stylesheet" type="text/css" href="regestration.css">
  
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

if($_SERVER["REQUEST_METHOD"]=="POST")
{

 
  include'insert.php';
  $name=$_POST["name"];
  $email=$_POST["email"];
  $username=$_POST["username"];
  $dateofbirth=$_POST["dateofbirth"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
  $gender=$_POST["gender"];
  //$exists =false;
  $showAlert =false;
  $showerror = false;
   $showerror1 = false;
   


  $existSql = "select * from users where username = '$username'";

  $result = mysqli_query($con,$existSql);
  $numExistRows = mysqli_num_rows($result);
  if($numExistRows > 0){
    $showerror1= true;
  }
  else{
  

   if(($password==$cpassword) )
  {

    $sql="insert into users(name,email,username,dateofbirth,password,gender) value ('$name','$email','$username','$dateofbirth','$password','$gender')";
    $result = mysqli_query($con,$sql);

    if($result)
    {
      $showAlert =  true;
      
    }
  }
  else
  {
    $showerror = true;
  

    }

  }

}
  


  
?>
  <?php
  if(!empty($showAlert))
{
echo'<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Your account has been created</p>
  <hr>
  <p class="mb-0">You can log in now.</p>
</div>';
$sql="insert into users(name,email,username,dateofbirth,password,gender) value ('$name','$email','$username','$dateofbirth','$password','$gender')";
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

if(!empty($showerror1))
{
echo'<div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Sorry!</h4>
  <p> username already exists</p>
  <hr>
  <p class="mb-0">Please try again.</p>
</div>';
}





?>
<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


    <h1 align="center">WELCOME TO REGISTRATION</h1>



  
  
  
  <form method="POST" action="registration.php" >
    <fieldset>
    <legend align="center" style="font-size: 2.0em">Fill Up the Form Carefully</legend>

   
    
    <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="10">
    <tr>
      <td>NAME</td>
      <td><input type="text" id="" maxlength="11" name="name" size="30" onsubmit="validateForm()"></td>
    </tr>

    <tr>
      <td>EMAIL</td>
      <td><input type="email" name="email" size="30" onclick="Submit"></td>
    </tr>


    <tr>
      <td>USERNAME</td>
      <td><input type="text" maxlength="8" name="username" size="30" required="1"></td>
    </tr>

    <tr>
      <td>DATE OF BIRTH</td>
      <td><input type="Date" name="dateofbirth" size="30" min="1953-01-01" max="1999-01-01" required="1"></td>
    </tr>


    <tr>
      <td>PASSWORD</td>
      <td><input type="text" name="password" size="30" required="1"></td>
    </tr> 


    <tr>
      <td>CONFIRM PASSWORD</td>
      <td><input type="text" name="cpassword" size="30" required="1"></td>
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
          <td><input style="background-color: red;color: white;padding: 10px 28px; font-size: 16px; " type="Submit" name="submit" value="Submit"></td>
        </tr>
      
  </table>



  
    


    

        
    
    

        
    
</fieldset>

</form>


<?php include 'footerpro.php' ?>
</body>
</html>

