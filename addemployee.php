
<?php include 'header.php' ?>



<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="regestration.css">
  
</head>

    <h1 align="center">ADD EMPLOYEE</h1>

  <form method="POST" action="savedata.php" >
    <fieldset>
    <legend align="center" style="font-size: 2.0em">Fill Up the Form Carefully</legend>

   
    
    <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="10">
    <tr>
      <td>NAME</td>
      <td><input type="text" maxlength="30" name="name" size="30" required="1"></td>
    </tr>
    <tr>
      
    <tr>
      <td>EMAIL</td>
      <td><input type="email" name="mail" size="30" required="1"></td>
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



  
 


        
    




  

</body>
</html>
<?php include 'footerpro.php' ?>
