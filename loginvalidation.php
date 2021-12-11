<?php
	require "admin/connection.php";

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$ql = "select * from customer";
	
	$sql = "select fname, mname, lname, role, email from users where email = '$email' and password = '$password'";

                    $result = $conn-> query($sql);

                    if(mysqli_num_rows($result) === 1){
                    	$row = mysqli_fetch_assoc($result);
                    	
                    	session_start();
                    	$_SESSION["firstname"] = $row['fname'];
                    	$_SESSION["middlename"] = $row['mname'];
						$_SESSION["lastname"] = $row['lname'];
						$_SESSION["role"] = $row['role'];
						$_SESSION["email"] = $row['email'];

                    	echo "session";
                    }
                    if($_SESSION["role"] == "ADMIN" || $_SESSION["role"] == "STAFF"){
                    	header("Location: http://localhost/Bootstraps/admin/product.php");
                    }else{
                    	header("Location: http://localhost/Bootstraps/index.php");
                    }




                    

?>
