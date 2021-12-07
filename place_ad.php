<?php

include ("connection.php");

session_start();

if(!isset($_SESSION["input"])){
    die("Error: You need to login first");
}

//get user_id for the user
$input_query = "SELECT user_id FROM users WHERE username = ? or email = ?";
$input_stmt = $connection->prepare($input_query);
$input_stmt->bind_param("ss", $_SESSION["input"], $_SESSION["input"]);
$input_stmt->execute();

$input_results = $input_stmt->get_result();

$input_row = $input_results->fetch_assoc();
$input_json = json_encode($input_row);

$id = (int) filter_var($input_json, FILTER_SANITIZE_NUMBER_INT);


$category = "";
//setting the category of the item    
if(isset($_POST["category"])){
    $category = $_POST["category"];
}
if($category == 1){

    die("Error: Select a category for your prrooduct");

}elseif($category == 2){

    $prod_category = "Vehicles For Sale";

}elseif($category == 3){
        
    $prod_category = "Vehicles For Rent";

}elseif($category == 4){
        
    $prod_category = "Properties For Sale";

}elseif($category == 5){
        
    $prod_category = "Properties For Rent";

}elseif($category == 6){
        
    $prod_category = "Mobile Phones & Accessories";
        
}elseif($category == 7){
        
    $prod_category = "Home Furniture";
        
}elseif($category == 8){
        
    $prod_category = "Equipment";
        
}

//query to know the category
$category_query = $connection->prepare("SELECT category_id FROM categories WHERE name=?");
$category_query->bind_param("s", $prod_category);
$category_query->execute();

$category_results = $category_query->get_result();

$category_row = $category_results->fetch_assoc();
$category_json = json_encode($category_row);
//get only the integer
$category_id = (int) filter_var($category_json, FILTER_SANITIZE_NUMBER_INT);


if(isset($_POST["product_name"]) && $_POST["product_name"] != ""){
    
    $prod_name = mysqli_real_escape_string($connection, $_POST["product_name"]);

}else{
    die("Error: Enter the name of the product");
}

if(isset($_POST["description"]) && $_POST["description"] != ""){
    
    $prod_des = mysqli_real_escape_string($connection, $_POST["description"]);

}else{
    die("Error: Enter some description about the product");
}

if(isset($_POST["price"]) && $_POST["price"] != ""){
    
    $prod_price = mysqli_real_escape_string($connection, $_POST["price"]);

}else{
    die("Error: Enter the price of the product");
}




if(!empty($_FILES['image']['name'])){
    $filename = $_FILES["image"]["name"];
}else{
    die("Error: upload an image");
}

/* $temp = explode(".", $image_name);
$newfilename = round(microtime(true)) . '.' . end($temp);
$img = (string) "uploads/" . $_FILES['image']['name'];
$imagepath="uploads/".$img;
move_uploaded_file($_FILES["image"]["tmp_name"],$img); */

$tempname = $_FILES["image"]["tmp_name"];    
$folder = "uploads/".$filename;
move_uploaded_file($_FILES["image"]["tmp_name"],$folder);



// Insert image content into database 
$insert_query = $connection->prepare("INSERT INTO products(name, category_id, description, price, pictures, user_id) VALUES (?,?,?,?,?,?)"); 
$insert_query->bind_param("sisisi", $prod_name, $category_id, $prod_des, $prod_price, $folder, $id);
$insert_query->execute();

echo mysqli_error($connection);

/* echo $filename . "<br>" . $folder . "<br>" . $category_id . "<br>" . $prod_category; */

echo "Your ad is successfully posted<br>";
echo "Go to <a href=\"myproducts.php\">My Products</a> to view your ad";

?>