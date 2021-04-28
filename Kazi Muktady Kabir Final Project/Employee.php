<style>
  body {
  background-image: url('foodmania.png');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
<head>
    
    <style>
        table{
  border: 1px solid black;
  border-collapse: collapse;



}
       td, th {
  border: 1px solid black ;


} 



    </style>

</head>



<body>
<table >
<tr>
  <th>User ID</th>
<th>Email</th>
<th colspan="2">Opereation</th>
</tr>

  <?php
  include("db_connection.php");
 error_reporting(0);
$query="SELECT * FROM users";
$profit="SELECT username,email FROM users";
 $data=mysqli_query($conn,$query);
 $dat=mysqli_query($conn,$profit);
 $total=mysqli_num_rows($data);
 //echo"$total";
//echo $result['name']." ".$result['profit'];
 
if($total!=0)
{
  //$result=mysqli_fetch_assoc($data);
//$res=mysqli_fetch_assoc($dat);
 while(($result=mysqli_fetch_assoc($data))&&($res=mysqli_fetch_assoc($dat)))
    {
      echo "
  <tr>
  <td>".$result['username']."</td>
  <td>".$result['email']."</td> 
  <td><a href='edit.php?username=$result[username]&username=$result[username]&email=$result[email]&email=$result[email]&email=$result[email]'>Edit </td> 
  <td><a href='delete.php?pid=$result[username]' onclick='return checkdelete()'>Delete</td> </tr> ";
  }
}
else
{
  echo "No records found";
}

?>


</table>
<script>
  function checkdelete()
  {

  return Confirm('Are you sure you want to Delete?');
}
</script>

<h2>Employee database display</h2>

<form action=""> 
  <select name="employee" onchange="showAllEmployee(this.value)">
    <option value="">Select an Employee:</option>
    <option value="Sonhy">Sony</option>
    <option value="sk ">sk</option>
    <option value="kk">kk</option>
  </select>
</form>
<br>
<div id="txtHint">Employee info will be listed here...</div>

<script>
function showAllEmployee(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "display.php?q="+str, true);
  xhttp.send();
}
</script>

</body>