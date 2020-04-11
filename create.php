<?php
require_once("db-config.php");

if(isset($_POST['submit'])){
    $query = "INSERT INTO products (productCode,name,quantity,price) VALUES (?,?,?,?)";
    $sql = $conn->prepare($query);
    $code = $_POST["prodCode"];
    $name = $_POST["prodName"];
    $quantity = $_POST["prodQty"];
    $price = $_POST["prodPrice"];

    $sql->bind_param("sssd", $code, $name, $quantity, $price);

    if($sql->execute()){
        $success_message = "Added successfully";
        header("location: products.php");
    }else{
        $error_message = "Error adding product";

    }
    $sql->close();
    $conn->close();
}