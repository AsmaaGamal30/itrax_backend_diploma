<?php
$content = file_get_contents("test.html");
if(isset($_POST['names']))
{
    $list_of_students = explode(",",$_POST['names']);
    $size = count($list_of_students);
    $course_name =$_POST['courses'];
    for($i=0;$i<$size;$i++)
    {
        $file_name = $list_of_students[$i].".html";
        $file =fopen("cirtificate/".$file_name,"w");
        $new_content =str_replace(["name","courses"],[$list_of_students[$i] , $course_name],$content);
        fwrite($file,$new_content);
    }
}

