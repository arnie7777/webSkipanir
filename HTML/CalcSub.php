<?php include("TopBar.php");?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/Calculator.css">
  <script src="../JS/Calculator.js"></script>
</head>
<!-- Call startAdd function AFTER body is loaded -->
<body onload="startSub()">
<!-- Create form element with p and input elements inside it -->
<form action="#">
  <input id="subtractionField1" class="inputField" type="number" placeholder="Enter first number">
  <p class="sign">-</p>
  <input id="subtractionField2" class="inputField" type="number" placeholder="Enter second number">
  <input id="subtractionButton" class="buttons" type="button" value="Get result">
</form>
<p id="pTagId"></p>
</body>
</html>
