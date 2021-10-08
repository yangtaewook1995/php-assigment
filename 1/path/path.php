<!DOCTYPE html>
<html>
    <body>
        <?php
            $input = [[5,6], 1, [[5,1,1], [1,2,2], [1,3,3], [2,3,4], [2,4,5], [3,4,6]]];
            $row = array_fill(0, $input[0][0], 10000);
            $graph = array_fill(0, $input[0][0], $row);

            for($i = 0; $i < $input[0][0]; $i++){
                $graph[$i][$i] = 0;
            }

            for($i = 0; $i < $input[0][1]; $i++){
                $graph[$input[2][$i][0]-1][$input[2][$i][1]-1] = $input[2][$i][2];
            }

            for($i = 0; $i < $input[0][0]; $i++){
                for($j = 0; $j < $input[0][0]; $j++){
                    for($k = 0; $k < $input[0][0]; $k++){
                        if($graph[$j][$k] > $graph[$j][$i] + $graph[$i][$k]){ 
                            $graph[$j][$k] = $graph[$j][$i] + $graph[$i][$k]; 
                        }
                    }
                }
            }

            for($i = 0; $i < $input[0][0]; $i++){
                echo "<br>", $graph[$input[1]-1][$i] != 10000 ? $graph[$input[1]-1][$i] : "INF";
            }
        ?>
    </body>
</html>

