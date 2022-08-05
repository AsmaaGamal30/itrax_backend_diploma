<?php


// include "user.php";


// $user = new user;
// $user->name = "mohamed";
// $user->hi();
// // var_dump($user);

// echo "<hr>";

// $user2 = new user;
// $user2->name = "ahmed";
// $user2->hi();
// var_dump($user2);

// include "calc.php";


// $calc = new calc;
// $calc->x = 10;
// $calc->y = 20;

// // $calc->add();
// // $calc->print();

// $calc->sub()->print();


include "UserModel.php";

$usermodel = new UserModel;

print_r($usermodel->select());