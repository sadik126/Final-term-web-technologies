<?php


echo $emp_name = $_POST['name'];
echo $emp_mail = $_POST['email'];
echo $emp_birthday = $_POST['dateofbirth'];
echo $emp_gender = $_POST['gender'];
echo $emp_uname = $_POST['username'];
echo $emp_pass = $_POST['password'];

$conn = mysqli_connect("localhost","root","","foodmania") or die("Connerction failed");

$sql = "INSERT INTO addemployee(name, email, dateofbirth, gender, username, password) VALUES ('{$emp_name}','{$emp_mail}','{$emp_birthday}','{$emp_gender}','{$emp_username}','{$emp_pass}')";
$result = mysqli_query($conn, $sql) or die("Queary Unsuccessful");
header("Location: http://localhost/Webtech/web%20tech%20project/employeedetails.php");
mysqli_close($conn);


?>