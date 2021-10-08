<!DOCTYPE html>
<html>
    <body>
        <?php
            $input = 9;
            $dp[0] = 0;
            $dp[1] = 1;
            $dp[2] = 2;

            for($i = 3; $i <= $input; $i++){
                $dp[$i] = $dp[$i-1] + $dp[$i-2];
            };
            
            echo '<br>', $dp[$input];
        ?>
    </body>
</html>

