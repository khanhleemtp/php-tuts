<?php
    // $price = 50;
    // if ($price > 30) {
    //     echo "Hello LD";
    // }
    // else if ($price == 20) {
    //     echo "F";
    // }
    // else {
    //     echo "Hello Khanh";
    // }
    $products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightning bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2]
    ];

    // foreach($products as $product) {
    //     if(    $product['price'] < 15 
    //         && $product['price'] > 2
    //         || $product['price'] > 30
    //         ) {
    //         echo $product['name'] . '<br />';
    //     } 
    // }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional</title>
</head>
<body>
    <div>
        <ul>
            <?php foreach($products as $product ) {?> 
                    <?php if( $product['price'] > 15 ) { ?> 
                       <li>
                           <?php echo $product['name']; ?>
                       </li> 
                    <?php } ?> 
            <?php 
            } ?>
        </ul>
    </div>
</body>
</html>