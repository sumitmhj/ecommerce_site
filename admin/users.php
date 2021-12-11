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

    <div class ="row justify-content-between">
      <h3 class = "col-md-2">User List</h3>
       <?php if($_SESSION['role'] == "ADMIN"){ ?>
      <div class = "col-md-2 offset-md-4">
          <button type="button" class="btn btn-warning col-md-9 offset-md-4">
            <a class ="text-decoration-none text-dark" href="http://localhost/Bootstraps/admin/addusers.php" role="button">Add Users</a>
          </button>
      </div>
      <?php } ?>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Full Name</th>
          <th scope="col">Email</th>
          <th scope="col">User name</th>
          <th scope="col">Contact No</th>
          <th scope="col">Address</th>
          <th scope="col">City</th>
          <th scope="col">Role</th>
          <th scope="col">Is Active</th>
          <?php if($_SESSION['role'] == "ADMIN"){ ?>
          <th scope="col" class="text-center">Action</th>  
          <?php } ?>
          
        </tr>
      </thead>
      <tbody>
        <?php
                    require 'connection.php';
                    $sql = "select * from users";

                    $result = $conn-> query($sql);

                    if($result -> num_rows >0){
                        while($row = $result->fetch_assoc()){
                          STATIC $count = 0;
                          $count++;
                            ?>
              
                  <th scope="col"><?php echo $count; ?></th>
                  <th scope="col"><?php echo $row["fname"]." ".$row["mname"]." ".$row["lname"]; ?></th>
                  <th scope="col"><?php echo $row["email"]; ?></th>
                  <th scope="col"><?php echo $row["username"]; ?></th>
                  <th scope="col"><?php echo $row["contact"]; ?></th>
                  <th scope="col"><?php echo $row["address"]; ?></th>
                  <th scope="col"><?php echo $row["city"]; ?></th>
                  <th scope="col"><?php echo $row["role"]; ?></th>
                  <th scope="col"><?php echo $row["isactive"]; ?></th>
                  <?php if($_SESSION['role'] == "ADMIN"){ ?>
                  <th scope="col" class="col-2 justify-content-between">
                    <button type="button" class="btn btn-warning col-4 offset-md-1">
                        <a class ="text-decoration-none text-dark" href="editusers.php?id=<?php echo $row["id"];?>" role="button" >Edit</a>
                    </button>

                    <button type="button" class="btn btn-warning col-5 offset-md-1">
                        <a class ="text-decoration-none text-dark" href ="deleteusers.php?id=<?php echo $row["id"];?>" role = "button">Delete</a>
                    </button>
                  
                  </th>
                   <?php } ?>
          </tr>
    
                 <?php  } }  ?>


       
      </tbody>
    </table>
	</div>

<?php require "../include/footer.php";?>	