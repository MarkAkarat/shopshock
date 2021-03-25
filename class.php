<?php
class db{
    public $dbCon = null;
    public function connect(){ //เชื่อมฐานข้อมูล
        $this->dbCon = new mysqli("localhost","root","","shopshock");
        $this->dbCon->query("SET NAMES UTF8");
        if($this->dbCon->connect_error){
            die("database connection Error,Error No.:".
            $this->dbCon->connect_errno ." | ".
            $this->dbCon->connect->connect_error);
        }
    }
    public function disconnect(){
        $this->dbCon->close();
    }
    public function show_product(){
        //$data = $mydb->queryE("SELECT product.Product_id,product.Product_code,product.Product_Name,brand.Brand_name,unit.Unit_name,product.Cost FROM `product`,brand,unit WHERE product.Brand_ID=brand.Brand_id AND product.Unit_ID=unit.Unit_id");

        $sql = "SELECT `Product_id`, `Product_code`, `Product_Name`, `Brand_name`, `Unit_name`, `Cost` FROM `product`,`brand`,`unit` WHERE product.Brand_ID =brand.Brand_id AND product.Unit_ID = unit.Unit_id";
        $rs = $this->dbCon->query($sql);
        echo "<center><table border = '1'>";
        $count = 0;
        while ($row = $rs->fetch_assoc()){
            if ($count == 0){
                echo "<tr>";
            //     foreach($row as $key => $value){
            //         echo "<td>{$key}</td>";
            //     }
            // echo "<td>Shop</td></tr>";
          echo  "<th>ID</th>";
          echo "<th>product Codes</th>";
          echo "<th>product Name</th>";
          echo "<th>brand</th>";
          echo "<th>unit</th>";
          echo "<th>Cost</th>";
          echo "<th>Shop</th>";
            $count++;
            }
            echo "<tr>";
            foreach($row as $key => $value){
                echo "<td>{$value}</td>";
            }
            echo "<td><a href='addproduct.php?pld={$row['Product_id']}'>ShopShock</a></td>";
            echo "</tr>";
        }
        echo "</table><center>";
    }//ปีกกา showproduct

    public function insertmember($info){
        //$id = "SELECT MAX( member_id ) FROM member) +1";
       // $max = "SELECT MAX( member_id ) FROM member";
       $insersql = "INSERT INTO `member`SELECT MAX(member_id)+1,'{$info['name']}','{$info['user']}','{$info['password']}','01' FROM member";
       // $insertsql = "INSERT INTO `member` SELECT MAX(member_id)+1,'{$info['name']}','{$info['user']}','{$info['password']}','01')";
        echo $insersql;
        $rsInsert = $this->dbCon->Query($insersql);
    }
    public function verify_user($user,$pass){
        $sql="SELECT count(`member_id`) as n,`name` FROM `member` WHERE `user`='{$user}' and `password`='{$pass}'";
        $rs= $this->dbCon->query($sql);
        $row=$rs->fetch_assoc();
        return $row;
    }

    public function show_prosale($id){
        $sql = "SELECT `Product_id`, `Product_code`, `Product_Name`, `Brand_name`, `Unit_name`, `Cost`,`Stock_Quantity` FROM `product`,`brand`,`unit` WHERE product.Brand_ID =brand.Brand_id AND product.Unit_ID = unit.Unit_id AND product.Product_id={$id}";
        $rs = $this->dbCon->query($sql);
        return $rs->fetch_assoc();
    }
    
}//ปีกกาคลาสนะ
?>