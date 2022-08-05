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


include "db.php";

$db = new db;
echo "<pre>";
// print_r($db->select("user","*")->where("id","=",9)->andWhere("email","=","rw@rw.com")->getAll());
$user = [
    "name"=>"mohaned",
    "email" => "moihamed",
    "password" =>"123"
];
echo $db->insert("user",$user)->excute();

