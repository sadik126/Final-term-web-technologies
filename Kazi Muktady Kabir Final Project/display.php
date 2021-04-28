<?php  
require_once 'showemployee.php';

$student = fetchEmployee($_GET['id']);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Username</th>
		<th>Password</th>
		<th>name</th>
		<th>email</th>
		<th>Gender</th>
	</tr>
	<tr>
		<td><a href="showemployee.php?id=<?php echo $showemployee['username'] ?>"><?php echo $showemployee['username'] ?></a></td>
		<td><?php echo $showemployee['Password'] ?></td>
		<td><?php echo $showemployee['Name'] ?></td>
		<td><?php echo $showemployee['email'] ?></td>
		
	</tr>

</table>


</body>
</html>