<?php

// connect to database
    $connection = mysqli_connect('localhost', 'root', '', 'MathForKids');

    // if there is a connection error
    if(!$connection){
        echo 'Error when trying to connect to database' . mysqli_connect_error();
    } // end if

?>