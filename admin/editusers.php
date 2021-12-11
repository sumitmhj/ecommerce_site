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


<?php

require 'connection.php';
$id = $_GET["id"];

$query = "select * from users where id = {$id}";
$result = $conn->query($query);
$row = $result->fetch_assoc();
?>
<div class="container mt-4">
    <h3>Edit Users</h3>

    <div class="col-md-6 card-body border">

<form  method ="POST" action = "updateusers.php?id=<?php echo $row["id"]?>" class ="row g-3">
    <div class = "col-md-9">
    <label for = "aaa" class="form-label">First Name</label>
    <input type = "text" class="form-control" name = "fname" value="<?php echo $row['fname'] ?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Middle Name</label>
    <input type = "text" class="form-control" name = "mname" value = "<?php echo $row["mname"] ?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Last Name</label>
    <input type = "text" class="form-control" name = "lname" value = "<?php echo $row["lname"]?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Email Address</label>
    <input type = "text" class="form-control" name = "email" value = "<?php echo $row["email"]?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">User name</label>
    <input type = "text" class="form-control" name = "username" value = "<?php echo $row["username"]?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Password</label>
    <input type = "password" class="form-control" name = "password" value = "">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Contact No</label>
    <input type = "text" class="form-control" name = "contact" value = "<?php echo $row["contact"]?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Address</label>
    <input type = "text" class="form-control" name = "address" value = "<?php echo $row["address"]?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">City</label>
    <input type = "text" class="form-control" name = "city" value = "<?php echo $row["city"]?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Role</label>
    <select class="form-select" aria-label="Default select example" name="role">
                    <option>SELECT</option>
                    <option value="ADMIN" <?php if($row["role"] === "ADMIN")
                            {
                                echo "selected";
                            } ?>>ADMIN</option>
                    <option value="STAFF" <?php if($row["role"] === "STAFF")
                            {
                                echo "selected";
                            } ?>>STAFF</option>
                    <option value="CUSTOMER" <?php if($row["role"] === "CUSTOMER")
                            {
                                echo "selected";
                            } ?>>CUSTOMER</option>
                </select>
   <!--  <input type = "text" class="form-control" name = "role" value = "<?php echo $row["role"]?>"> -->
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Is Active</label>
    <input type = "text" class="form-control" name = "isactive" value = "<?php echo $row["isactive"]?>">
    </div>


    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
</div>
</div>

<?php require "../include/footer.php";?>    

