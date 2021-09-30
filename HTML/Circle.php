<?php

    // connect to database
    $connection_to_db = mysqli_connect('localhost', 'arnie', 'heyhey', 'first_assignment');

    // if connection fails
    if(!$connection_to_db){
        echo 'Error when trying to connect to database' . mysqli_connect_error();
    } // end if



    // if submit button is pressed
    if(isset($_POST['submit'])) {
        $x = mysqli_real_escape_string($connection_to_db, $_POST['x']);
        $y = mysqli_real_escape_string($connection_to_db, $_POST['y']);
        $radius = mysqli_real_escape_string($connection_to_db, $_POST['radius']);

        // create sql query
        $sql_query = "INSERT INTO circles(x,y,radius) VALUES($x, $y, $radius)";

        mysqli_query($connection_to_db, $sql_query);


    }


?>

<!DOCTYPE html>
<!-- Circle.php -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link rel="stylesheet" href="../CSS/Style.css">
  <script src="../JS/JQuery.js"></script>
  <script src="../JS/MathForKids.js"></script>
</head>
<body>
<!-- Create div -->
<div id="title">&#128007; MATHMAGICIANS &#128007;</div>
<!-- Create div with four links (four anchor elements) -->
<div class="topbar">
  <a href="Home.html">Home</a>
  <a href="Math%20for%20kids.html">Math for Kids</a>
  <a href="Calculator.html">Calculator</a>
  <a href="About%20Us.html">About Us</a>
  <a class="start" href="Circle.html">Circle</a>
</div>

<div id="divCanvas">
  <canvas id='idCanvas' width="300", height="300"></canvas>
  <form action="Circle.php" method="POST" class="classForm">
    <label>X:</label>
    <input id="xField" type="number" placeholder="Enter position for x" name="x">
    <label>Y:</label>
    <input id="yField" type="number" placeholder="Enter position for y" name="y">
    <label>Radius:</label>
    <input id="radiusField" type="number" placeholder="Enter radius" name="radius">
    <input id="drawBtn" type="button" value="Click to draw the circle">
    <p></p>
    <input id="submitBtn" type="submit" value='Submit' name="submit">
  </form>
</div>