<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location:loginpage.php");
  exit();
}
?>
<?php
include'insert.php';
?>



<?php include 'header.php' ?>

<?php
include'sidebar.html';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

   
  <!-- <link rel="stylesheet" type="text/css" href="regestration.css"> -->
	
</head>

<body>
<style >
 table{
  padding: 10px 10px;
  align-items: center;
  
  float: center;
 }
</style>

  <form method="POST" action="" name="myform" onsubmit="return validateForm()">
     <h1 align="center">EDIT YOUR PROFILE</h1>
    
    <legend align="center" style="font-size: 2.0em">Fill this box</legend>

   
    <div align="center">
 <!--    <table cellpadding="3" width="50%" bgcolor="" cellspacing="10">
    <tr id="name">
      <td>NAME</td>
      <td>
        <input type="text" maxlength="11"id="name" name="name" size="30">
         <b><span style="color: red;" id="seterror"></span></b>
      </td>
    </tr>

    <tr id="email">
      <td>EMAIL</td>
      <td>
        <input type="text" name="email" id="email" size="30" >
        <b><span style="color: red;" id="seterror"></span></b>
      </td>
    </tr>


    <tr id="username">
      <td>USERNAME</td>
      <td>
        <input type="text" maxlength="18" id="username" name="username" size="30" >
         <b><span style="color: red;" id="seterror"></span></b>
      </td>
    </tr>

    <tr id="date">
      <td>DATE OF BIRTH</td>
      <td>
        <input type="Date" name="dateofbirth" id="date" size="30" min="1953-01-01" max="1999-01-01" >
         <b><span style="color: red;" id="seterror"></span></b>
      </td>
    </tr>


    <tr id="password">
      <td>PASSWORD</td>
      <td>
        <input type="text" name="password" size="30" id="password" onkeyup="checkPass()" onblur="checkPass()">
         <b><span style="color: red;" id="seterror"></span></b>
      </td>
    </tr> 


   

    <tr id="gender">
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
      
  </table> -->
<table cellpadding="3" width="50%" bgcolor="white" align="center"cellspacing="15">
    <tr id="name">
      <td>NAME</td>
      <td>
        <input type="text" maxlength="11" name="name" size="30"  style="border-radius: 7px;"><b><span style="color: red;" class="formerror"></span></b>
      </td>
    </tr>

    <tr id="email">
      <td>EMAIL</td>
      <td>
        <input type="text" name="email" size="30" style="border-radius: 7px;"><b><span style="color: red;" class="formerror"></span></b>
      </td>
    </tr>


    <tr id="username">
      <td>USERNAME</td>
      <td>
        <input type="text" maxlength="20" name="username" size="30"style="border-radius: 7px;"><b><span style="color: red;" class="formerror"></span></b>
      </td>
    </tr>

    <tr id="date">
      <td>DATE OF BIRTH</td>
      <td>
        <input type="Date" name="date" size="30" min="1953-01-01" max="1999-01-01" style="border-radius: 7px;padding: 2px 60px;"><b><span style="color: red;" class="formerror"></span></b>
      </td>
    </tr>


    <tr id="password">
      <td>PASSWORD</td>
      <td>
        <input type="text" name="password" size="30" style="border-radius: 7px;"><b><span style="color: red;" class="formerror"></span></b>
      </td>
    </tr> 


   

    <tr id="gender">
      <td>GENDER</td>
      <td><input type="radio" name="gender" value="Male" size="30" >Male
      <input type="radio" name="gender" value="Female" size="30" >Female
      <input type="radio" name="gender" value="Other" size="30" >Other
       
    </td>
    </tr>

    
  

    
        <tr>
          <td></td>
          <td><input style="background-color: #277b8e;color: white;padding: 10px 28px; font-size: 16px; border-radius:15px;font-family: 'Zen Dots', cursive; " type="Submit" name="updatedata" value="EDIT PROFILE"></td>
        </tr>
      
  </table>
</form>
</div>

 


  <?php
  if(isset($_POST['updatedata']))
  {
  	$username=$_POST['username'];
  	$sql="update users set name='$_POST[name]',email='$_POST[email]',dateofbirth='$_POST[date]',password='$_POST[password]',gender='$_POST[gender]'where username='$_POST[username]'";
  	$run=mysqli_query($con,$sql);
  	if($run)
  	{
  		// echo'<script>alert("data updated")</script>';
      echo "data updated";
  	}
  	else
		{
			// echo'<script>alert("data not updated")</script>';
      echo "sorry.try again";
		}

  }


  ?>
    


<br>


</body>

<script>
  function clearErrors(){
    errors=document.getElementsByClassName('formerror');
    for(let item of errors)
    {
      item.innerHTML="";
    }
  }
  function seterror(id,error) {
    element = document.getElementById(id);
    element.getElementsByClassName('formerror')[0].innerHTML = error;
    
  }

  function validateForm(){
    var returnval = true;
    clearErrors();
    var name = document.forms['myform']['name'].value;
    if(name.length<5){
      seterror("name","*Length of name is too short");
      returnval= false;
    }
    if(name.length==0){
      seterror("name","*Please fill up the name");
      returnval= false;
    }
    var email = document.forms['myform']['email'].value;
    
    var pattern =   /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    
    
      if(email.match(pattern))
      {
      // seterror("email","*valid email");
      returnval= true;
      }
      else
      {
      seterror("email","*invalid email");
      returnval= false;
      }
    if(email.length<3){
      seterror("email","*Length of email is too short");
      returnval= false;
    }
    if(email.length==0){
      seterror("email","*Please fill up the email");
      returnval= false;
    }
    var username = document.forms['myform']['username'].value;
    if(username.length>10){
      seterror("username","*Length of name is too long");
      returnval= false;
    }
    if(username.length==0){
      seterror("username","*Please fill up the username");
      returnval= false;
    }
    var date = document.forms['myform']['date'].value;
    
    
    if(date.length==0){
      seterror("date","*Please fill up the date");
      returnval= false;
    }
    
    var password = document.forms['myform']['password'].value;
    
    
        
        if (password.length < 3)
        {

        
        seterror("password", "*Password should be atleast 3 characters long!");
        returnval = false;
        }
    if(password.length==0)
    {
      seterror("password","*Please fill up the password");
      returnval= false;
    }

  


    return returnval;

  }
</script>
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
</html>