<?php
    $conn = mysqli_connect('localhost', 'ldkhanh', '123456', 'ld_pizza');
    if(!$conn) {
        echo 'Connect is failed' . mysqli_connect_error();
    }

    // write query from all pizzas

    $sql = 'SELECT title, ingredients, id FROM pizzas';

    // make query and get result

    $result = mysqli_query($conn, $sql);

    // fetch the resulting rows as an array

    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result from memory
    mysqli_free_result($result);
    
    // close connection
    mysqli_close($conn);

    print_r($pizzas);

?>

<html lang="en">
    <?php include('templates/header.php') ?>

    

    <?php include('templates/footer.php') ?>
</html>