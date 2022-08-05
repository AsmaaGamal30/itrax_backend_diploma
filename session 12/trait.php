<?php 


trait car{
    public $color;
    public $size;

    public function move(){
        echo "move";
    }
    public function os(){
        echo "os";
    }
}


trait soft{


    public function os(){
        echo "os";
    }
}


class bmw{
    
    use soft {
        soft::os as ossoft;
    }
    use car;
}


$bmw = new bmw();
$bmw->ossoft();

