<?php

// file that connects to database and checks for connection errors
include('ConnToDb.php');

// if delete (of type 'submit') button in "Delete.php" file is pressed
if (isset($_POST["delete"])) {

    // assign the id of the circle to variable
    $id = mysqli_real_escape_string($connection, $_POST['deleteId']);

    // write sql query and save to variable
    $sql = "DELETE FROM Circles WHERE id = $id";

    // make query
    mysqli_query($connection, $sql);

    // close connection to database
    mysqli_close($connection);

    // send/locate user to "Index.php" file
    header("location: Index.php");

}

?>

