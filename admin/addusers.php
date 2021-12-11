<?php 
session_start();
if(!isset($_SESSION['firstname'])){ //if login in session is not set
    // header("Location: http://www.example.com/login.php");
    header("Location: http://localhost/Bootstraps/login.php");
}

if($_SESSION['role'] == "CUSTOMER"){
  header("Location: http://localhost/Bootstraps/index.php");
}
?>

<?php require "../include/header.php"; ?>
	<div class="container mt-4">
    <h3>Add Users</h3>
      <div class="col-md-6 card-body border">
            <form  method="POST" action="insertuser.php" class="row g-3">
              <div class="col-md-9">
                <label for="inputName" class="form-label">First Name</label>
                <input type="text" class="form-control" id="inputfame" name="fname">
              </div>
              <div class="col-md-9">
                <label for="inputName" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="inputmame" name="mname">
              </div>
              <div class="col-md-9">
                <label for="inputName" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="inputlame" name="lname">
              </div>
              <div class="col-md-9">
                <label for="inputEmail4" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="inputEmail4" name="email">
              </div>
              
              
              <div class="col-md-9">
                <label for="inputContact" class="form-label">Contact No.</label>
                <input type="text" class="form-control" id="inputContact" name="contact">
              </div>
              <div class="col-md-9">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">
              </div>
              <div class="col-md-9">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity" name="city">
              </div>
              
              <div class="col-md-9">
                <label for="inputCity" class="form-label">Role</label>
                <select class="form-select" aria-label="Default select example" name="role">
                    <option selected>SELECT</option>
                    <option value="ADMIN">ADMIN</option>
                    <option value="STAFF">STAFF</option>
                    <option value="CUSTOMER">CUSTOMER</option>
                </select>
              </div>

              <div class="col-md-9">
                <label for="inputUserName" class="form-label">User Name</label>
                <input type="text" class="form-control" id="inputUserName" name="username">
              </div>
              <div class="col-md-9">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password">
              </div>
              <div class="col-md-9">
                <label for="inputPassword4" class="form-label">Retype Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="retypepassword">
              </div>
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>

              
            </form>
      </div>
	</div>

<?php require "../include/footer.php";?>	