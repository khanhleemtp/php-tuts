<?php
    $conn = mysqli_connect('localhost', 'ldkhanh', '123456', 'ld_pizza');
    if(!$conn) {
        echo 'Connect is failed' . mysqli_connect_error();
    }
?>

<html lang="en">
    <?php include('templates/header.php') ?>

    

    <?php include('templates/footer.php') ?>
</html>