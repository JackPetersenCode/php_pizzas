<?php

    $conn = mysqli_connect('localhost', 'petejackerson', 'redsox45', 'ninja_pizzas');
    
    if(!$conn) {
        echo 'Connection error: ' . mysqli_connect_error();
    }

?>