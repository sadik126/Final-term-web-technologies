<?php 

echo $emp_id = $_POST['id'];
echo $emp_name = $_POST['name'];
echo $emp_mail = $_POST['email'];
echo $emp_birthday = $_POST['dateofbirth'];
echo $emp_gender = $_POST['gender'];
echo $emp_uname = $_POST['username'];
echo $emp_pass = $_POST['password'];

$conn = mysqli_connect("localhost","root","","foodmania") or die("Connerction failed");

$sql = "UPDATE addemployee set name = '{$emp_name}',email = '{$emp_mail}',username ='{$emp_uname}', dateofbirth ='{$emp_birthday}',password ='{$emp_pass}', gender ='{$emp_gender}' where id= '{$emp_id}'";
$result = mysqli_query($conn, $sql) or die("Queary Unsuccessful");
header("Location: http://localhost/Webtech/web%20tech%20project/employeedetails.php");
mysqli_close($conn);

 ?>