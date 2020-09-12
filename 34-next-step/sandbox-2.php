<?php 

    // file systems - 2

    $file = 'quotes.txt';

    // opening a file for reading
    $handle = fopen($file, 'r+');
    // $handle = fopen($file, 'a+');

    // read the file
    echo fread($handle, filesize($file)) . '<br />';
    // echo fread($handle, 112) . '<br />';
    
    // read a single line
    // echo fgets($handle) . '<br />';
    // read a single character
    // echo fgetc($handle) . '<br />';


    // writing the file

    fwrite($handle, "\nHello LD\n");

    // close file
    fclose($handle);

    // delete file 

    // unlink($file);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReadFile</title>
</head>
<body>
    <h2>Read File-2</h2>
</body>
</html>