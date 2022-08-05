<?php

// $tmp = $_FILES['img']['tmp_name'];
// $username = $_POST['username'];
// $type = $_FILES['img']['type'];
// $ext =explode("/",$type);
// $ext = end($ext);
// move_uploaded_file($tmp,"img/{$username}.{$ext}");
// echo "<pre>";
// print_r($_FILES);die;


// $count = count($_FILES['img']['name']);
// for($i=0;$i<$count;$i++)
// {
//     $tmp = $_FILES['img']['tmp_name'][$i];
//     $imgname = $_FILES['img']['name'][$i];
//     move_uploaded_file($tmp,$imgname);
// }

//mysqli
//connection
$username = $_POST['username'];
$connection =mysqli_connect("localhost","root","","lmsfs10");
mysqli_query($connection, "INSERT INTO `user` (`name`) VALUES ('$username')");
echo "pre";
print_r($connection);
