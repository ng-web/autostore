<?php
require_once("db-config.php");

if(!isset($_GET["id"])){
    echo "error deleting product";
}else{
    $id= $_GET["id"];
    $query= "DELETE FROM products WHERE productID=?;";
    $sql = $conn->prepare($query);
    $sql->bind_param("i", $id);

    if($sql->execute()){
        $success_message = "Product deleted successfully";
        header("location:products.php");
    }else{
        $error_message = "Error trying to delete product";
    }

    $sql->close();
    $conn->close();
}