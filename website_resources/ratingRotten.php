
<?php
    include_once'include/DataInfo.php'
    ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <body style="background-color:black;">
        <h1 style="color:red;text-align:center;font-family:verdana;"> Movies Ratings-Rotten Tomatoes </h1>
        <hr>
    <head>
        <title>Movies Ratings-Rotten Tomatoes</title>
    </head>
    <body>

        <?php
            $sql="SELECT r.RTrating, m.MName, m.MGenre FROM movies m, ratings r WHERE m.Rid=r.Rid GROUP BY m.MGenre;";
            $result= mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    
                    echo "<td bgcolor=#0009876>" . "<br>" . "<font color=WHITE ; font size='5'; >" . $row['MName'] . '   -   Rating: ' . $row['RTrating'] . '   -   Genre: ' . $row['MGenre']."<br>" . "</font>" . "</td>";
                }
            }

        ?>
    </body>
    </html>
