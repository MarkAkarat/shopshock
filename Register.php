<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
div {
  width: 300px;
  border: 1px red solid;
  padding: 50px;
  margin: 0 auto;
}
</style>
</head>
<body>
    <form action="verified.php" method="post">
    <div>
    shopshock 
    <table>
    <hr>
    <tr><td>Name</td> <td><input type="text" name="member_inname" required></td></tr>
    <tr><td>NickName</td> <td><input type="text" name="member_nickname"  required></td></tr>
    <tr><td>Password</td> <td><input type="password" name="member_password"  required></td></tr>
    <tr><td>Confirm Password</td> <td><input type="password" name="member_cfpassword"  required></td></tr>
    <tr><td><button type="submit">สมัครสมาชิก</button></td><td><button type="reset">ล้างข้อมูล</button></td></tr>
    </table>
    <hr>
    </div>
    </form>
</body>
</html>