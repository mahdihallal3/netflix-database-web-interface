
<?php
    include_once'include/DataInfo.php'
    ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <body style="background-color:black;">
        <h1 style="color:red;text-align:center;font-family:verdana;"> Emmy Winning Actors </h1>
        <hr>
    <head>
        <title>Emmy Winning Actors</title>
    </head>
    <body>

        <?php
            $sql="SELECT a.AName, aa.AYear FROM actors a , actors_awards aa WHERE a.Aid=aa.Aid AND aa.AType='Emmy' ORDER BY aa.AYear DESC;";
            $result= mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<td bgcolor=#0009876>" . "<br>" . "<font color=WHITE ; font size='5'; >" . $row['AName'] . '   -   Year: ' . $row['AYear']. "<br>" . "</font>" . "</td>";
                }
            }

        ?>
    </body>
    </html>
