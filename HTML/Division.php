<?php include("TopBar.php");?>
<html>
    <head>
        <title>Division</title>
    </head>
    <!-- Call startAdd function AFTER body is loaded -->
    <body onload="division()">
        <!-- Create form element with h1, h3, input and div elements inside it-->
        <form class="problem" action="#">
          <h1>Division</h1>
          <h3 id="question"></h3>
          <input class="inputBox" id="inputField" type="text" placeholder="Enter guess">
          <input class="checkBox" id="checkButton" type="button" value="Check">
          <div class="answer" id="guess"></div>
          <input class="newQuestion" type="button" value="New problem" onclick="division()">
          <input class="seeResults" type="button" value="See guesses" onclick="seeResults()">
        </form>
        <div class="problem" id="results"></div>
        <div class="problem" id="total"></div>
    </body>
</html>