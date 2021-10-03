<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link rel="stylesheet" href="../CSS/Calculator.css">
        <link rel="stylesheet" href="../CSS/Style.css">

    </head>
    <body>

        <?php

        // connect to database and check for errors
        include('ConnToDb.php');


        // write sql query
        $sql = 'SELECT  Circles.id, Circles.x, Circles.y, Circles.radius, Persons.name, Persons.surname
                FROM Persons
                LEFT JOIN Circles
                ON Persons.PersonalNumber = Circles.creatorId;';

        // make query
        $result_from_query = mysqli_query($connection, $sql);

        // fetch all results (as an array of associative arrays)
        $circles = mysqli_fetch_all($result_from_query, MYSQLI_ASSOC);


        // close connection to database
        mysqli_close($connection);


        // creating table (starting with table header)
        print("<table>
                   <thead>
                       <tr>
                           <th>Circle ID</th>
                           <th>X</th>
                           <th>Y</th>
                           <th>Radius</th>
                           <th>Creator's name</th>
                           <th>Creator's surname</th>
                       </tr>
                   </thead>");

        // add records (rows) and fields (columns) from database to html table
        foreach($circles as $circle){
            print("<tr>");
            foreach($circle as $field){
                print("<td>$field</td>");
            }
            print("</tr>");
        }
        print("</table>");

        ?> <!-- end php -->

    </body>
</html>