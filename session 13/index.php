<?php

// include "export/export.php";

// $export = new export;
// $export->generate("mohamed","excel");


// class welcome
// {
//     const m = "mm";
//     public static function hi(){
//         echo "hi";
//     }

//     public function by(){
//         self::hi();   
//         self::m;  
//     }
// }


// // $w = new welcome;
// // $w->hi();

// welcome::hi();


include "car.php";
include "selfcar.php";

use internal\car as car;

$car = new car();
$car->move();




