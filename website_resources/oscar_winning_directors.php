
<?php
    include_once'include/DataInfo.php'
    ?>
    <!DOCTYPE html>
    <html lang="en-US">
    <body style="background-color:black;">
        <h1 style="color:red;text-align:center;font-family:verdana;"> Oscar Winning Directors </h1>
        <hr>
    <head>
        <title>Oscar Winning Directors</title>
    </head>
    <body>

        <?php
            $sql="SELECT d.DName, da.AYear FROM directors d , directors_awards da WHERE d.Did=da.Did AND da.AType='Oscar' ORDER BY da.AYear DESC;";
            $result= mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);

            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "<td bgcolor=#0009876>" . "<br>" . "<font color=WHITE ; font size='5'; >" . $row['DName'] . '   -   Year: ' . $row['AYear']. "<br>" . "</font>" . "</td>";
                }
            }

        ?>
    </body>
    </html>
