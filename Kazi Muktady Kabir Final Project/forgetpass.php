<!DOCTYPE html>
<html>
    <head>
        <script>
function validateForm() {
  var x = document.forms["enemail"]["enemail"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
        
        <title>Forget Password</title>
      
    </head>
    <body>
    	 <?php include 'headerpro.php' ?>
             <fieldset>
    <legend align="center" style="font-size: 2.0em">Forget Password</legend>
             <form action="forgetpass.php" method="post" align="center">

                 <div class="container">
    <label for="enemail"><b>Enter Email</b></label>
    <input type="text" placeholder="Enter Email" name="enemail"
    onsubmit="Submit"  ><br>
    
    <br>
    <div class="container" style="background-color:#f1f1f1">
  <form name="enemail" action="forgetpass.php" onsubmit="return validateForm()" method="post">
  <input type="Submit" value="Submit">
</form>
    <label>
        </fieldset>
   </form>
   
    <?php include 'footerpro.php' ?>

   </body>
</html>
