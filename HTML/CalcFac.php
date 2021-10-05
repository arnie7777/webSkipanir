<?php include("base.php");?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../CSS/Calculator.css">
  <script src="../JS/Calculator.js"></script>
</head>
<!-- Call startAdd function AFTER body is loaded -->
<body onload="startFac()">
<!-- Create form element with input elements inside it -->
<form action="#">
  <input id="factorialField" class="inputField" type="number" placeholder="Enter number">
  <input id="factorialButton" class="buttons" type="button" value="Get result">
</form>
<p id="pTagId"></p>
<button id="minimizeBtn">Click to minimize button and input field</button>
<button id="normalBtn">Click to go back to normal size</button>
</body>
</html>
