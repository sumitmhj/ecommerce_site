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

// $query = "select * from productitem where id = {$id}";
$query = "select productitem.id, productitem.pname as pdname, productitem.description, productitem.size,  productitem.discount, productitem.price, productitem.color, productitem.stock, productitem.brandnew, productitem.specialoffer, productitem.material, category.name as ctname  from productitem inner join category on productitem.category_id = category.id where productitem.id ={$id}";
$result = $conn->query($query);
$row = $result->fetch_assoc();
?>
<div class="container mt-4">
    <h3>Edit Users</h3>

    <div class="col-md-6 card-body border">

<form  method ="POST" action = "updateproduct.php?id=<?php echo $row["id"]?>" class ="row g-3">
    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Product Name</label>
    <input type = "text" class="form-control" name = "pname" value="<?php echo $row['pdname'] ?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Description</label>
    <input type = "text" class="form-control" name = "description" value = "<?php echo $row["description"] ?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Discount</label>
    <input type = "text" class="form-control" name = "discount" value = "<?php echo $row["discount"]?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Current Price</label>
    <input type = "text" class="form-control" name = "price" value = "<?php echo $row["price"]?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Size</label>
    <input type = "text" class="form-control" name = "size" value = "<?php echo $row["size"]?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Stock</label>
    <input type = "text" class="form-control" name = "stock" value = "<?php echo $row["stock"]?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Color</label>
    <input type = "text" class="form-control" name = "color" value = "<?php echo $row["color"]?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Material</label>
    <input type = "text" class="form-control" name = "material" value = "<?php echo $row["material"]?>">
    </div>
    

     <div class="col-md-9">
                <label for="inputCategory" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="category_id">
                    <option >MENU</option>
                    <?php
                    
                    $sql = "select * from category";
                    
                    $res = $conn-> query($sql);

                    if($res -> num_rows >0){
                        while($cat = $res->fetch_assoc()){
                                ?>
                        <option value="<?php echo $cat["id"]; ?>" 
                            <?php if($cat["name"] === $row["ctname"])
                            {
                                echo "selected";
                            }

                             ?>><?php echo $cat["name"]; ?></option>         
                      <?php  }  }  ?>
                </select>
              </div>
    





   

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Brand New</label>
    <input type = "text" class="form-control" name = "brandnew" value = "<?php echo $row["brandnew"]?>">
    </div>

    <div class = "col-md-9">
    <label for = "aaa" class="form-label">Special Offer</label>
    <input type = "text" class="form-control" name = "specialoffer" value = "<?php echo $row["specialoffer"]?>">
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
</div>
</div>

  

