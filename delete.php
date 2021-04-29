<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:loginpage.php");
    exit();
}
?>
<?php include 'header.php'?>
<?php 

 $emp_id = $_GET['id'];
 
$conn = mysqli_connect("localhost","root","","foodmania") or die("Connerction failed");
        $sql = "DELETE FROM addemployee where id ='{$emp_id}'";
        header("Location: http://localhost/Webtech/web%20tech%20project/employeedetails.php");
        mysqli_close($conn);

 ?>