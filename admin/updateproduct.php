

<?php
require "connection.php";

$id = $_GET["id"];

    $productname = $_POST['pname'];
    $description = $_POST['description'];
    $discount = $_POST['discount'];
    $price  = $_POST['price'];
    $size = $_POST['size'];
    $stock = $_POST['stock'];
    $color = $_POST['color'];
    $material  = $_POST['material'];
    $brandnew = $_POST['brandnew'];
    $specialoffer  = $_POST['specialoffer'];
    $category_id  = $_POST['category_id'];

$query = "update productitem set pname = '".$productname."', description = '".$description."', discount = '".$discount."', price = '".$price."', size = '".$size."', stock = '".$stock."', color = '".$color."', material = '".$material."', brandnew = '".$brandnew."', specialoffer = '".$specialoffer."', category_id = '".$category_id."' where id = ".$id;
echo $query;

$run = mysqli_query($conn,$query) or die(mysqli_error());

if($run){
    echo "Data Updated";
    header("Location: http://localhost/Bootstraps/admin/product.php");
}else{
    echo "Unable to update data";
}

?>


