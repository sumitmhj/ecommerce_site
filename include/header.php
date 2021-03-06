<!DOCTYPE html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<!-- <link href="bootstrap-icons-1.7.1/fonts/bootstrap-icons.woff" rel="stylesheet">

		<link href="bootstrap-icons-1.7.1/fonts/bootstrap-icons.woff2" rel="stylesheet"> -->

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
	</head>
	<body>
		<!-- <h1> This is Head 1</h1>
				<h2>This is head 2</h2> -->

		<div class="container-fluid">

				<div class="container">
					<div class="row g-3">
						<div class="col-md-3 g-4">
								<h3>STROYKA</h3>
						</div>
						<form class="row col-md-7 g-3">
			  				<div class="col-md-5">
			  					<select class="form-select col-md-3 p-2" id="select categories" aria-label="Default select example">
										<option selected> All Categories</option>
										<option value="1">Instruments</option>
										<option>&nbsp;&nbsp;&nbsp;&nbsp;Power Tools</option>
										<option>&nbsp;&nbsp;&nbsp;&nbsp;Hand Tools</option>
										<option>&nbsp;&nbsp;&nbsp;&nbsp;Machine Tools</option>
										<option>&nbsp;&nbsp;&nbsp;&nbsp;Power Machinery</option>
										<option>&nbsp;&nbsp;&nbsp;&nbsp;Measurements</option>
										<option>&nbsp;&nbsp;&nbsp;&nbsp;Clothes and PPE</option>
										<option value="2">Electronics</option>
										<option value="3">Computer</option>
										<option value="4">Automotive</option>
										<option value="5">Furniture and Appliance</option>
										<option value="6">Music and Books</option>
										<option value="6">Health and Beauty</option>
									</select>
			  				</div>
			  				<div class="col-md-6">
			    				<input type="text" class="form-control p-2" id="input search" placeholder="Search over 10,000 products">
			  				</div>
			 					<button class="col-md-1 btn-sm bg-light border" type="submit" role="button">
			 						<i class="bi bi-search"></i>
			  				</button>
						</form>
						<div class="col-md-2 g-4 text-end">
							<div>Customer Service</div>
							<div class="text-dark">(800) 060-0730</div>
						</div>
					</div>
				</div>

					<nav class="navbar bg-warning navbar-expand-lg mt-4 ">
					  	<div class="container">
	   		 			
	    				<div class="navbar-collapse" id="navbarSupportedContent">

	    					<ul class="navbar-nav me-auto mb-lg-0">
	    						<li class="nav-item">
	       						<a class="nav-link link-dark" href="http://localhost/Bootstraps/index.php">Home</a>
	      					</li>
	      					<li class="nav-item">
	       						<a class="nav-link link-dark" href="#">Megamenu</a>
	      					</li>
	      					<li class="nav-item">
	       						<a class="nav-link link-dark" href="#">Shop</a>
	      					</li>
	      					<li class="nav-item">
	       						<a class="nav-link link-dark" href="#">Account</a>
	      					</li>
	      					<li class="nav-item">
	       						<a class="nav-link link-dark" href="#">Blog</a>
	      					</li>
	        				<li class="nav-item dropdown">
	       						<a class="nav-link dropdown-toggle link-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	     								       Page
	    							</a>
	     							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
	      							<li><a class="dropdown-item link-dark" href="#">Action</a></li>
	      							<li><a class="dropdown-item link-dark" href="#">Another action</a></li>
	           					<li><hr class="dropdown-divider"></li>
	          					<li><a class="dropdown-item link-dark" href="#">Something else here</a></li>
	          				</ul>
	          				<?php if($_SESSION['role'] == "ADMIN" || $_SESSION['role'] == "STAFF"){ ?>
	          					
	        				</li>
	        				<li class="nav-item">
	       						<a class="nav-link link-dark" href="http://localhost/Bootstraps/admin/users.php">Users</a>
	      					</li>
	      					<li class="nav-item">
	       						<a class="nav-link link-dark" href="http://localhost/Bootstraps/admin/product.php">Product</a>
	      					</li>
	      					<?php  }?>
	      					</ul>

	      				<div class="row">
	      					<button class="col-md-6 link-dark bg-warning border-0">
	      						<a href="#" class="link-dark">
	      							<i class="bi bi-cart3"></i>
	      						</a>
	      					</button>
	      				
	      				
	      					<div class="dropdown col-md-6">
	  								<button class="btn bg-warning btn-secondary dropdown-toggle link-dark border-0" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
	   								<i class="bi bi-person link-dark"></i>
	 								</button>
	  									<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
	    									<li><a class="dropdown-item" href="#">Profile</a></li>
	   								 		<li><a class="dropdown-item" href="http://localhost/Bootstraps/logout.php">Sign out</a></li>
	  									</ul>
							</div>
						</div>	

	 					</div>
	 						</div>			
					</nav>