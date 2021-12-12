<?php

require 'connection.php';

$id = $_GET['id'];
$action = $_GET['action'];

$query = "";

if($action == "activate"){
	$query = "update users set isactive = 1 where id ={$id} ";

}else if($action == "deactivate"){
	$query = "update users set isactive = 0 where id ={$id} ";

}

// echo $query;


$run = mysqli_query($conn,$query) or die(mysqli_error());

if($run){
    echo "updated successfully";
    if($action == "activate"){
	 header("Location: http://localhost/Bootstraps/admin/inactiveusers.php");

	}else if($action == "deactivate"){
	 header("Location: http://localhost/Bootstraps/admin/users.php");
		}
}else{
    echo "Error deleting record: ". $conn->error;
}
?>