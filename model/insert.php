 <?php

$con=mysqli_connect("localhost","root","","foodmania");


$sql = "SELECT * FROM users";

$result = mysqli_query($con, $sql) or die("SQL Query Failed.");

$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

$json_data = json_encode($output, JSON_PRETTY_PRINT);

$file_name = "my-" . date("d-m-Y") . ".json";

if(file_put_contents("json/{$file_name}", $json_data )){
	echo "";
}else{
	echo "Can't Insert data in JSON file.";
}


if(!$con){


	die("error". mysqli_connect_error());
}


?>