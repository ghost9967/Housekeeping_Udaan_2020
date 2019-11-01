<?php
class Worker{
 
    // database connection and table name
    private $conn;
    private $table_name = "worker";
 
    // object properties
    public $id;
    public $name;
    public $skill;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}
function read()
    {
 
    // select all query
    $query = "SELECT
                 p.id, p.name, p.skill
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
                id:=id, name=:name, skill=:skill";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->id=htmlspecialchars(strip_tags($this->id));
    $this->name=htmlspecialchars(strip_tags($this->name));
    $this->price=htmlspecialchars(strip_tags($this->skill));
 
    $stmt->bindParam(":id", $this->id);
    $stmt->bindParam(":name", $this->name);
    $stmt->bindParam(":price", $this->skill);
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}
?>