<?php
class Allocate{
 
    // database connection and table name
    private $conn;
    private $table_name = "asset";
 
    // object properties
    public $asset;
    public $task;
    public $worker;
    public $alloct;
    public $expiret;
 
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
}
function read()
    {
 
    // select all query
    $query = "SELECT
                 p.asset, p.task, p.worker, p.alloct, p.expiret
            FROM
                " . $this->table_name . "
            ORDER BY
                p.asset DESC";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
    }
function readid()
    {
 
    // select all query
    $query = "SELECT
                 p.asset, p.task, p.worker, p.alloct, p.expiret
            FROM
                " . $this->table_name . "
                WHERE
                p.worker = ? 
                ";
 
    // prepare query statement
    $stmt = $this->conn->prepare($query);

    $stmt->bindParam(1, $this->worker);
 
    // execute query
    $stmt->execute();
 
    return $stmt;
    }

 function create()
 {
 
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                asset=:asset, task=:task, worker=:worker, alloct=:alloct, expiret=:expiret";
 
    // prepare query
    $stmt = $this->conn->prepare($query);
 
    // sanitize
    $this->asset=htmlspecialchars(strip_tags($this->asset));
    $this->task=htmlspecialchars(strip_tags($this->task));
    $this->worker=htmlspecialchars(strip_tags($this->worker));
    $this->alloct=htmlspecialchars(strip_tags($this->alloct))
    $this->expiret=htmlspecialchars(strip_tags($this->worker))
 
    $stmt->bindParam(":asset", $this->asset);
    $stmt->bindParam(":task", $this->task);
    $stmt->bindParam(":worker", $this->worker);
    $stmt->bindParam(":alloct", $this->alloct);
    $stmt->bindParam(":expiret", $this->expiret);
 
    // execute query
    if($stmt->execute()){
        return true;
    }
 
    return false;
     
}
?>