<?php include("TopBar.php"); ?>
<html>
    <head>
        <title>Index</title>
        <script src="../JS/drawFromIndex.js"></script>
        <script src="../JS/coordinationGrid.js"></script>
    </head>
    <body onload="coordinationGrid()">
        <?php

        // connect to database and check for errors
        include('ConnToDb.php');


        // write sql query
        $sql = 'SELECT * FROM Circles';

        // make query
        $result_from_query = mysqli_query($connection, $sql);

        // fetch all results (as an array of associative arrays)
        $circles = mysqli_fetch_all($result_from_query, MYSQLI_ASSOC);

        // close connection to database
        mysqli_close($connection);

        // creating table (starting with table header)
        print("<table id='indexTable'>
                   <thead>
                       <tr>
                           <th>Circle ID</th>
                           <th>X</th>
                           <th>Y</th>
                           <th>Radius</th>
                           <th>Color</th>
                           <th id='action' colspan='4'>Actions</th>
                       </tr>
                   </thead>");

        // add records (rows) and fields (columns) from database to html table
        foreach($circles as $circle){
            print("<tr>");
            foreach($circle as $field){
                print("<td>$field</td>");
            }
            print("<td class='indexAction'><button class='indexButton'><a href='Read.php?id=" . $circle['id'] ."'>Read</a></button></td>");
            print("<td class='indexAction'><button class='indexButton'><a href='Update.php?id=" . $circle['id'] ."'>Update</a></button></td>");
            print("<td class='indexAction'><button class='indexButton'><a href='Delete.php?id=" . $circle['id'] ."'>Delete</a></button></td>");
            print("<td class='indexAction drawCircle'><button class='indexButton'>Draw</button></td>");

            print("</tr>");
        }
        print("</table>");

        print("<a href='Circle.php'><button id='indexCreate'>CREATE<br>NEW<br>CIRCLE</button></a>");

        print("<canvas id='idCanvas' class='indexCanvas' width='600' height='600'></canvas>");

        ?> <!-- end php -->
    </body>
</html>