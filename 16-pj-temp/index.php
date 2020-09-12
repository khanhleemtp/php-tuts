<?php
    $conn = mysqli_connect('localhost', 'ldkhanh', '123456', 'ld_pizza');
    if(!$conn) {
        echo 'Connect is failed' . mysqli_connect_error();
    }

    // write query from all pizzas

    $sql = 'SELECT title, ingredients, id FROM pizzas ORDER BY created_at';

    // make query and get result

    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array

    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory
    mysqli_free_result($result);

    // close connection
    mysqli_close($conn);

    // print_r($pizzas);

    // explode(',', $pizzas[1]['ingredients']);
    
    // print_r(explode(',', $pizzas[1]['ingredients']));

?>

<html lang="en">
    <?php include('templates/header.php') ?>

    <h4 class="text-center text-4xl font-semibold text-purple-600">Pizzas!</h4>  
    <div class="container mx-auto max-w-4xl">
        <div class="grid grid-cols-12">
            <?php
                foreach($pizzas as $pizza): { ?>

                    <div class="col-span-6 m-3">
                        <div class="card shadow-md p-4 bg-white">
                            <div class="card-content text-center border-b-2 border-red-200 mb-4 p-4">
                                <h6
                                class="text-3xl font-semibold text-red-400"
                                ><?php echo htmlspecialchars($pizza['title']); ?></h6>
                                <ul
                                class="text-xl font-light"
                                >
                                    <?php foreach(explode(',', $pizza['ingredients']) as $ingredient): { ?>
                                        <li><?php echo htmlspecialchars($ingredient) ?></li>
                                    <?php } endforeach; ?>
                                </ul>
                            </div>
                            <div class="card-action">
                                <a href="#" class="brand-text">More info</a>
                            </div>
                        </div>
                    </div>

            <?php } endforeach; ?>

            <?php if(count($pizzas) >=3): ?>
                <p class="col-span-12 text-center text-lg font-semibold text-purple-600">There are more than 3 pizzas</p>
            <?php else: ?> 
                <p class="col-span-12 text-center text-lg font-semibold text-purple-600">There are less than 3 pizzas</p>
            <?php endif; ?> 

        </div>
    </div>

    <?php include('templates/footer.php') ?>
</html>