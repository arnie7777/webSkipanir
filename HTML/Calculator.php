<?php include("base.php");?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/Calculator.css">
</head>
<body>
<!-- Create table where the rows inside table body is clickable, and takes the user to another HTML document-->
<table>
  <thead>
  <tr>
    <th>Arithmetic Text</th>
    <th>Arithmetic Sign</th>
  </tr>
  </thead>
  <tbody>
  <tr onclick="window.location='CalcAdd.php';">
    <td>Plus</td>
    <td><img class="imgInTable" src="../IMG/Plus.jpeg" alt="Picture of plus sign"></td>
  </tr>
  <tr onclick="window.location='CalcSub.php';">
    <td>Minus</td>
    <td><img class="imgInTable" src="../IMG/Minus.jpg" alt="Picture of minus sign"></td>
  </tr>
  <tr onclick="window.location='CalcFac.php';">
    <td>Factorial</td>
    <td><img class="imgInTable" src="../IMG/Factorial.png" alt="Picture of multiply sign"></td>
  </tr>
  </tbody>
</table>
</body>
</html>
