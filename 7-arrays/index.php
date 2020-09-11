<?php 
    // index arrays

    $peopleOne = ['ninja', 'mario', 'luigi'];
    // echo $peopleOne[1];
    // print_r($peopleOne);

    $age = array(10, 20, 30, 40);
    // print_r($age);

    // push
    $age[] = 50;
    array_push($age, 60);

    // print_r($age);

    // count 
    // echo count($age);

    // merge
    $peopleTwo = ['chun-li', 'shan'];

    // clone value of array
    $peopleThree = array_merge($peopleOne, $peopleTwo);
    $peopleTwo[1] = 'ld';

    // print_r($peopleThree);

    // associative arrays (key & value pairs)

    $ninjaOne = ['ld1' => 'handsome', 'ld2' => 'generouns', 'ld3' => 'friendly'];
    // echo $ninjaOne['ld1'];
    // print_r($ninjaOne);
    $ninjaTwo = array('ld4' => 'cute', 'ld5' => 'humor', 'ld6' => 'love G');

    // push
    $ninjaTwo['ld7'] = 'zzz';

    // overide
    $ninjaTwo['ld4'] = 'love G';

    $ninjaThree = array_merge($ninjaOne, $ninjaTwo);
    print_r($ninjaThree);
    echo ' ================== ';
    echo count($ninjaThree);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    
</body>
</html>