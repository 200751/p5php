<?php
class Order{
    private $orderId;
    private $surName;
    private $emailAdress;
    private $paymentMethod;
    private $statusOrder;
    private $conn;

    public function __construct($orderId, $surName, $emailAdress, $paymentMethod, $statusOrder, $conn){
        $this->orderId = $orderId;
        $this->surName = $surName;
        $this->emailAdress = $emailAdress;
        $this->paymentMethod = $paymentMethod;
        $this->statusOrder = $statusOrder;
        $this->conn = $conn;
    }

    public function getOrder(){

    }

    public function setOrder(){

    }

    private function validateFields(){

    }

    public function getStatusOrder(){

    }
}
?>