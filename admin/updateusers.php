

<?php
require "connection.php";

$id = $_GET["id"];

$fname = $_POST["fname"];
$mname = $_POST["mname"];
$lname = $_POST["lname"];
$email = $_POST["email"];
$password = md5($_POST["password"]);
$username = $_POST["username"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$city = $_POST["city"];
$role = $_POST["role"];
$isactive = $_POST["isactive"];

$add = " ";
if($_POST["password"]){
    $add = "password = '".$password."',";
}

$query = "update users set fname = '".$fname."', mname = '".$mname."', lname = '".$lname."', email = '".$email."', username = '".$username."', $add  contact = '".$contact."', address = '".$address."', city = '".$city."', role = '".$role."', isactive = '".$isactive."' where id = ".$id;

// echo $query;
// die();


$run = mysqli_query($conn,$query) or die(mysqli_error());

if($run){
    echo "Data Updated";
    header("Location: http://localhost/Bootstraps/admin/users.php");
}else{
    echo "Unable to update data";
}

?>


