
<?php
    include_once'include/DataInfo.php'
    ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <body style="background-color:black;">
        <h1 style="color:red;text-align:center;font-family:verdana;"> Golden Globe Winning Movies </h1>
        <hr>
    <head>
        <title>Golden Globe Winning Movies</title>
    </head>
    <body>

        <?php
            $sql="SELECT m.MName, ma.AYear FROM movies m, movies_awards ma WHERE m.Mid=ma.Mid AND ma.AType='Golden Globe' ORDER BY ma.AYear DESC;";
            $result= mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<td bgcolor=#0009876>" . "<br>" . "<font color=WHITE ; font size='5'; >" . $row['MName'] . '   -   Year: ' . $row['AYear']. "<br>" . "</font>" . "</td>";
                }
            }

        ?>
    </body>
    </html>
