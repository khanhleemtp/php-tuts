<?php 
    $blogs = [
        ['title' => 'mario party', 'author' => 'mario', 'content' => 'lorem', 'likes' => 30],
        ['title' => 'mario kart cheats', 'author' => 'toad', 'content' => 'lorem', 'likes' => 25],
        ['title' => 'go to party', 'author' =>  'chunli', 'content' => 'lorem', 'likes' => 50],
    ];

    // print_r($blogs[1][1]);
    // echo $blogs[2]['author'];
    // echo count($blogs);

    $blogs[] = ['title' => 'hello ld', 'author' => 'ldk', 'content' => 'lorem', 'likes' => 35];

    // print_r($blogs);
    $popped = array_pop($blogs);
    print_r($popped);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multimensional Arrays</title>
</head>
<body>
    
</body>
</html>