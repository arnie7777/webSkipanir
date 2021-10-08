<?php include("TopBar.php"); ?>
<html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <?php

        // if the update anchor tag is pressed in "Index.php" file
        if(isset($_GET["id"])) {

            // file that connects to database and checks for connection errors
            include('ConnToDb.php');

            // assign the id of the circle to variable
            $id = mysqli_real_escape_string($connection, $_GET["id"]);

            // write sql query
            $sql = "SELECT id, x, y, radius, color FROM Circles WHERE id = $id";

            // make query
            $result_from_query = mysqli_query($connection, $sql);

            // fetch only one row as an associate array and assign to variable
            $circle = mysqli_fetch_assoc($result_from_query);

            // close connection to database
            mysqli_close($connection);
}

        // display input fields to give the user the opportunity to the values of a circle
        print("<div id='divForm'>
            <form action='ConfirmUpdate.php' method='POST' class='classForm'>
                <h1>UPDATE CIRCLE</h1>
                <input type='hidden' name='updateId' value='$id'>
                <div>
                    <label>X:</label>
                    <input id='xField' type='number' placeholder=' Enter position for x' 
                           name='x' value='$circle[x]' min='-15' max='15'>
                </div>
                <div>
                    <label>Y:</label>
                    <input id='yField' type='number' placeholder=' Enter position for y' 
                           name='y' value='$circle[y]' min='-15' max='15'>
                </div>
                <div>
                    <label>Radius:</label>
                    <input id='radiusField' type='number' placeholder=' Enter radius' 
                           name='radius' value='$circle[radius]' min='1' max='15'>
                </div>
                <div>
                    <label>Color:</label>
                    <input id='colorCircle' type='color' name='color' value='$circle[color]'>
                </div>
                <div class='drawSubmit'>
                    <input id='drawBtn' type='submit' value='Update Circle' name='update'>
                </div>
                
            </form>
        </div>
        <a href='Index.php'><button class='backButton' id='updateBack'>GO BACK TO INDEX</button></a>");
        ?> <!-- end php -->
    </body>
</html>