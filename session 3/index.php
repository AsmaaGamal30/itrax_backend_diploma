<?php
// $programmer_one =
// [
// 'php' => 100,
// 'python' => 90,
// 'c++' => 80
// ];
// $keys = array_keys($programmer_one);
// for($i=0;$i<count($programmer_one);$i++)
// {
//     echo $keys[$i].' : '.$programmer_one[$keys[$i]]."<br>";
// }

// foreach($programmer_one as $lang => $score)
// {
//     echo $lang.' : '.$score."<br>";
// }

$persons_api1=
[
    [
        'firstname'=>'Asmaa',
        'lastname'=>'Gamal',
        'age'=>20
    ],
    [
        'firstname'=>'rokaya',
        'lastname'=>'mohamed',
        'age'=>19
    ]

    ];
    $persons_api2=
[
    [
        'fname'=>'nada',
        'lname'=>'saad',
        'age'=>20
    ],
    [
        'fname'=>'sara',
        'lname'=>'elbadry',
        'age'=>20
    ]

    ];
$persons_api1_keys = array_keys($persons_api1[0]);
foreach($persons_api2 as $person)
{
    array_push($persons_api1,
    [
        $persons_api1_keys[0] => $person['fname'],
        $persons_api1_keys[1] => $person['lname'],
        $persons_api1_keys[2] => $person['age']
    ]
    );
}
echo "<pre>";
print_r($persons_api1);
