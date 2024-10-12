
<?php
    include_once'include/DataInfo.php'
    ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <body style="background-color:black;">
        <h1 style="color:red;text-align:center;font-family:verdana;"> TV Shows from the 2000s </h1>
        <hr>

    <head>
        <title>2000's TVShows</title>
    </head>
    <body>

        <?php
            $sql="SELECT * FROM tv_shows WHERE PYear>1999 AND PYear<2020;";
            $result= mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<td bgcolor=#0009876>" . "<br>" . "<font color=WHITE ; font size='5'; >" . $row['TVName']. "<br>" . "</font>" . "</td>";                
                }
            }

        ?>
    </body>
    </html>
