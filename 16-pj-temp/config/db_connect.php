<?php
    // connect to db
    $conn = mysqli_connect('localhost', 'ldkhanh', '123456', 'ld_pizza');
    
    // check connection
    if(!$conn) {
        echo 'Connect is failed' . mysqli_connect_error();
    }
?>