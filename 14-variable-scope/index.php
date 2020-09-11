<?php
    
    // variable scope
    

    // local vars

    // function sayHello() {
    //     $name = 'LD';
    //     echo "Hello $name";
    // }

    // sayHello();

    // function sayHello($name='LD') {
    //     echo "Hello $name";
    // }

    // sayHello('mario');

    $name = 'mario';

    // function sayHello() {
    //   echo "Hello $name";
    // } -> wrong

    // function sayHello() {
    //     // fix
    //     global $name;
    //     $name = 'LD';
    //     echo "Hello $name". "<br />";
    //   }
        
    // sayHello();
    // echo "$name"; // change name 

    // function sayHello($name) {
    //     $name = 'LD';
    //     echo "Hello $name";
    // }

    // sayHello($name); // Hello LD -> local scope $name = 'LD';
    // global $name = 'mario'


    // fix
    function sayHello(&$name) {
        $name = 'LD';
        echo "Hello $name";
    }

    sayHello($name); // Hello LD -> local scope $name = 'LD';
    echo $name;

    // global variables


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scope</title>
</head>
<body>
    
</body>
</html>