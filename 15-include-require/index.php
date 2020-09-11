<?php
    // include('ld.php'); // error -> not block afer
    // require('ld.php'); // error -> block afer
    include 'ld.php';
    require 'ld.php';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include 'content.php' ?>
    <?php include 'content.php' ?>
    <?php include 'content.php' ?>
    <?php include 'content.php' ?>

</body>
</html>