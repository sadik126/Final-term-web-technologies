<?php

$emp_id = $_POST["id"];

$conn = mysqli_connect("localhost","root","","foodmania") or die("Connection Failed");

$sql = "DELETE FROM addemployee WHERE id = {$emp_id}";

if(mysqli_query($conn, $sql)){
  echo 1;
}else{
  echo 0;
}

?>