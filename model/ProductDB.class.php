<?php
require_once ("DBConnection.class.php");
class ProductDB extends DBConnection {

    /**
     * Metodo que inserta un producto en la DB
     * @param $product
     */
    protected function insertProduct($product){
        $stmt = $this->connect()->prepare('INSERT INTO products (products_name, products_desc, products_prize, products_stock, products_img, products_type) VALUES (?, ?, ?, ?, ?, ?);');

        if (!$stmt->execute(array($product->getName(), $product->getDesc(), $product->getPrize(), $product->getStock(), $product->getImg(), $product->getType()))){
            $stmt = null;
            header("location: ../addProduct.php?error=stmtfailed");
            exit();
        }
        $stmt = null;
    }

    protected function updateProduct($product){}

}