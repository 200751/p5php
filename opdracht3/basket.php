<?php
class Basket{
    private $id;
    private $productsInBasket = [];
    private $conn;

    public function __construct($id, $productsInBasket, $conn){
        $this->id = $id;
        $this->productsInBasket = $productsInBasket;
        $this->conn = $conn;
    }

    public function setProduct(){

    }

    public function getBasket(){

    }

    public function updateBasket(){

    }
}
?>