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
								<input type="email" class="form-control" placeholder="Enter email" name="email">
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
				
			</div>
		</div>
	
	<?php require "include/footer.php";?>	