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

    // if submit button below person fields is pressed
    if(isset($_POST['submitPerson'])) {
        $personalNumber = $_POST['personalNumber'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];

        $sql = "INSERT INTO Persons(personalNumber,name,surname,phoneNumber)
                VALUES($personalNumber, '$name', '$surname', $phone)";

        mysqli_query($connection, $sql);

        mysqli_close($connection);

    }

    // if submit button below circle fields is pressed
    if(isset($_POST['submit'])) {
        $x = $_POST['x'];
        $y = $_POST['y'];
        $radius = $_POST['radius'];
        $personalNumberCircle = $_POST['personalNumberCircle'];

        // write sql query
        $sql = "INSERT INTO Circles(x,y,radius,creatorId) VALUES($x, $y, $radius, $personalNumberCircle)";

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

<div id="divCanvas" class="form-center">
  <canvas id='idCanvas' width="600", height="600"></canvas>
  <form action="Circle.php" method="POST" class="classPerson">
    <label>Personal number:</label>
    <input id="pNumber" type="number" placeholder="Enter personal number" name="personalNumber">
    <label>Name:</label>
    <input id="name" type="text" placeholder="Enter first name" name="name">
    <label>Surname:</label>
    <input id="surname" type="text" placeholder="Enter last name" name="surname">
    <label>Phone:</label>
        <input id="phone" type="number" placeholder="Enter phone number" name="phone">
    <input id="submitBtnPerson" type="submit" value='Submit' name="submitPerson">
    </form>
  <form action="Circle.php" method="POST" class="classForm">
    <label>X:</label>
    <input id="xField" type="number" placeholder="Enter position for x" name="x">
    <label>Y:</label>
    <input id="yField" type="number" placeholder="Enter position for y" name="y">
    <label>Radius:</label>
    <input id="radiusField" type="number" placeholder="Enter radius" name="radius">
      <!-- <label>Creator's personal number:</label>
      <input id="personalNumberCircle" type="number" placeholder="Enter personal number" name="personalNumberCircle"> -->
      <p></p>
    <input id="drawBtn" type="button" value="Click to draw the circle">
    <!-- <p></p>
    <input id="submitBtn" type="submit" value='Submit' name="submit">
  </form>
  <a id="display" href="DisplayFromDb.php">Click to see data</a>  -->
    <!-- <a href="displayFromDb.php">Circle</a> -->
</div>