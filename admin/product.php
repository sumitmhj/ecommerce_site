
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
      		<h3 class = "col-md-3">Product Table</h3>
      		<div class = "col-md-2 offset-md-4">
      			<button type="button" class="btn btn-warning col-md-9 offset-md-4">
        		<a class ="text-decoration-none text-dark" href="http://localhost/Bootstraps/admin/addproduct.php" role="button">Add Product</a>
      		</button>
      		</div>
      		
    	</div>

		<table class="table">
			<thead>
				<tr>
				  <th scope="col">#</th>
			      <th scope="col">Product Name</th>
			      <th scope="col">Discount</th>
			      <th scope="col">Price</th>
			      <th scope="col">Size</th>
			      <th scope="col">Stock</th>
			      <th scope="col">Color</th>
			      <th scope="col">Material</th>
			      <th scope="col">Category</th>
			      <th scope="col">isOffer</th>
			      <th scope="col">Brand New</th>
                  <th scope="col">Description</th>
			      <th scope="col">Action</th>
				</tr>
			</thead>
  			<tbody>

                 <?php
                    require 'connection.php';
                    // $sql = "select * from productitem";
                    $sql = "select productitem.id, productitem.pname, productitem.description, productitem.size, productitem.stock,  productitem.discount, productitem.price, productitem.color, productitem.brandnew, productitem.specialoffer, productitem.material, category.name  from productitem inner join category on productitem.category_id = category.id";
                    $result = $conn-> query($sql);

                    $limit= 5; 

                    $total_rows = mysqli_num_rows($result); //new
                   
                    $total_pages = ceil($total_rows / $limit); //new
                   
                    if (!isset ($_GET['page'])){
                      $page = 1;
                    }else{
                      $page= $_GET['page'];
                    } 

                    $initial_page = ($page-1)* $limit;
                  
                    $getQuery = "select productitem.id, productitem.pname, productitem.description, productitem.size, productitem.stock,  productitem.discount, productitem.price, productitem.color, productitem.brandnew, productitem.specialoffer, productitem.material, category.name  from productitem inner join category on productitem.category_id = category.id LIMIT " .$initial_page.', '.$limit;

                     $result = mysqli_query($conn, $getQuery);

                    if($result -> num_rows >0){
                        while($row = $result->fetch_assoc()){
                        	STATIC $count = 0;
                          	$count++;
                            ?>
              
                  <th scope="col"><?php echo $count; ?></th>
                  <th scope="col"><?php echo $row["pname"]; ?></th>
                  <th scope="col"><?php echo $row["discount"]; ?></th>
                  <th scope="col"><?php echo $row["price"]; ?></th>
                  <th scope="col"><?php echo $row["size"]; ?></th>
                  <th scope="col"><?php echo $row["stock"]; ?></th>
                  <th scope="col"><?php echo $row["color"]; ?></th>
                  <th scope="col"><?php echo $row["material"]; ?></th>
                  <th scope="col"><?php echo $row["name"]; ?></th>
                  <th scope="col"><?php echo $row["specialoffer"]; ?></th>
                  <th scope="col"><?php echo $row["brandnew"]; ?></th>
                  <th scope="col"><?php echo $row["description"]; ?></th>
                  <th scope="col" class="col-2 justify-content-between">
                  	<button type="button" class="btn btn-warning col-md-5 ">
                        <a class ="text-decoration-none text-dark" href="editproduct.php?id=<?php echo $row["id"];?>" role="button" >Edit</a>
                    </button>

                    <button type="button" class="btn btn-warning col-md-6 ">
                        <a class ="text-decoration-none text-dark" href ="deleteproduct.php?id=<?php echo $row["id"];?>" role = "button">Delete</a>
                    </button>

                  </th>
    			</tr>
    
                 <?php  }  }  ?>
    
  			</tbody>
		</table>
          <?php
       for($p = 1; $p <= $total_pages; $p++){ 
        echo '<a href = "product.php?page='.$p.'">'.$p.'</a>';
      }
        ?>
	</div>

<?php require "../include/footer.php";?>	