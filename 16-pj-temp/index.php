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

?>

<html lang="en">
    <?php include('templates/header.php') ?>

    <h4 class="text-center text-4xl font-semibold text-purple-600">Pizzas!</h4>  
    <div class="container mx-auto max-w-4xl">
        <div class="grid grid-cols-12">
            <?php
                foreach($pizzas as $pizza){ ?>
                    <div class="col-span-6 m-3">
                        <div class="card shadow-md p-4 bg-white">
                            <div class="card-content text-center border-b-2 border-red-200 mb-4 p-4">
                                <h6
                                class="text-3xl font-semibold text-red-400"
                                ><?php echo htmlspecialchars($pizza['title']); ?></h6>
                                <div
                                class="text-xl font-light"
                                ><?php echo htmlspecialchars($pizza['ingredients']); ?></div>
                            </div>
                            <div class="card-action">
                                <a href="#" class="brand-text">More info</a>
                            </div>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>

    <?php include('templates/footer.php') ?>
</html>