<?php include("TopBar.php"); ?>
<head>
    <script src="../JS/coordinationGrid.js"></script>
</head>
<?php

// connect to database and check for errors
include('ConnToDb.php');

// if submit button below person fields is pressed
//if (isset($_POST['submitPerson'])) {
//    $personalNumber = $_POST['personalNumber'];
//    $name = $_POST['name'];
//    $surname = $_POST['surname'];
//    $phone = $_POST['phone'];
//
//    $sql = "INSERT INTO Persons(personalNumber,name,surname,phoneNumber)
//                VALUES($personalNumber, '$name', '$surname', $phone)";
//
//    mysqli_query($connection, $sql);
//
//    mysqli_close($connection);
//}

// if submit button below circle fields is pressed
if (isset($_POST['submit'])) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $radius = $_POST['radius'];
    $color = $_POST['color'];
//    $personalNumberCircle = $_POST['personalNumberCircle'];

    // write sql query
//    $sql = "INSERT INTO Circles(x,y,radius,creatorId) VALUES($x, $y, $radius, $personalNumberCircle)";
    $sql = "INSERT INTO Circles(x,y,radius, color) 
            VALUES($x, $y, $radius, '$color')";

    // make query
    mysqli_query($connection, $sql);

    // close connection to database
    mysqli_close($connection);
}
?> <!-- end php -->


<!-- Create div with four links (four anchor elements) -->
<!DOCTYPE html>
<html>
<body onload="coordinationGrid()">
<!-- <form action="Circle.php" method="POST" class="classPerson">
    <label>Personal number:</label>
    <input id="pNumber" type="number" placeholder="Enter personal number" name="personalNumber">
    <label>Name:</label>
    <input id="name" type="text" placeholder="Enter first name" name="name">
    <label>Surname:</label>
    <input id="surname" type="text" placeholder="Enter last name" name="surname">
    <label>Phone:</label>
    <input id="phone" type="number" placeholder="Enter phone number" name="phone">
    <input id="submitBtnPerson" type="submit" value='Submit' name="submitPerson">
</form> -->

<div id="divForm" class="form-center">
    <form action="Circle.php" method="POST" class="classForm">
        <h1>DRAW A CIRCLE</h1>
        <div>
            <label>X:</label>
            <input id="xField" type="number" placeholder=" Enter position for x" name="x">
        </div>
        <div>
            <label>Y:</label>
            <input id="yField" type="number" placeholder=" Enter position for y" name="y">
        </div>
        <div>
            <label>Radius:</label>
            <input id="radiusField" type="number" placeholder=" Enter radius" name="radius">
        </div>
        <div>
            <label>Color:</label>
            <input id="colorCircle" type="color" name="color">
        </div>
        <!-- <label>Creator's personal number:</label>
        <input id="personalNumberCircle" type="number" placeholder="Enter personal number" name="personalNumberCircle"> -->
        <div class="drawSubmit">
            <input id="drawBtn" type="button" value="Click to draw the circle">
            <input id="submitBtn" type="submit" value='Submit Circle' name="submit">
        </div>
<!--        <p></p>-->
<!--        <br>-->
<!--        <label>X1:</label>-->
<!--        <input id="x1Field" type="number" placeholder="Enter position for x1" name="x1">-->
<!--        <label>X2:</label>-->
<!--        <input id="x2Field" type="number" placeholder="Enter position for x2" name="x2">-->
<!--        <label>X3:</label>-->
<!--        <input id="x3Field" type="number" placeholder="Enter position for x3" name="x3">-->
<!--        <label>X4:</label>-->
<!--        <input id="x4Field" type="number" placeholder="Enter position for x4" name="x4">-->
<!--        <br>-->
<!--        <label>Y1:</label>-->
<!--        <input id="y1Field" type="number" placeholder="Enter position for y1" name="y1">-->
<!--        <label>Y2:</label>-->
<!--        <input id="y2Field" type="number" placeholder="Enter position for y2" name="y2">-->
<!--        <label>Y3:</label>-->
<!--        <input id="y3Field" type="number" placeholder="Enter position for y3" name="y3">-->
<!--        <label>Y4:</label>-->
<!--        <input id="y4Field" type="number" placeholder="Enter position for y4" name="y4">-->
<!--        <br>-->
<!--        <br>-->
<!--        <input id="lineBtn" type="button" value="Click to draw the lines">-->
    </form>
</div>
<button id="display"><a href="Home.php">CLICK TO SEE SUBMITTED DATA</a></button>
<!-- <input id="submitBtn" type="submit" value='Submit' name="submit">
<a id="display" href="DisplayFromDb.php">Click to see data</a> -->
<!-- <a href="displayFromDb.php">Circle</a> -->
<div id="divCanvas">
    <canvas id='idCanvas' width="600" height="600"></canvas>
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
<button id="clearCanvas"><a href="Circle.php">CLICK TO CLEAR CANVAS</a></button>
<!--<input id="clearCanvas" type="button" value="CLICK TO CLEAR CANVAS">-->
</body>
</html>