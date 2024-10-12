
<?php
    include_once'include/DataInfo.php'
    ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <body style="background-color:black;">
        <h1 style="color:red;text-align:center;font-family:verdana;">TV Shows Ratings-Rotten Tomatoes</h1>
        <hr>
    <head>
        <title>TV Shows Ratings-Rotten Tomatoes</title>
    </head>
    <body>

        <?php
            $sql="SELECT r.RTrating, tv.TVName, tv.TVGenre FROM tv_shows tv, ratings r WHERE tv.Rid=r.Rid GROUP BY tv.TVGenre;";
            $result= mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<td bgcolor=#0009876>" . "<br>" . "<font color=WHITE ; font size='5'; >" . $row['TVName'] . '   -   Rating: ' . $row['RTrating'] . '   -   Genre:' . $row['TVGenre']."<br>" . "</font>" . "</td>";

                }
            }

        ?>
    </body>
    </html>
