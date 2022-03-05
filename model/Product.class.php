<?php

class Product {
    private $id;
    private $nombre;
    private $desc;
    private $prize;
    private $stock;
    private $img;

    /**
     * @param $id
     * @param $nombre
     * @param $desc
     * @param $prize
     * @param $stock
     * @param $img
     */
    public function __construct($nombre, $desc, $prize, $stock, $img, $id = "") {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->desc = $desc;
        $this->prize = $prize;
        $this->stock = $stock;
        $this->img = $img;
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
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
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




}