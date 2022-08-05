<?php
// session_start();
if(empty($_COOKIE['user_fs10']))
{
    header("location: login.php");
}

echo "Asmaa Gamal";