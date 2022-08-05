<?php


class calc
{
    public $x;
    public $y;
    public $res;

    public function add(){
        $this->res =  $this->x + $this->y;
        return $this;
    }

    public function sub(){
        $this->res =  $this->x - $this->y;
        return $this;
    }

    public function mult(){
        $this->res =  $this->x * $this->y;
        return $this;
    }

    public function div(){
        $this->res =  $this->x / $this->y;
        return $this;
    }

    public function print(){
        echo $this->res;
    }
}