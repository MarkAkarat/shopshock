<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addproduct</title>
</head>

<body style="margin: 0 auto; width:25%">
<?php
include_once "class.php";
include_once "verified.php";
$db = new db();
$db->connect();
$rs = $db->show_prosale($_GET['pld']);
?>
    <H1>SHOPSHOCK</H1>
    <h3>Select Product to Cart</h3>
    <div style="border:red 1px solid;padding:20px">
        <hr>
        <table>
            <tr>
                <td>Product_ID</td>
                <td><input type="text" name="" id="Product_ID" value="<?= $rs['Product_id'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Product_Code</td>
                <td><input type="text" name="" id="Product_Code" value="<?= $rs['Product_code'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Product_Name</td>
                <td><input type="text" name="" id="Product_Name"  value="<?= $rs['Product_Name'] ?>" readonly ></td>
            </tr>
            <tr>
                <td>Brand</td>
                <td><input type="text" name="" id="Brand"  value="<?= $rs['Brand_name'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Unit</td>
                <td><input type="text" name="" id="Unit" value="<?= $rs['Unit_name'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Cost</td>
                <td><input type="text" name="" id="Cost" value="<?= $rs['Cost'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Quantity</td>
                <td><input type="number" name="" id="Quantity" value="<?= $rs['Stock_Quantity'] ?>" required></td>
            </tr>
        </table>
        <hr>
        <div style="text-align: center;"><button type="submit">Submit</button> <button type="reset">Reset</button></div>
    </div>
</body>
</html>