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
                <?php
                  if(isset($_GET['fname']) ){
                    $fname = $_GET['fname'];
                    if($fname == 'emt' || $fname == 'er'){
                      echo '<input type="text" class="form-control" id="inputfame" name="fname" placeholder="First name" >';
                      }else{
                        echo '<input type="text" class="form-control" id="inputfame" name="fname" placeholder="First name" value ="'.$fname.'" >';
                      }  
                    }else{
                      echo '<input type="text" class="form-control" id="inputfame" name="fname" placeholder="First name">';
                     }


                  if(isset($_GET['fname']) ){
                    if($_GET['fname']=='emt'){
                      echo '<p class="text-danger">Please enter your first name!</p>';
                      }elseif($_GET['fname']== 'er'){
                        echo '<p class="text-danger">Please enter Characters only!</p>';
                      }
                    }
                ?>
              </div>
              <div class="col-md-9">
                <label for="inputName" class="form-label">Middle Name</label>
               <?php
                  if(isset($_GET['mname'])){
                    $mname = $_GET['mname'];
                    if($mname == 'emt' || $mname == 'er'){
                      echo '<input type="text" class="form-control" id="inputmname" name="mname" placeholder="Middle name" >';
                      }else{
                        echo '<input type="text" class="form-control" id="inputmname" name="mname" placeholder="Middle name" value ="'.$mname.'" >';
                      }
                      
                    }else{
                      echo '<input type="text" class="form-control" id="inputmname" name="mname" placeholder="Middle name">';
                     }

                  if(isset($_GET['mname'])){
                    $fempty = $_GET['mname'];
                    if($fempty == 'er'){
                      echo '<p class="text-danger">Please enter Characters only!</p>';
                    }
                  }   
                 ?>
              </div>
              <div class="col-md-9">
                <label for="inputName" class="form-label">Last Name</label>
                <?php
                  if(isset($_GET['lname'])){
                    $lname = $_GET['lname'];
                    if($lname == 'emt' || $lname == 'er'){
                      echo '<input type="text" class="form-control" id="inputlname" name="lname" placeholder="Last name" >';
                      }else{
                        echo '<input type="text" class="form-control" id="inputlname" name="lname" placeholder="Last name" value ="'.$lname.'" >';
                      }  
                    }else{
                      echo '<input type="text" class="form-control" id="inputlname" name="lname" placeholder="Last name">';
                     }
                 

                  if(isset($_GET['lname'])){
                    $fempty = $_GET['lname'];
                    if($fempty == 'emt'){
                      echo '<p class="text-danger">Please enter your last name!</p>';
                    }elseif($fempty == 'er'){
                      echo '<p class="text-danger">Please enter Characters only!</p>';
                    }
                  }
                ?>
              </div>
              <div class="col-md-9">
                <label for="inputEmail4" class="form-label">Email Address</label>
                <?php
                  if(isset($_GET['email'])){
                    $email = $_GET['email'];
                    if($email == 'emt' || $email == 'er'){
                      echo '<input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter email" >';
                      }else{
                        echo '<input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter email" value ="'.$email.'" >';
                      }  
                    }else{
                      echo '<input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Enter email">';
                     }
                 ?>
                 <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                 <?php

                  if(isset($_GET['email'])){
                    $fempty = $_GET['email'];
                    if($fempty == 'emt'){
                      echo '<p class="text-danger">Please enter your email!</p>';
                    }elseif($fempty == 'er'){
                      echo '<p class="text-danger">Please enter valid email only!</p>';
                    }
                  }
                ?>
              </div>

              <div class="col-md-9">
                <label for='gender' class="form-label">Gender</label>
                <?php
                    if(isset($_GET['gender'])){
                      $gender = $_GET['gender'];
                      if($gender == 'emt'){
                        echo '<div class="form-check">
                                <input class="form-check-input" type="radio" value="M" name="gender">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Male
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" value="F" name="gender">
                                <label class="form-check-label" for="flexCheckChecked">
                                     Female
                                </label>
                              </div>';
                        }else{
                  ?>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="M" name="gender">
                    <label class="form-check-label" for="flexCheckDefault" <?php if(($_GET['gender']) === 'M'){echo 'checked';} ?>>
                        Male
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="F" name="gender">
                    <label class="form-check-label" for="flexCheckChecked" <?php if(($_GET['gender']) === 'F'){echo 'checked';} ?>>
                         Female
                    </label>
                  </div>       
                  <?php
                      }  
                    }else{
                     echo '<div class="form-check">
                                <input class="form-check-input" type="radio" value="M" name="gender">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Male
                                </label>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="radio" value="F" name="gender">
                                <label class="form-check-label" for="flexCheckChecked">
                                     Female
                                </label>
                              </div>'; 
                    }
                    if(isset($_GET['gender'])){
                      $fempty = $_GET['gender'];
                      if($fempty == 'emt'){
                        echo '<p class="text-danger">Please select gender!</p>';
                      }
                    }
                  ?>
              </div>
              
              
              <div class="col-md-9">
                <label for="inputContact" class="form-label">Contact No.</label>
                <?php
                  if(isset($_GET['contact'])){
                    $contact = $_GET['contact'];
                    if($contact == 'emt' || $contact == 'er'){
                      echo '<input type="text" class="form-control" id="inputContact" name="contact">';
                      }else{
                        echo '<input type="text" class="form-control" id="inputContact" name="contact" value ="'.$contact.'" >';
                      }
                      
                    }else{
                      echo '<input type="text" class="form-control" id="inputContact" name="contact">';
                     }

                  if(isset($_GET['contact'])){
                    $fempty = $_GET['contact'];
                    if($fempty == 'emt'){
                      echo '<p class="text-danger">Please fill contact number!</p>';
                    }
                  }   
                 ?>
              </div>
              <div class="col-md-9">
                <label for="inputAddress" class="form-label">Address</label>
                <?php
                  if(isset($_GET['address'])){
                    $address = $_GET['address'];
                    if($address == 'emt'){
                      echo '<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" >';
                      }else{
                        echo '<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value ="'.$address.'" >';
                      }
                      
                    }else{
                      echo '<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address">';
                     }

                  if(isset($_GET['address'])){
                    $fempty = $_GET['address'];
                    if($fempty == 'emt'){
                      echo '<p class="text-danger">Please fill address!</p>';
                    }
                  }   
                 ?>
              </div>
              <div class="col-md-9">
                <label for="inputCity" class="form-label">City</label>
                <?php
                  if(isset($_GET['city'])){
                    $city = $_GET['city'];
                    if($city == 'emt'){
                      echo '<input type="text" class="form-control" id="inputCity" placeholder="London" name="city" >';
                      }else{
                        echo '<input type="text" class="form-control" id="inputCity" placeholder="London" name="city" value ="'.$city.'" >';
                      }
                      
                    }else{
                      echo '<input type="text" class="form-control" id="inputCity" placeholder="London" name="city">';
                     }

                  if(isset($_GET['city'])){
                    $fempty = $_GET['city'];
                    if($fempty == 'emt'){
                      echo '<p class="text-danger">Please fill city!</p>';
                    }
                  }   
                 ?>
              </div>
              
              <div class="col-md-9">
                <label for="inputCity" class="form-label">Role</label>
                <select class="form-select" aria-label="Default select example" name="role">
                    <option selected>SELECT</option>
                    <option value="ADMIN">ADMIN</option>
                    <option value="STAFF">STAFF</option>
                    <option value="CUSTOMER">CUSTOMER</option>
                </select>
                <?php
                if(isset($_GET['role']) ){
                    if($_GET['role']== 'er'){
                        echo '<p class="text-danger">Please select role!</p>';
                      }
                    }
                ?>
              </div>

              <div class="col-md-9">
                <label for="isactive" class="form-label">Is Active</label>
                 <select class="form-select" aria-label="Default select example" name="isactive">
                    <option selected>SELECT</option>
                    <option value="1">YES</option>
                    <option value="0">NO</option>
                </select>
                 <?php
                if(isset($_GET['isactive']) ){
                    if($_GET['isactive']== 'er'){
                        echo '<p class="text-danger">Please select isactive!</p>';
                      }
                    }
                ?>
              </div>

              <div class="col-md-9">
                <label for="inputUserName" class="form-label">User Name</label>
                <?php
                  if(isset($_GET['username'])){
                    $username = $_GET['username'];
                    if($username == 'emt'){
                      echo '<input type="text" class="form-control" id="inputUserName" name="username" >';
                      }else{
                        echo '<input type="text" class="form-control" id="inputUserName" name="username" value ="'.$username.'" >';
                      }
                      
                    }else{
                      echo '<input type="text" class="form-control" id="inputUserName" name="username">';
                     }

                  if(isset($_GET['username'])){
                    $fempty = $_GET['username'];
                    if($fempty == 'emt'){
                      echo '<p class="text-danger">Please fill username!</p>';
                    }
                  }   
                 ?>
              </div>
              <div class="col-md-9">
                <label for="inputPassword4" class="form-label">Password</label>
                <?php
                  if(isset($_GET['password'])){
                    $password = $_GET['password'];
                    
                      echo '<input type="password" class="form-control" id="inputPassword" placeholder="Enter password" name="password" >';
                    }else{
                      echo '<input type="password" class="form-control" id="inputPassword" placeholder="Enter password" name="password" >';
                    }
                     
                  if(isset($_GET['password'])){
                    $fempty = $_GET['password'];
                    if($fempty == 'emt'){
                      echo '<p class="text-danger">Please fill password!</p>';
                    }
                  }   
                 ?>
              </div>
              <div class="col-md-9">
                <label for="inputPassword4" class="form-label">Retype Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="retypepassword">
              </div>

              <input type="hidden"  name="checkurl" value ="add"  >
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>

              
            </form>
      </div>
	</div>

<?php require "../include/footer.php";?>	