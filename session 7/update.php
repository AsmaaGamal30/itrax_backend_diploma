<?php
$id = $_GET['id'];
if(isset($id))
{
$connection = mysqli_connect("localhost","root","","lmsfs10");
$query = mysqli_query($connection,"SELECT * FROM `user` WHERE `id` = $id");
$row = mysqli_fetch_assoc($query);
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
    <form action="update.php" method="post">
        <input type="text" name="name" value="<?= $row['name']; ?>">
        <input type="text" name="email" value="<?= $row['email']; ?>">
        <input type="text" name="password" value="<?= $row['password']; ?>">
        <input type="submit" name="update" value="update" >
    </form>
</body>
</html>