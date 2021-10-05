<?php include("base.php");?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/Calculator.css">
    <script src="../JS/Calculator.js"></script>
</head>
<!-- Call startAdd function AFTER body is loaded -->
<body onload="startAdd()">
<!-- Create form element with p and input elements inside it -->
<form action="#">
    <input id="additionField1" class="inputField" type="text" placeholder="Enter first number">
    <p class="sign">+</p>
    <input id="additionField2" class="inputField" type="text" placeholder="Enter second number">
    <input id="additionButton" class="buttons" type="button" value="Get result">
</form>
<p id="pTagId"></p>
</body>
</html>
