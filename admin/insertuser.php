<?php
	require "../connection.php";

	$fname = $mname = $lname = $email = $gender =$username = "";
	$password =$contact =$address = $city = $isactive = $role = $checkurl = "";

	// $fname = $_POST['fname'];
	// $mname = $_POST['mname'];
	// $lname = $_POST['lname'];
	// $email = $_POST['email'];
	// $gender = $_POST['gender'];
	// $username  = $_POST['username'];
	// $password = md5($_POST['password']);
	// $contact = $_POST['contact'];
	// $address  = $_POST['address'];
	// $isactive = $_POST['isactive'];
	// $city  = $_POST['city'];
	// $role  = $_POST['role'];
	$checkurl = $_POST['checkurl'];



		// some of the ($_POST['variable']) are not required but add for future if needed 
	if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['gender']) || empty($_POST['username']) || empty($_POST['password']) || empty($_POST['contact']) || empty($_POST['address']) || empty($_POST['city']) || (($_POST['role'])=='SELECT') || (($_POST['isactive'])=='SELECT') ) {

		if(empty($_POST['fname'])){
			$fname = 'emt';
			// header("Location: http://localhost/Bootstraps/register.php?fname=$fname");
			// exit();    
			} elseif(!empty($_POST['fname'])) {
			$fname = $_POST['fname'];
			if(!preg_match("/^[a-zA-Z-']*$/", $fname)){
				$fname='er';
			// header("Location: http://localhost/Bootstraps/register.php?fname=$fname");
			// exit();
			}
			}

		if(empty($_POST['mname'])){
			$mname = "";    
			} elseif(!empty($_POST['mname'])) {
			$mname = $_POST['mname'];
			if(!preg_match("/^[a-zA-Z-']*$/", $mname)){
				$mname="er";
			}
			}

		if(empty($_POST['lname'])){
			$lname = "emt";
		   } elseif(!empty($_POST['lname'])) {
			$lname = $_POST['lname'];
			if(!preg_match("/^[a-zA-Z-']*$/", $lname)){
				$lname="er";
				}
			}

		if(empty($_POST['email'])){
			$email = "emt";
		   } elseif(!empty($_POST['email'])) {
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$email="er";
				}
			}

		if(empty($_POST['gender'])){
			$gender = "emt";
		   } elseif(!empty($_POST['gender'])) {
			$gender = $_POST['gender'];
			// if(!preg_match("/^[a-zA-Z-']*$/", $gender)){
			// 	$gender="error";
			// 	}
			}

		if(empty($_POST['username'])){
			$username = "emt";
		   } elseif(!empty($_POST['username'])) {
			$username = $_POST['username'];
			
			}

		if(empty($_POST['password'])){
			$password = "emt";
		   } elseif(!empty($_POST['password'])) {
			$password = $_POST['password'];
			// if(!preg_match("/^[a-zA-Z-']*$/", $password)){
			// 	$password="error";
			// 	}
			}

		if(empty($_POST['contact'])){
			$contact = "emt";
		   } elseif(!empty($_POST['contact'])) {
			$contact = $_POST['contact'];
			// if(!preg_match("/^[a-zA-Z-']*$/", $contact)){
			// 	$contact="error";
			// 	}
			}
			
		if(empty($_POST['address'])){
			$address = "emt";
		   } elseif(!empty($_POST['address'])) {
			$address = $_POST['address'];
			// if(!preg_match("/^[a-zA-Z-']*$/", $address)){
			// 	$address="error";
			// 	}
			}
			
		if(empty($_POST['isactive'])){
			$isactive = 0;
		   } elseif(!empty($_POST['isactive'])) {
			$isactive = $_POST['isactive'];
			if($isactive == "SELECT"){
				$isactive = "er";
			}
		 	}
			
		if(empty($_POST['city'])){
			$city = "emt";
		   } elseif(!empty($_POST['city'])) {
			$city = $_POST['city'];
			// if(!preg_match("/^[a-zA-Z-']*$/", $city)){
			// 	$city="error";
			// 	}
			}
			
		if(empty($_POST['role'])){
			$role = "emt";
		   } elseif(!empty($_POST['role'])) {
			$role = $_POST['role'];
			if($role == "SELECT"){
				$role = "er";
				}	
			}

		

		if($checkurl == "register"){
				header("Location: http://localhost/Bootstraps/register.php?fname=$fname&mname=$mname&lname=$lname&email=$email&gender=$gender&username=$username&password=$password&contact=$contact&address=$address&isactive=$isactive&city=$city&role=$role&checkurl=$checkurl");
				exit();

			}	elseif($checkurl == "add"){
				header("Location: http://localhost/Bootstraps/admin/addusers.php?fname=$fname&mname=$mname&lname=$lname&email=$email&gender=$gender&username=$username&password=$password&contact=$contact&address=$address&isactive=$isactive&city=$city&role=$role&checkurl=$checkurl");
				exit();

			}							

    	
       } elseif(!empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['gender']) && !empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['contact'])&& !empty($_POST['address']) && !empty($_POST['city']) && (($_POST['role'])!='SELECT') && (($_POST['isactive'])!='SELECT') ){

       	if(!empty($_POST['fname'])) {
			$fname = $_POST['fname'];
			if(!preg_match("/^[a-zA-Z-']*$/", $fname)){
				$fname='er';
			// header("Location: http://localhost/Bootstraps/register.php?fname=$fname");
			// exit();
			}
			}

		if(empty($_POST['mname'])){
			$mname = "";    
			} elseif(!empty($_POST['mname'])) {
			$mname = $_POST['mname'];
			if(!preg_match("/^[a-zA-Z-']*$/", $mname)){
				$mname="er";
			}
			}

		if(!empty($_POST['lname'])) {
			$lname = $_POST['lname'];
			if(!preg_match("/^[a-zA-Z-']*$/", $lname)){
				$lname="er";
				}
			}

		if(!empty($_POST['email'])) {
			$email = $_POST['email'];
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$email="er";
				}
			}

		if(!empty($_POST['gender'])) {
			$gender = $_POST['gender'];
			// if(!preg_match("/^[a-zA-Z-']*$/", $gender)){
			// 	$gender="error";
			// 	}
			}

		if(!empty($_POST['username'])) {
			$username = $_POST['username'];
			}

		if(!empty($_POST['password'])) {
			$password = $_POST['password'];
			// if(!preg_match("/^[a-zA-Z-']*$/", $password)){
			// 	$password="error";
			// 	}
			}

		if(!empty($_POST['contact'])) {
			$contact = $_POST['contact'];
			// if(!preg_match("/^[a-zA-Z-']*$/", $contact)){
			// 	$contact="error";
			// 	}
			}
			
		if(!empty($_POST['address'])) {
			$address = $_POST['address'];
			// if(!preg_match("/^[a-zA-Z-']*$/", $address)){
			// 	$address="error";
			// 	}
			}
			
		if(!empty($_POST['isactive'])) {
			$isactive = $_POST['isactive'];
			
		 	}
			
		if(!empty($_POST['city'])) {
			$city = $_POST['city'];
			// if(!preg_match("/^[a-zA-Z-']*$/", $city)){
			// 	$city="error";
			// 	}
			}
			
		if(!empty($_POST['role'])) {
			$role = $_POST['role'];
			
			}

		if( ($fname == 'er') || ($mname == 'er') || ($lname == 'er') ){
			if($checkurl == "register"){
				header("Location: http://localhost/Bootstraps/register.php?fname=$fname&mname=$mname&lname=$lname&email=$email&gender=$gender&username=$username&password=$password&contact=$contact&address=$address&isactive=$isactive&city=$city&role=$role&checkurl=$checkurl");
				exit();

				}elseif($checkurl == "add"){
				header("Location: http://localhost/Bootstraps/admin/addusers.php?fname=$fname&mname=$mname&lname=$lname&email=$email&gender=$gender&username=$username&password=$password&contact=$contact&address=$address&isactive=$isactive&city=$city&role=$role&checkurl=$checkurl");
				exit();

				}

			}else{
	        // $fname = $_POST['fname'];
			// $mname = $_POST['mname'];
			// $lname = $_POST['lname'];
			// $email = $_POST['email'];
			// $gender = $_POST['gender'];
			// $username  = $_POST['username'];
			// $password = md5($_POST['password']);
			// $contact = $_POST['contact'];
			// $address  = $_POST['address'];
			// $isactive = $_POST['isactive'];
			// $city  = $_POST['city'];
			// $role  = $_POST['role'];

	
			$query = "insert into users(fname, mname, lname, email, gender, username, password,  contact, address, city, role, isactive) values('$fname', '$mname', '$lname', '$email', '$gender', '$username', '$password', '$contact', '$address', '$city', '$role', '$isactive')";

			$run = mysqli_query($conn, $query) or die(mysqli_error($conn));

			if($run){
		    // echo "Data inserted";
		  		header("Location: http://localhost/Bootstraps/admin/users.php");
			
			}else{
		    echo "Unable to insert data";
			}



			if($run){
		    echo "Data inserted";
		    header("Location: http://localhost/Bootstraps/admin/users.php");
			}else{
		    echo "Unable to insert data";
			}
		}
	}

?>
