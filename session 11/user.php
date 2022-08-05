<?php


class user 
{
    // property
    public $name;

    // method
    public function insert(){
      echo "insert $this->name <br>";
    }

    public function hi(){
        return $this->insert();
    }
}