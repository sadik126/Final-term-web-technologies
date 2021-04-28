<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "insert";

   $conn=mysqli_connect($servername,$username,$password,$dbname);
   if($conn)
   {
       //echo "connection is OK";

}
else
   {
    echo "connection failed because of ".mysqli_connect_error();
   }
?>