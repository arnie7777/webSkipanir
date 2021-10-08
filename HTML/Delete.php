<?php include("TopBar.php"); ?>
<html>
    <head>
        <title>Delete</title>
    </head>
    <body>
        <?php

        // if the delete anchor tag is pressed in "Index.php" file
        if(isset($_GET["id"])) {

            // file that connects to database and checks for connection errors
            include('ConnToDb.php');

            // assign the id of the circle to variable
            $id = mysqli_real_escape_string($connection, $_GET["id"]);

            // write sql query
            $sql = "SELECT id ,x , y, radius, color
                    FROM Circles
                    WHERE id = $id";

            // make query
            $result_from_query = mysqli_query($connection, $sql);

            // fetch only one row as an associate array
            $circle = mysqli_fetch_assoc($result_from_query);

            // close connection to database
            mysqli_close($connection);
}

        // if circle with this id exists
        if($circle) {
            // creating table (starting with table header)
            print("<h1>DELETE CIRCLE</h1>");
            print("<table class='table'>
                      <tr>
                        <td class='col1'>Circle ID</td><td class='col2'>$id</td>
                      </tr>
                      <tr>
                        <td class='col1'>X</td><td class='col2'>$circle[x]</td>
                      </tr>
                      <tr>
                        <td class='col1'>Y</td><td class='col2'>$circle[y]</td>
                      </tr>
                      <tr>
                        <td class='col1'>Radius</td><td class='col2'>$circle[radius]</td>
                      </tr>
                      <tr>
                        <td class='col1'>Color</td><td class='col2'>$circle[color]</td>
                      </tr>
                    </table>");
        }

        // if the circle doesn't exist
        else {
            print("A circle with this id does not exist");
        }

        // give user the opportunity to delete the circle og go back to index page
        print("<h2 class='sure'>Are you sure you want to delete this circle?</h2>
               <form action='ConfirmDelete.php' method='post'>
                    <input type='hidden' name='deleteId' value='$id'>
                    <input class='backButton deleteBack' type='submit' name='delete' value='YES - I WANT TO DELETE'>
               </form>");
        print("<a href='Index.php'><button class='backButton deleteBack'>GO BACK TO INDEX</button></a>");

        ?> <!-- end php -->
    </body>
</html>