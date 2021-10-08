<?php include("TopBar.php"); ?>
<html>
    <head>
        <title>Draw</title>
        <script src="../JS/coordinationGrid.js"></script>
    </head>
    <?php

    // connect to database and check for errors
    include('ConnToDb.php');

    // if submit button below circle fields is pressed
    if (isset($_POST['submit'])) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $radius = $_POST['radius'];
        $color = $_POST['color'];

        // write sql query
        $sql = "INSERT INTO Circles(x,y,radius, color) 
                VALUES($x, $y, $radius, '$color')";

        // make query
        mysqli_query($connection, $sql);

        // close connection to database
        mysqli_close($connection);

        print("<p id='success'>Circle successfully submitted !</p>");
    }
    ?> <!-- end php -->

    <!-- Create div with four links (four anchor elements) -->
    <body onload="coordinationGrid()">
        <div id="divForm" class="form-center">
            <form action="Circle.php" method="POST" class="classForm">
                <h1>DRAW A CIRCLE</h1>
                <div>
                    <label>X:</label>
                    <input id="xField" type="number" placeholder=" Enter position for x" name="x" min="-15" max="15">
                </div>
                <div>
                    <label>Y:</label>
                    <input id="yField" type="number" placeholder=" Enter position for y" name="y" min="-15" max="15">
                </div>
                <div>
                    <label>Radius:</label>
                    <input id="radiusField" type="number" placeholder=" Enter radius" name="radius" min="1" max="15">
                </div>
                <div>
                    <label>Color:</label>
                    <input id="colorCircle" type="color" name="color">
                </div>
                <div class="drawSubmit">
                    <input id="drawBtn" type="button" value="Click to draw the circle">
                    <input id="submitBtn" type="submit" value='Submit Circle' name="submit">
                </div>
            </form>
        </div>
        <a href="Index.php"><button id="display">CLICK TO SEE SUBMITTED DATA</button></a>
        <div id="divCanvas">
            <canvas id='idCanvas' class="drawCanvas" width="600" height="600"></canvas>
        </div>
        <div id="drawLines">
            <div>
                <h1>DRAW A LINE</h1>
                <label>X1:</label>
                <input id="x1Field" type="number" placeholder=" Enter position for x1" name="x1">
                <br><br>
                <label>Y1:</label>
                <input id="y1Field" type="number" placeholder=" Enter position for y1" name="y1">
            </div>
            <div>
                <label>X2:</label>
                <input id="x2Field" type="number" placeholder=" Enter position for x2" name="x2">
                <br><br>
                <label>Y2:</label>
                <input id="y2Field" type="number" placeholder=" Enter position for y2" name="y2">
            </div>
            <div>
                <label>Color: </label>
                <input id="colorLine" type="color">
            </div>
            <div>
                <input id="lineBtn" type="button" value="Click to draw the line">
            </div>
        </div>
        <a href="Circle.php"><button id="clearCanvas">CLICK TO CLEAR CANVAS</button></a>
    </body>
</html>