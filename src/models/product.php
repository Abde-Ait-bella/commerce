<?php


namespace Src\Models;
use Src\Config\Database;


class Product
{
    private $dbconn;

    public function __construct (){
        $this->dbconn = Database::getConnection();
    }

    public function getAll(){
        $sql = "SELECT * FROM product";
        $stmt = $this->dbconn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    public function Destroy($id){
        $conn = Database::getConnection();
        $sql = "UPDATE product SET is_deleted = 1  WHERE product_id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ":id" => $id
        ]);
        header("Location: /shop_product/products");
    }
}
