<?php
include_once($_SERVER['DOCUMENT_ROOT'] .'./commerce/settings/database.php');
class Produits{
    private $pdo;
    public function __construct(){
        $connect=new Database();
        $this->pdo=$connect->connect();
    }

    public function addProduit($nom,$quantity,$description,$prix,$photo){
        
        $stmt=$this->pdo->prepare("INSERT into product (product_name,product_quantity,product_description,product_price,product_image) VALUES (?,?,?,?,?) ");
        $stmt->execute([$nom,$quantity,$description,$prix,$photo]);
    }
}

?>