<!DOCTYPE html>
<html>
    <head>
        <title>Chessboard</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>

    <body>

        <table>
            
                <?php

                for ($j = 0; $j <= 7; $j++){
                if(($j % 2) == 1){
                $check =1;
                }
                else{
                $check=0;
                }
                ?>
            <tr>    
                <?php
                for ($i = 0; $i <= 7; $i++) {
                    if(($i % 2) == $check) {
                       ?>
                       
                       <td class="wit">w</td>
                       
                       <?php
                    }else{
                       ?>
                       
                       <td class="black">b</td>
                       
                       <?php
                    }
                }
                       ?>
            </tr>
                       <?php

            }
                       ?>             

            
        </table>

    </body>

</html>