<?php include("TopBar.php");?>
<html>
    <head>
        <title>CalcFac</title>
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
    </body>
</html>
