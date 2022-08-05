<?php
// function print_name($fname , int $age) : void 
// {
//     echo '<b>name</b> : '.$fname."<br>".'<b>age</b> : '.$age;
// }

// print_name($_POST['name'],$_POST['age']);
function calculator($operation,$num1,$num2) 
{
    switch ($operation) {
        case 'sum':
            echo $num1 + $num2 ;   
         break;
        case 'multiplication':
            echo  $num1 * $num2;
            break;
        case 'subtraction':
            echo $num1 - $num2;
            break;
        case 'division':
            echo $num1 / $num2;
            break;
        default :
        echo "somthing wrong happend , try again" ;  
    }
}

calculator (
    $_POST['operation'],
    $_POST['num1'],
    $_POST['num2']
);
