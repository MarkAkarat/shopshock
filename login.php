<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
<center><h1>ShopShock</h1></center>
<center><h3>กรุณากรอกชื่อผู้ใช้และรหัสผ่านเพื่อเข้าสู่ระบบ</h3></center>
<form action="handle.php" method="post">
<center><table>
<tr><td>Username :</td> <td><input type="text" name="log_username" required></td></tr>
<tr><td>password :</td> <td><input type="password" name="log_password" required></td></tr>
<tr><td colspan="2" align="center"><button type="submit">Login</button>   <button type="reset">รีเซ็ต</button>   <a href="Register.php"><input type="button" value="สมัครสมาชิก"></a></td></tr>
</table>    

</center>
</form>
</body>
</html>
