<?php

include "env.php";
include "dbstd.php";

class UserModel implements dbstd
{
    public $connnection;

    public function __construct()
    {
        $this->connnection = mysqli_connect(SERVER,USER,PASS,DBNAME);
    }
    public function select(){
        $q =  mysqli_query($this->connnection ,"SELECT * FROM `user`");
        while($row = mysqli_fetch_assoc($q)){
            $data[] = $row;
        }
        return $data;
    }
    public function insert(){

    }
    public function update(){
        
    }
    public function delete(){
        
    }
  
}