<?php
$arr = [1,2,4,8,10];
$min = $arr[0];
$max = $arr[0];
$end = $arr[count($arr)-1];
for($i=0;$i<count($arr);$i++)
{
    if($arr[$i]>$max)
    {
        $max = $arr[$i];
    }
    if($arr[$i]<$min)
    {
        $min = $arr[$i];
    }

}
echo $max."<br>" ;
echo $min."<br>" ;
echo $end."<br>" ;
