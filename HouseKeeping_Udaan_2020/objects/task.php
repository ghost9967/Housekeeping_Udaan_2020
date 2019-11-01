<?php
class Task{
 
    // database connection and table name
    private $conn;
    private $table_name = "task";
 
    // object properties
    public $id;
    public $name;
    public $asset;
    public $freq;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}
function read()
    {
 
    // select all query
    $query = "SELECT
                 p.id, p.name, p.task, p.freq
            FROM
                " . $this->table_name . "
            ORDER BY
                p.id DESC";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
    }
 function create(){
 
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                id=:id, name=:name, asset=:asset, freq=:freq";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->id=htmlspecialchars(strip_tags($this->id));
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->asset=htmlspecialchars(strip_tags($this->asset));
    $this->freq=htmlspecialchars(strip_tags($this->freq));
 
    $stmt->bindParam(":name", $this->id);
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":price", $this->asset);
    $stmt->bindParam(":freq", $this->freq);
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}
?>