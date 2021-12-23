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
      <h3 class = "col-md-3">Active User List</h3>
       <?php if($_SESSION['role'] == "ADMIN"){ ?>
      <div class = "col-md-3">
          <button type="button" class="btn btn-warning col-md-5 ">
            <a class ="text-decoration-none text-dark" href="http://localhost/Bootstraps/admin/addusers.php" role="button">Add Users</a>
          </button>

          <button type="button" class="btn btn-primary col-md-6">
            <a class ="text-decoration-none text-white" href="http://localhost/Bootstraps/admin/inactiveusers.php" role="button">Inactive Users</a>
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
          <th scope="col">M/F</th>
          <th scope="col">User name</th>
          <th scope="col">Contact No</th>
          <th scope="col">Address</th>
          <th scope="col">City</th>
          <th scope="col">Role</th>
          <!-- <th scope="col">Is Active</th> -->
          <?php if($_SESSION['role'] == "ADMIN"){ ?>
          <th scope="col" class="text-center">Action</th>  
          <?php } ?>
          
        </tr>
      </thead>
      <tbody>
        <?php
                    require 'connection.php';
                    $sql = "select * from users where isactive = 1";

                    $result = $conn-> query($sql);

                    $limit= 10; 

                    $total_rows = mysqli_num_rows($result); //new
                   
                    $total_pages = ceil($total_rows / $limit); //new
                   
                    if (!isset ($_GET['page'])){
                      $page = 1;
                    }else{
                      $page= $_GET['page'];
                    } 

                    $initial_page = ($page-1)* $limit;
                  
                    $getQuery = "select * from users where isactive = 1 LIMIT " .$initial_page.', '.$limit;

                    echo $getQuery;

                     $result = mysqli_query($conn, $getQuery);

                    if($result -> num_rows >0){
                        while($row = $result->fetch_assoc()){
                          STATIC $count = 0;
                          $count++;
                            ?>
              
                  <th scope="col"><?php echo $count; ?></th>
                  <th scope="col"><?php echo $row["fname"]." ".$row["mname"]." ".$row["lname"]; ?></th>
                  <th scope="col"><?php echo $row["email"]; ?></th>
                  <th scope="col"><?php echo $row["gender"]; ?></th>
                  <th scope="col"><?php echo $row["username"]; ?></th>
                  <th scope="col"><?php echo $row["contact"]; ?></th>
                  <th scope="col"><?php echo $row["address"]; ?></th>
                  <th scope="col"><?php echo $row["city"]; ?></th>
                  <th scope="col"><?php echo $row["role"]; ?></th>
                  <!-- <th scope="col"><?php echo $row["isactive"]; ?></th> -->
                  <?php if($_SESSION['role'] == "ADMIN"){ ?>
                  <th scope="col" class="col-3 justify-content-between">
                    <button type="button" class="col btn btn-warning offset-md-1">
                        <a class ="text-decoration-none text-dark" href="editusers.php?id=<?php echo $row["id"];?>" role="button" >Edit</a>
                    </button>

                    <button type="button" class="col btn btn-warning">
                        <a class ="text-decoration-none text-dark" href ="deleteusers.php?id=<?php echo $row["id"];?>" role = "button">Delete</a>
                    </button>
                  
                    <button type="button" class="col btn btn-warning">
                        <a class ="text-decoration-none text-dark" href ="useraction.php?id=<?php echo $row["id"]?>&action=deactivate" role = "button">Inactivate</a>
                    </button>
                  </th>  
                   <?php } ?>
          </tr>
    
                 <?php  } }  ?>


       
      </tbody>
    </table>

     <?php
       for($p = 1; $p <= $total_pages; $p++){ 
        echo '<a href = "users.php?page='.$p.'">'.$p.'</a>';
      }
        ?>
	</div>

<?php require "../include/footer.php";?>	