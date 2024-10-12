
<?php
    include_once'include/DataInfo.php'
    ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <body style="background-color:black;">
        <h1 style="color:red;text-align:center;font-family:verdana;"> Independent Movies </h1>
        <hr>
    <head>
        <title>Independent Movies</title>
    </head>
    <body>

        <?php
            $sql="SELECT * FROM movies WHERE MGenre='Independent Movies';";
            $result= mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<td bgcolor=#0009876>" . "<br>" . "<font color=WHITE ; font size='5'; >" . $row['MName']. "<br>". "</font>" . "</td>";
                }
            }

        ?>
    </body>
    </html>
