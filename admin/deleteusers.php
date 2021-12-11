<?php

require 'connection.php';

$id = $_GET['id'];

$query = "delete from users where id = {$id}";

$run = mysqli_query($conn,$query) or die(mysqli_error());

if($run){
    echo "Staff deleted successfully";
    header("Location: http://localhost/Bootstraps/admin/users.php");
}else{
    echo "Error deleting record: ". $conn->error;
}
?>