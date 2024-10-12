
<?php
    include_once'include/DataInfo.php'
    ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <body style="background-color:black;">
        <h1 style="color:red;text-align:center;font-family:verdana;"> Emmy Winning TV Shows </h1>
        <hr>
    <head>
        <title>Emmy Winning TV Shows</title>
    </head>
    <body>

        <?php
            $sql="SELECT tv.TVName, tva.AYear FROM tv_shows tv, tv_show_awards tva WHERE tv.TVid=tva.TVid AND tva.AType='Emmy' ORDER BY tva.AYear DESC;";
            $result= mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<td bgcolor=#0009876>" . "<br>" . "<font color=WHITE ; font size='5'; >" . $row['TVName'] . '   -   Year: ' . $row['AYear']. "<br>" . "</font>" . "</td>";

                }
            }

        ?>
    </body>
    </html>
