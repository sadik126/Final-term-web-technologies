<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location:loginpage.php");
    exit();
}
?>

<?php include 'header.php'?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="pro.css">
</head>
    
    
  <?php

?>
<body style="background-color: #ece4e4;">

<div id="main-content">
    <h2>All Records</h2>
    <?php
    $conn = mysqli_connect("localhost","root","","foodmania") or die("Connerction failed");

        $sql = "SELECT * FROM addemployee";
        $result = mysqli_query($conn, $sql) or die("Queary Unsuccessful");
        if(mysqli_num_rows($result) > 0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Username</th>
        <th>Date Of Birth</th>
        <th>Password</th>
        <th>Gender</th>
        </thead>
        <tbody>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['dateofbirth']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['id']; ?>'>Delete</a>
                </td>
            </tr>
           <?php } ?>
        </tbody>
    </table>
<?php }else{ echo "<h2> No Record Found</h2>";
        }
           mysqli_close($conn); 
           ?>
</div>
</div>
</body>
</html>
