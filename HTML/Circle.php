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
<?php

    // connect to database and check for errors
    include('ConnToDb.php');

    // if submit button is pressed
    if(isset($_POST['submit'])) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $radius = $_POST['radius'];

        // write sql query
        $sql = "INSERT INTO circles(x,y,radius) VALUES($x, $y, $radius)";

        // make query
        mysqli_query($connection, $sql);

        // close connection to database
        mysqli_close($connection);
    }
?> <!-- end php -->


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
  <a href="DisplayFromDb.php">Click to see data</a>
    <!-- <a href="displayFromDb.php">Circle</a> -->
</div>