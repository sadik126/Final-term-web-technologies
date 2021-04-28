<?php 

require_once 'model.php';

function fetchAllEmployee(){
	return showAllEmployee();

}
function fetchEmployee($id){
	return showEmployee($id);

}
?>