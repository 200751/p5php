<?php
class Category {

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
        $query = "INSERT INTO " . $this->tableName . " (`c_id`, `c_name`, `c_description`) VALUES ('', '', '')";
        $result = $this->conn->query($query);
        return $result;
    }

    public function update(){
        $query = "UPDATE " .$this->tableName . " SET `c_id`= '', `c_name`= '', `c_description`= '' ";
        $result = $this->conn->query($query);
        return $result;
    }
    
    public function delete(){
        $query = "DELETE FROM " . $this->tableName . " WHERE";
        $result = $this->conn->query($query);
        return $result;
    }
}