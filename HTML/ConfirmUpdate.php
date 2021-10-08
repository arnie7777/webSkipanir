<?php

// file that connects to database and checks for connection errors
include('ConnToDb.php');

// if update (of type 'submit') button in "Update.php" file is pressed
if (isset($_POST["update"])) {

    // assign values of the $_POST array to variables
    $id = mysqli_real_escape_string($connection, $_POST['updateId']);
    $x = mysqli_real_escape_string($connection, $_POST['x']);
    $y = mysqli_real_escape_string($connection, $_POST['y']);
    $radius = mysqli_real_escape_string($connection, $_POST['radius']);
    $color = mysqli_real_escape_string($connection, $_POST['color']);

    // write sql query and save to variable
    $sql = "UPDATE Circles SET x = $x, y = $y, radius = $radius, color = '$color' WHERE id = $id";

    // make query
    mysqli_query($connection, $sql);

    // close connection to database
    mysqli_close($connection);

    // send/locate user to "Index.php" file
    header("location: Index.php");

}

?>
