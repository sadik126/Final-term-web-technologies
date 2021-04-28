

<?php
 include 'headerpro.php'
?>






<!DOCTYPE html>
<html>
<head>
    <title>Forget password</title>
</head>
<body>
<?php
 $eremail=  $ernpass= $ernwpass = "";

 $email=  $npass= $nwpass = "";




include'insert.php';

      


  
      
        if (empty($_POST["pass"])) 
        {
          $erpass="enter value "; 
        }
        
     
        
      else
        {
            
        $npass = validate($_POST["npass"]);
        }


        if (empty($_POST["nwpass"])) 
        {
          $ernwpass="Retype value "; 
        }
        
      else
        {
            
        $nwpass = validate($_POST["nwpass"]);
        }



        if($_POST['npass'] != $_POST['nwpass']) 
        {
        echo "is not matched";
       } 
       else
       {
        if(isset($_POST['submit']))
        {

     if(mysqli_query($con,"UPDATE users set password='$_POST[npass]'where email='$_POST[email]'"))
     {
      echo"updated password";
     }
  
    
}

     
}


 function validate($data)
        { 
              $data= trim($data);
              $data = stripcslashes($data);
              $data = htmlspecialchars($data);
              return $data;
        }
        
    
        


         
    


        

  
 
?>

  
  <h1 style="text-align:center">Change password</h1>
  
  <form method="POST" action="" >
    <fieldset>
    

   <table cellpadding="2" width="50%" bgcolor="E0E0E0" align="center"cellspacing="2">
    <tr>
      <td>EMAIL</td>
      <td><input type="email" name="email" size="30" required="1"><?php echo $eremail; ?></td>
    </tr>
    
    <tr>
      <td>New password</td>
      <td><input type="text" name="npass" size="30" required="1"><?php echo $ernpass; ?></td>
    </tr>

    <tr>
      <td> Retype New password</td>
      <td><input type="text" name="nwpass" size="30" required="1"><?php echo $ernwpass; ?></td>
    </tr>

   

    
   

       
        <tr></tr>
        <tr>
          <td></td>
          <td><input type="Submit" name="submit" value="Submit"</td>
        </tr>
  </table>


        
    
</fieldset>
</form>


</body>
</html>