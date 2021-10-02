<?php

// connect to database
    $connection = mysqli_connect('localhost', 'root', '', 'first_assignment');

    // if there is a connection error
    if(!$connection){
        echo 'Error when trying to connect to database' . mysqli_connect_error();
    } // end if

?>