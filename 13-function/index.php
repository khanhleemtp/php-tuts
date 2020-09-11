<?php 

    // functions
    function sayHello($name = 'LDK', $time = 'morning') {
        echo "Good $time and Hello $name";
    }

    sayHello();
    // sayHello('mario');

    function formatProduct($product) {
        // echo "{$product['name']} costs {$product['price']} $ to buy <br />";
        return "{$product['name']} costs {$product['price']} $ to buy <br />";
    }

    // $formatted = formatProduct([ 'name' => 'Gold star', 'price' => 20 ]);
    // echo $formatted;

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    
</body>
</html>