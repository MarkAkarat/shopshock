<?php
include_once "class.php";
$db = new db();
$db->connect();
/////////////////////////////////////////////////////////
if(isset($_POST['member_inname'])){
    if($_POST['member_password'] == $_POST['member_cfpassword']){
    $data['name'] = $_POST['member_inname'];
    $data['user'] = $_POST['member_nickname'];
    $data['password'] = $_POST['member_password'];
    $db->insertmember($data);
    echo "<script>alert('สมัครสำเร็จแล้ว')</script>";
    echo ("<a href='Register.php'>กดนี่นะ</a>");
    }else{
        echo "<script>alert('password Not math ไอ้ชาย')</script>";
        echo ("<a href='Register.php'>กดนี่นะ</a>");
    }
}else if (isset($_POST['log_username'])){
    $rs = $db->verify_user($_POST['log_username'],$_POST['log_password']);
    session_start();
    if($rs['n']==1){
        $_SESSION['name'] = $rs['name'];
        header("location: productlist.php");
    }else{
        echo "<script>alert('ไม่ดูรหัสก่อนวะ ว่าเคยสมัครยัง สักแต่จะพิม')</script>";
        echo ("<a href='login.php'>กดนี่นะ</a>");
    }
}
?>
