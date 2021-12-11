<?php require "include/headerlogin.php"; ?>
		<div class="container mt-4">
			<div class="col-md-6 card-body border">
			<h3>Register</h3>
            <form  method="POST" action="admin/insertuser.php" class="row g-3">
              <div class="form-group col-md-9">
                <label for="inputName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="inputfame" name="fname" placeholder="First name">
              </div>
              <div class="form-group col-md-9">
                <label for="inputName" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="inputmame" name="mname" placeholder="Middle name">
              </div>
              <div class="form-group col-md-9">
                <label for="inputName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="inputlame" name="lname" placeholder="Last name">
              </div>
              <div class="form-group col-md-9">
                <label for="inputEmail4" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="form-group col-md-9">
                <label for="inputContact" class="form-label">Contact No.</label>
                <input type="text" class="form-control" id="inputContact" name="contact">
              </div>
              <div class="form-group col-md-9">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
              </div>
              <div class="form-group col-md-9">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" name="city" placeholder="London">
              </div>
              
              <div class="form-group col-md-9 visually-hidden">
                <label for="inputCity" class="form-label">Role</label>
                <select class="form-select" aria-label="Default select example" name="role">
                    <option value="CUSTOMER" selected>CUSTOMER</option>
                </select>
              </div>

              <div class="form-group col-md-9">
                <label for="inputUserName" class="form-label">User Name</label>
                <input type="text" class="form-control" id="inputUserName" name="username">
              </div>
              <div class="form-group col-md-9">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter password">
              </div>
              <div class="form-group col-md-9">
                <label for="inputPassword4" class="form-label">Retype Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="retypepassword" placeholder="Retype password">
              </div>
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary mt-4 bg-warning text-dark">REGISTER</button>
              </div>

              
            </form>
      </div>







			 
		</div>	
	<?php require "include/footer.php";?>