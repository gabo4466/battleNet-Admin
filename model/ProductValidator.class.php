<?php

require_once("Product.class.php");
require_once("ProductDB.class.php");

class ProductValidator extends ProductDB{

    private $product;
    /**
     * @param $product
     */
    public function __construct(Product $product) {
        $this->product = $product;
    }


    /**
     * Metodo que valida el producto
     */
    private function validateProduct(){
        //axxdasd
    }

    /**
     * Metodo que valida el producto y lo inserta en la BD
     */
    public function addProduct() {
        if ($this->emptyInput() == true) {
            header("location: ../signup.php?error=emptyinput");
            exit();
        }
        if ($this->invalidImg()){
            header("location: ../signup.php?error=filenotvalid");
            exit();
        }
        $this->insertProduct($this->product);
    }

    /**
     * Metodo que valida el producto y lo actualiza en la BD
     */
    public function modifyProduct() {

        $this->updateProduct($this->product);
    }

    /**
     * Metodo que comprueba que ningun campo este vacio
     * @return bool
     */
    public function emptyInput() {
        if ( empty($this->product->getName()) || empty($this->product->getPrize()) || empty($this->product->getDesc()) || empty($this->product->getImg()) ) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    /**
     * Comprueba que el formato de la imagen es correcto
     * @return bool
     */
    public function invalidImg(){
        $len = strlen($this->product->getImg());
        $end = substr($this->product->getImg(), $len - 3, 3);
        if ($end != "jpg" && $end != "png"){
            $result = true;
        }else{
            $result = false;
        }
        return $result;
    }


}