<?php

namespace Src\Controllers;

use Src\Models\Product;


// require_once __DIR__."/../models/Product.php";

class ProductController
{
    private $productModel;
    public function __construct(){
        $this->productModel = new Product();
    }

    public function index(): void{
        $products = $this->productModel->getAll();
        require __DIR__."/../../public/index.php";
    }

    public function productAdmin(){
        $products = $this->productModel->getAll();
        require __DIR__."/../view/admin/Products.php";
    }

    public function Destroy(){
        if ($_GET['id']) {
            $id = $_GET['id'];
            $product = new Product();
            $product->Destroy($id);
        }
    }

    
}