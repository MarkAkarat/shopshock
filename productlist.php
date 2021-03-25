<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include_once "class.php";
    include_once "verified.php";
    $db = new db();
    $db->connect();
   ?>
   <!-- <table align="right" border="1">
    <tr><td></td></tr>
    <tr><td>คุณมึง <?php //echo$_SESSION['name']?></td></tr>
</table> -->
    <table align="right" >
    <tr><td>ยินดีต้อนรับ</td></tr>
    <tr><td>คุณ <?php echo $_SESSION['name']?></td></tr>
    </table>
    <center><h1>ยินดีต้อนรับเข้าสู่เมนูลูกค้า</h1></center>
    <center><a href="">|สั่งซื้อสินค้า</a><a href="">|ชำระเงิน</a><a href="logout.php">|Logout|</a></center> <br>
    <center><h1>ShopShock</h1> 
    <h2>Select Product to Cart</h2></center>
    <?php
        $db->show_product();
    ?>

</body>
</html>
