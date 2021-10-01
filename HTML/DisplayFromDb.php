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
        include('ConnToDb');

        // write sql query
        $sql = 'SELECT * FROM circles';

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
                           <th>id</th>
                           <th>x</th>
                           <th>y</th>
                           <th>radius</th>
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