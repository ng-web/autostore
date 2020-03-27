<?php
session_start();

//only authentication users can view this page

if(!isset($_SESSION["email"])){
    header("location: login.php");
}

?>

<!DOCTYPE html>
<head>
    <title>D's Auto Parts - Order Form</title>
</head>
<body>
    <div>
        <a href="logout.php">Logout</a>
    </div>
    <form action="processorder.php" method="POST">
        <table style="border: 0px;">
        <tr style="background: #cccccc;">
            <td>Item</td>
            <td>Quantity</td>
        </tr>
        <tr>
            <td>Tires</td>
            <td><input type="text" name="tireqty" size="3" maxlength="3"></td>

        </tr>
        <tr>
            <td>Oil</td>
            <td><input type="text" name="oilqty" size="3" maxlength="3"></td>
            
        </tr>
        <tr>
            <td>Spark Plugs</td>
            <td><input type="text" name="sparkqty" size="3" maxlength="3"></td>

        </tr>
        </table>
        
        
        
        <input type="submit" value="Submit">


    </form>
</body>