<?php
session_start();
if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];
    $connection = mysqli_connect("localhost","root","","lmsfs10");
    $query = mysqli_query($connection,"SELECT * FROM `user` WHERE `email` = '$email' && `password` = '$password'");
    $res = mysqli_num_rows($query);
    if($res == 1)
    {
        $_SESSION['user']= $email;
        header("location: index.php");
    }else
    {
        echo "email or password not valide";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="password" placeholder="password">
        <input type="submit" name="login" value="send">
    </form>
</body>
</html>