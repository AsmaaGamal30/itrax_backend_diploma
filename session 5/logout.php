<?php
// session_start();
// session_destroy();
setcookie("user_fs10","",time()-(3600*24)*30,"/");
header("location: login.php");