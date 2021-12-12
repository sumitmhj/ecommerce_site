<?php
	require "../connection.php";

	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$username  = $_POST['username'];
	$password = md5($_POST['password']);
	$contact = $_POST['contact'];
	$address  = $_POST['address'];
	$city  = $_POST['city'];
	$role  = $_POST['role'];

	$query = "insert into users(fname, mname, lname, email, username, password,  contact, address, city, role) values('$fname', '$mname', '$lname', '$email', '$username', '$password', '$contact', '$address', '$city', '$role')";

	$run = mysqli_query($conn, $query) or die(mysqli_error($conn));

	if($run){
    // echo "Data inserted";
  		header("Location: http://localhost/Bootstraps/admin/users.php");
	
	}else{
    echo "Unable to insert data";
	}



	// if($run){
 //    echo "Data inserted";
 //    header("Location: http://localhost/Bootstraps/admin/users.php");
	// }else{
 //    echo "Unable to insert data";
	// }


?>
