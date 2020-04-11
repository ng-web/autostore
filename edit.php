<?php
require_once('db-config.php');

if(!isset($_GET['id'])){
    echo 'Product not found.';
}else{
    $id=$_GET['id'];
}

$query = "SELECT * FROM products WHERE productID='".$id."'";
$result = mysqli_query($conn, $query) or die (mysqli_error());

$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>D's Auto Store - Update product</title>

  <!-- Custom fonts for this template-->
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Bootstrap core JavaScript-->
 <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="js/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</head>
<body>
<h3>Update product</h3>

<div>

    <form name="editForm" method="post" action="update.php">
        <input name="id" type="hidden" value="<?= $row['productID'];?>" />
        <p><input type="text" name="prodCode" value="<?= $row['productCode'];?>" />
        <p><input type="text" name="prodName" value="<?= $row['name'];?>" />
        <p><input type="text" name="prodQty" value="<?= $row['quantity'];?>" />
        <p><input type="text" name="prodPrice" value="<?= $row['price'];?>" />
        <p><input type="submit" name="submit" value="Update" />
    </form>
</div>
</body>
</html>