<?php

class Product {
    private $id;
    private $name;
    private $desc;
    private $prize;
    private $stock;
    private $img;
    private $type;

    /**
     * @param $id
     * @param $name
     * @param $desc
     * @param $prize
     * @param $stock
     * @param $img
     * @param $type
     */
    public function __construct($name, $desc, $prize, $stock, $img, $type, $id = "") {
        $this->id = $id;
        $this->name = $name;
        $this->desc = $desc;
        $this->prize = $prize;
        $this->stock = $stock;
        $this->img = $img;
        $this->type = $type;
    }

    /**
     * @return mixed|string
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed|string $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDesc() {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function setDesc($desc) {
        $this->desc = $desc;
    }

    /**
     * @return mixed
     */
    public function getPrize() {
        return $this->prize;
    }

    /**
     * @param mixed $prize
     */
    public function setPrize($prize) {
        $this->prize = $prize;
    }

    /**
     * @return mixed
     */
    public function getStock() {
        return $this->stock;
    }

    /**
     * @param mixed $stock
     */
    public function setStock($stock) {
        $this->stock = $stock;
    }

    /**
     * @return mixed
     */
    public function getImg() {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img) {
        $this->img = $img;
    }

    /**
     * @return mixed
     */
    public function getType() {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type) {
        $this->type = $type;
    }



}