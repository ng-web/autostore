<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>D's Auto Store - Products</title>

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
<h3>D's Auto - Products</h3>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Add Product
</button><br><br>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="create.php">
        <table>
        <thead></thead>
        <tbody>
            <tr class="table-row">
                <td><lablel>Code</label></td>
                <td><input type="text" name="prodCode" class="txtField"></td>
            </tr>
            <tr class="table-row">
                <td><lablel>Name</label></td>
                <td><input type="text" name="prodName" class="txtField"></td>
            </tr>
            <tr class="table-row">
                <td><lablel>Qty</label></td>
                <td><input type="text" name="prodQty" class="txtField"></td>
            </tr>
            <tr class="table-row">
                <td><lablel>Price</label></td>
                <td><input type="text" name="prodPrice" class="txtField"></td>
            </tr>
            <tr class="table-row">
                
                
            </tr>
        </tbody>
        
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <td colspan="2"><input type="submit" name="submit" value="submit" class="btn btn-secondary"></td>
      </div>
    </div>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Product Id</th>
      <th scope="col">Code</th>
      <th scope="col">Name</th>
      <th scope="col">Qty</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include_once("db-config.php");

        $sql = "SELECT * FROM products";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                ?>
                <tr class="table-row" id="row-<?php echo $row["productID"]; ?>">
                    <td class="table-row"><?= $row["productID"];?> </td>
                    <td class="table-row"><?= $row["productCode"];?> </td>
                    <td class="table-row"><?= $row["name"];?> </td>
                    <td class="table-row"><?= $row["quantity"];?> </td>
                    <td class="table-row"><?= $row["price"];?> </td>
                    <!-- actions edit, view, delete -->
                    <td class="table-row" colspan="2"><a href="edit.php?id=<?=$row["productID"];?>">Edit</a> | 
                                                        <a href="delete.php?id=<?=$row["productID"];?>">Delete</a></td>
                </tr>
                <?php
                    }
                }
                $conn->close();
            ?>
        </tbody>
    </table>



 

</body>

</html>