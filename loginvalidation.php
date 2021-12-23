<?php
	require "admin/connection.php";

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	/*checks if all the inputs are filled or not(but not working properly for password as it is acceptiong even if the password is empty)*/
	if(empty($email)){
		header("Location: http://localhost/Bootstraps/login.php?signup=empty");
        exit();
	}else{
	
		$sql = "select id, fname, mname, lname, role, email, isactive from users where email = '$email' and password = '$password'";

        $result = $conn-> query($sql);

        /*checks if there is any value in $result, if the username and password are not correct, the above sql would not return any data and the $result will be empty
        this is also sending email into URL as well which will be caught and will be displayed if password is mistaken so that the user doesnot have to type email again, can pass multiple variable in here, if there are many inputs to be filled in form this will help not to erase every thing when the user is directed to login.php page*/
        if(mysqli_num_rows($result) === 0){
        	header("Location: http://localhost/Bootstraps/login.php?signup=notmatch&email=$email");
    		exit();
        }

        /*checks if $result has value which means the sql works which means the username and paswword provided matches*/
        if(mysqli_num_rows($result) === 1){
        	$row = mysqli_fetch_assoc($result);

        	/*checks the value of isactive, if the value returned of isactive is 0 then the header will be guided to login.php with passed variable in URL*/
	    	if($row['isactive'] == 0){
	    		header("Location: http://localhost/Bootstraps/login.php?signup=notactive");
	    		exit();
	    	}else{
	    			session_start();
	        	$_SESSION["firstname"] = $row['fname'];
	        	$_SESSION["middlename"] = $row['mname'];
				$_SESSION["lastname"] = $row['lname'];
				$_SESSION["role"] = $row['role'];
				$_SESSION["email"] = $row['email'];
				$_SESSION["id"] = $row['id'];

	        	//echo "session";
	        	echo $_SESSION["id"];
	        }
	
        }

        if($_SESSION["role"] == "ADMIN" || $_SESSION["role"] == "STAFF"){
        	header("Location: http://localhost/Bootstraps/admin/product.php");
        }else{
        	header("Location: http://localhost/Bootstraps/index.php");
        }
     }            

?>
