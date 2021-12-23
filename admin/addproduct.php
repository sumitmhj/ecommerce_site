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
      <h3>Add Product</h3>
      <div class="col-md-6 card-body border">
            <form action="insertproduct.php" method="POST" class="row g-3">
              <div class="col-md-9">
                <label for="inputProductName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="inputProductName" name="pname">
              </div>
              <div class="col-md-9">
                <label for="inputDescription" class="form-label">Description</label>
                <input type="text" class="form-control" id="inputDescription" name="description">
              </div>
                <div class="col-md-9">
                  <label for="inputPreviousPrice" class="form-label">Discount</label>
                  <input type="text" class="form-control" id="inputPreviousPrice" name="discount">
                </div>
              <div class="col-md-9">
                <label for="inputCurrentPrice" class="form-label">Current Price</label>
                <input type="text" class="form-control" id="price" name="price">
              </div>
              <div class="col-md-9">
                <label for="inputCurrentPrice" class="form-label">Size</label>
                <input type="text" class="form-control" id="inputCurrentPrice" name="size">
              </div>
              <div class="col-md-9">
                <label for="inputCurrentPrice" class="form-label">Stock</label>
                <input type="text" class="form-control" id="inputCurrentPrice" name="stock">
              </div>
              <div class="col-md-9">
                <label for="inputColor" class="form-label">Color</label>
                <input type="text" class="form-control" id="inputColor" name="color">
              </div>
              <div class="col-md-9">
                <label for="inputMaterial" class="form-label">Material</label>
                <input type="text" class="form-control" id="inputMaterial" name="material">
              </div>
              <div class="col-md-9">
                <label for="inputMaterial" class="form-label">Brand New</label>
                <input type="text" class="form-control" id="inputMaterial" name="new">
              </div>
              <div class="col-md-9">
                <label for="inputMaterial" class="form-label">Special Offer</label>
                <input type="text" class="form-control" id="inputMaterial" name="offer">
              </div>

              <div class="col-md-9">
                <label for="inputCategory" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="category">
                    <option selected>Menu</option>
                    <?php
                    require 'connection.php';
                    $sql = "select * from category";
                    
                    $result = $conn-> query($sql);

                    if($result -> num_rows >0){
                        while($row = $result->fetch_assoc()){
                                ?>
                        <option value="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?></option>         
                      <?php  }  }  ?>
                </select>
              </div>

              <!-- <input type="hidden" name="id1" value = "<?php echo $_SESSION["id"];?> ">  -->
              <!-- new codes --> 

              <div class="col-12">
                <button type="submit" class="btn btn-primary">Add</button>
              </div>

              
            </form>
      </div>
	</div>

<?php require "../include/footer.php";?>	