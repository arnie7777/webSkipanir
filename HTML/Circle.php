<?php



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
  <form action="POST" class="classForm">
    <label>X:</label>
    <input id="xField" type="number" placeholder="Enter position for x">
    <label>Y:</label>
    <input id="yField" type="number" placeholder="Enter position for y">
    <label>Radius:</label>
    <input id="radiusField" type="number" placeholder="Enter radius">
    <input id="drawBtn" type="button" value="Click to draw the circle">
  </form>
</div>