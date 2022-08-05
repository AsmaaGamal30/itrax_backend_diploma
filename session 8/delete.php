<?php
$id = $_GET['id'];
$connection = mysqli_connect("localhost","root","","lmsfs10");
$query = mysqli_query($connection,"DELETE FROM `user` WHERE `id` = $id");
if(mysqli_affected_rows($connection)>0)
{
    header("location: index.php");
}else
{
    echo "user not deleted";
}