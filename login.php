<?php require "include/headerlogin.php"; ?>
		<div class="container mt-3">
			<h4>Login or Register</h4>
			<div class ="row">
				<div class="col-lg-6 d-flex align-items-stretch">
					<div class="card-body border">
						<h3>Login</h3>
						<form action="loginvalidation.php" method="POST">
							<div class="form-group mt-2">
								<label>Email address</label>
								<!-- the value in the if statement is caught from the URL and is passed form the loginvalidation.php where if the username and password does not matched, the email is not deleted so that the user only has to enter password. If the form has more inputs to fill, the variables in URL can be passed as many as we want  -->
								<?php
								if(isset($_GET['email'])){
									$email = $_GET['email'];
									echo '<input type="email" class="form-control" placeholder="Enter email" name="email" value ="'.$email.'">';
								}else{
									echo '<input type="email" class="form-control" placeholder="Enter email" name="email" required>';
								}

								 ?>
								
							</div>
							<div class="form-group mt-2">
								<label> Password</label>
								<input type="password" class="form-control" placeholder="Password" name="password">
								<small class=form-text>
									<a href="">Forgotten Password</a>
								</small>
							</div>
							<div class="mt-2">
								<button type="submit" class="btn btn-primary mt-4 bg-warning text-dark">Login</button>
							</div>
						
						</form>
						<p class="text-center">Or</p>
						<a href="http://localhost/Bootstraps/register.php"> Register now</a>
					</div>
					

				</div>
				<div class ="col-3">

					
					<?php

				// first method 
					// $fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					// if(strpos($fullUrl,"signup=empty") == true){
					// echo	'<div class="bg-success text-white" >
 					// 		 The signup fields are empty!
					// 	</div>';
					// 	// exit();
					// }elseif(strpos($fullUrl,"signup=notmatch") == true){ 	
					// echo	'<div class="bg-success text-white" >
 					// 		 Your username and/or password does not match!
					// 	</div>';
					// 	//exit();
					// }elseif(strpos($fullUrl,"signup=notactive") == true){
					// 	echo	'<div class="bg-success text-white" >
 					// 		Your account has not been activated!
					// 	</div>';
					// 	// exit();
					// }


				// Second method
						if(isset($_GET['signup'])){
							$signupcheck = $_GET['signup'];
							if($signupcheck == "empty"){
								echo	'<div class="bg-success text-white" >
	 					 		 		The signup fields are empty!
						 				</div>';
							} elseif($signupcheck == "notmatch"){
								echo	'<div class="bg-success text-white" >
	 					 		 		 Your username and/or password does not match!
						 				</div>';
							}elseif($signupcheck == "notactive"){
								echo	'<div class="bg-success text-white" >
	 					 		 		Your account has not been activated!
						 				</div>';
							}

						}	

					?>

				</div>	
				
			</div>
			
		
		</div>
		
	
	
	<?php require "include/footer.php";?>	

	<?php
    unset($_SESSION["error"]);
?>