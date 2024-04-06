    <?php
    $arr = [];
    mt_srand((float)(microtime()*1000000));
    echo "Матрица: <br>";
    $m = 6;
    $n = 6;
    for ($i=0; $i<$m; $i++){
        for($j=0; $j<$n; $j++){
            $random = 1 + 9 * mt_rand() / mt_getrandmax();
            $arr[$i][$j] = (int)$random;
            echo $arr[$i][$j]." ";
        }
        echo "<br>";
    }
    echo "Результат: <br>";


    $a = 2;
    $b = 3;

    for ($i=0; $i<$m-($a-1); $i++){
        for($j=0; $j<$n-($b-1); $j++){
            echo "Опорная точка:".$arr[$i][$j]."<br>" ;
            for ($k=0; $k<$a; $k++){
                for($l=0; $l<$b; $l++){
                    echo $arr[$k+$i][$l+$j]." ";
                }
                echo "<br>";
            }
        }
        echo "<br>";
    }
?>