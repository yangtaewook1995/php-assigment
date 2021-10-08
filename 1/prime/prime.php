<!DOCTYPE html>
<html>
    <body>
        <?php
            $input = [3, 16];
            function isPrime($num) {
                $cnt = true;
                for($i = 2; $i <= sqrt($num); $i++){
                    if($num % $i == 0) {
                      $cnt = false;
                    };
                };
                return $cnt;
            };
            
            for($j = $input[0]; $j <= $input[1]; $j++){
                if(isPrime($j)){
                    echo '<br>', $j;
                };
            };
        ?>
    </body>
</html>

