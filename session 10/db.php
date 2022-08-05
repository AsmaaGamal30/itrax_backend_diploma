<?php
include "env.php";

class db{
    public $connection;
    public $sql;
    public $query;

    public function __construct(){
        $this->connection = mysqli_connect(SERVER,USER,PASS,DBNAME);
    }


    public function Select($table,$column){
        $this->sql = "SELECT `$column` From `$table`";
        return $this;
    }

    public function Where ($column,$compair,$value){
        $this->sql .= " WHERE `$column` $compair `$value`";
        return $this;
    }

    public function AND ($column,$compair,$value){
        $this->sql .= " AND `$column` $compair `$value`";
        return $this;
    }

    public function OR ($column,$compair,$value){
        $this->sql .= " OR `$column` $compair `$value`";
        return $this;
    }

    public function getAll(){
        $this->query = mysqli_query($this->connection,$this->sql);
        while ($row = mysqli_fetch_assoc($this->query)){
            $data[]=$row;
        }
        return $data;
    }

    public function getRow(){
        $this->query = mysqli_query($this->connection,$this->sql);
        $row = mysqli_fetch_assoc($this->query);
        return $row;
    }

    public function Insert($table,$data)
    {
        $columns = "";
        $values = "";
        foreach ($data as $key => $value){
            $columns .= "`$key` ,";
            $values .= "`$value` ,";
        }
        $columns = rtrim($columns,",");
        $values = rtrim($values,",");
        $this->sql = "INSERT INTO `$table` ($columns) VALUES ($values)";
        return $this;
    }

    public function excute()
    {
        $this->query = mysqli_query($this->connnection,$this->sql);
        if(mysqli_affected_rows($this->connection) > 0){
            return true;
        }else{
            return false;
        }
    }
}