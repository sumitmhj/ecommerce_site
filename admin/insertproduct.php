<?php
	require "../connection.php";

	$productname = $_POST['pname'];
	$description = $_POST['description'];
	$discount = $_POST['discount'];
	$price  = $_POST['price'];
	$size = $_POST['size'];
	$stock = $_POST['stock'];
	$color = $_POST['color'];
	$material  = $_POST['material'];
	$brandnew = $_POST['new'];
	$specialoffer  = $_POST['offer'];
	$category  = $_POST['category'];
	// $id = $_POST['id1'];



	$query = "insert into productitem(pname, description, discount, price, size, color, material, category_id, brandnew, specialoffer, stock, user_id) values('$productname', '$description', '$discount', '$price', '$size', '$color', '$material', '$category', '$brandnew', '$specialoffer', '$stock','$_SESSION["id"]')";

	$run = mysqli_query($conn, $query) or die(mysqli_error($conn));

	if($run){
    echo "Data inserted";
    // header("Location: http://localhost/Bootstraps/index.php");
    header("Location:http://localhost/Bootstraps/admin/addproduct.php");
	}else{
    echo "Unable to insert data";
	}

?>
