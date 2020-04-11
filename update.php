<?php

require_once('db-config.php');

if(isset($_POST['submit'])){
    $code= $_POST["prodCode"];
    $name= $_POST["prodName"];
    $quantity= $_POST["prodQty"];
    $price= $_POST["prodPrice"];
    $id= $_POST["id"];

    $query = "UPDATE products SET productCode=?, name=?, quantity=?, price=? WHERE productID=?;";
    $sql = $conn->prepare($query);

    $sql->bind_param("sssdi", $code, $name, $quantity, $price, $id);

    if($sql->execute()){
        $success_message = "Product updated successfully";
        header("location:products.php");
    }else{
        $error_message = "Error trying to update product";
    }

    $sql->close();
    $conn->close();  
}