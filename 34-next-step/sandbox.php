<?php
    
    // $score = 50;

    // superglobals

    // echo $_SERVER['SERVER_NAME'] . '<br />';
    // echo $_SERVER['REQUEST_METHOD'] . '<br />';
    // echo $_SERVER['PHP_SELF'] . '<br />';
    // echo $_SERVER['SCRIPT_FILENAME'] . '<br />';

    // $_SESSION



    // $_COOKIE

    $file = 'test.txt';
    
    if(file_exists($file)) {
        echo readfile($file) . '</br>';

        // absolute path
        echo realpath($file) . '</br>';

        // file size
        echo filesize($file) . '</br>';
        
        // copy file
        copy($file, 'quotes.txt');

        // rename
        // rename($file, 'test.txt');

    }
    else {
        echo 'File does not exist';
    }

    // create folder
    mkdir('ld');

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tuts</title>
</head>
<body>
    <!-- <p><?php echo $score > 40 ? "High Score" : "Bad Score :(("; ?></p> -->

    
</body>
</html>