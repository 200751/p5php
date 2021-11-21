<?php
class Product{

    private $conn;
    private $tableName = "product";

    public function __construct($conn){
        $this->conn = $conn;
    }

    public function read(){
        $query = "SELECT * FROM " . $this->tableName;
        $result = $this->conn->query($query);
        return $result;
    }

    public function create(){
        $query = "INSERT INTO " . $this->tableName . " (`p_id`, `p_name`, `p_description`) VALUES ('', '', '')";
        $result = $this->conn->query($query);
        return $result;
    }

    public function update(){
        // $query = "UPDATE " .$this->tableName . " SET `p_id`= '', `p_name`= '', `p_description`= '' ";
        // $result = $this->conn->query($query);
        // return $result;
        // echo ($p_id);
        // echo ($p_name);
        // return $p_id;
    }
    
    public function delete(){
        $query = "DELETE FROM " . $this->tableName . " WHERE";
        $result = $this->conn->query($query);
        return $result;
    }
}