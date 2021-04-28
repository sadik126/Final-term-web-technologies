<?php 

require_once 'db_connection.php';

$id = isset($_GET['id']) ? $_GET['id'] : '';
function showAllEmployee(){
	$conn = mysqli_connect();
    $selectQuery = 'SELECT * FROM `users` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showEmployee($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `users` where username = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchUser($user_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `users` WHERE username LIKE '%$user_name%'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addEmployee($data){
	$conn = db_conn();
    $selectQuery = "INSERT into users(username, password, email, dateofbirth, gender)
VALUES (:username, :password, :name, :email, :gender)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':username' => $data['username'],
        	':password' => $data['password'],
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':gender' => $data['gender']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}


function updateEmployee($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE users set username = ?, name = ?, email = ? where username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['username'], $data['name'], $data['email'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteEmployee($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `users` WHERE `username` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}