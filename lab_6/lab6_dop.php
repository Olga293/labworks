<html>
    <head>
        <title>Лабораторная работа №6</title>
    </head>
    <body>
        <h1 align="center">
            Дополнительные задания для работы №6
        </h1>

        <h3>1</h3>
        <?php
            $arr = ["a", "b", "c", "d"];
            echo $arr[0]."+".$arr[1].", ".$arr[2]."+".$arr[3];
        ?>

        <h3>2</h3>
        <?php
            $arr = [];
            mt_srand((float)(microtime()*1000000));
            echo "Измерения температуры: ";
            for ($i=0; $i<=24; $i++){
                $random = 6 + 15 * mt_rand() / mt_getrandmax();
                $arr[] = (int)$random;
                echo $arr[$i].", ";
            }
            $min = min($arr);
            $max = max($arr);
            $avg = round(array_sum($arr)/count($arr));
            echo "<br>Минимальная температура: $min";
            echo "<br>Максимальная температура: $max";
            echo "<br>Средняя температкра: $avg";
        ?>

        <h3>3</h3>
        <?php
            $arr = [1, 3, 2];
            sort($arr);
            var_dump($arr);
            $str = implode(":", $arr);
            echo "<br>".$str;
        ?>

        <h3>4</h3>
        <?php
            $arr = ["AA", "BB", "CC", "DD", "EE"];
            var_dump($arr);
            echo "<br>";
            $arr1 = array_map("strtolower", $arr);
            var_dump($arr1);
            // $str = implode("|", $arr);
            // $str1 = strtolower($str);
            // $arr1 = explode("|", $str1);
            // echo "<br>";
            // var_dump($arr1);
        ?>

        <h3>5</h3>
        <?php
            $arr = [17, 23, 56, 6, 10];
            var_dump($arr);
            echo "<br>Произведение элементов массива: ".array_product($arr);
        ?>

        <h3>6</h3>
        <?php
            $arr1 = range(1,26);
            $arr2 = range(97,122);
            $arr2 = array_map("chr", $arr2);
            //var_dump($arr2);
            $arr3 = array_combine($arr2, $arr1);
            var_dump($arr3);
        ?>

        <h3>7</h3>
        <?php
            $arr = range(1,9);
            var_dump($arr);
            echo "<br>";
            $arr1 = array_chunk($arr, 3);
            var_dump($arr1);
        ?>

        <h3>8</h3>
        <?php
            $arr = [17, 23, 56, 6, 17, 78, 6, 45, 23, 10];
            var_dump($arr);
            echo "<br>";
            $arr1 = array_unique($arr);
            var_dump($arr1);
            echo "<br>";
            $arr1[1] = "!";
            $arr1[3] = "!!!";
            var_dump($arr1);
        ?>

        <h3>9</h3>
        <?php
            $a="eins";
            $b="zwei";
            $c="drei";
            $d="vier";
            $e="funf";
            $arr = ["один", "два", "три", "четыре", "пять"];
            $arr1 = compact("a", "b", "c", "d", "e");
            var_dump($arr1);
            echo "<br>";
            $arr2 = array_combine($arr1, $arr);
            var_dump($arr2);
        ?>

        <h3>10</h3>
        <?php
            $arr = [];
            mt_srand((float)(microtime()*1000000));
            echo "Матрица: <br>";
            for ($i=0; $i<3; $i++){
                for($j=0; $j<3; $j++){
                    $random = 10 + 90 * mt_rand() / mt_getrandmax();
                    $arr[$i][$j] = (int)$random;
                    echo $arr[$i][$j]." ";
                }
                echo "<br>";
            }

            var_dump($arr);
            $diff = array_sum($arr[0])-array_sum($arr[2]);
            echo "<br>Разность между суммами первой и последней строки: ".$diff;

            $columnMax = max(array_column($arr, 2));
            echo "<br>Максимальный элемент в последнем столбце: ".$columnMax;

            rsort($arr[2]);
            echo "<br>Элементы в последней строке по убыванию :<br>";
            var_dump($arr[2]);
        ?>

        <h3>11</h3>
        <?php
            $arr1 = ["banan", "apple", "avocado", "kiwi", "banan"];
            $arr2 = ["banan", "mango", "lemon", "kiwi", "banan"];
            var_dump($arr1);
            echo "<br>";
            var_dump($arr2);
            echo "<br><br>";

            echo "Значения, имеющиеся только в первом массиве и не имеющиеся во втором: <br>";
            $arr3 = array_diff($arr1, $arr2);
            var_dump($arr);
            echo "<br><br>";

            $arr4 = array_count_values($arr1);
            $banan = $arr4["banan"];
            echo "Количество повторений «banan» в первом массиве: ".$banan;
        ?>

        <h3>12</h3>
        <?php
            $A = [2,-10,17,35,0];
            var_dump($A);
            echo "<br>";
            $min = min($A);
            $max = max($A);
            $minKey = array_keys($A, $min);
            $maxKey = array_keys($A, $max);
            $A[$minKey[0]] = $max;
            $A[$maxKey[0]] = $min;
            var_dump($A);
        ?>
        
        <h3>Диана</h3>
        <?php
            $arr2 = range(100, 999);

            $arrSt= array_map("strval",$arr2);

            var_dump($arrSt);
            for($i=0;$i<count($arrSt);$i++) {
                if($arrSt[$i][0]!=$arrSt[$i][1] && $arrSt[$i][0]!=$arrSt[$i][2] && $arrSt[$i][1]!=$arrSt[$i][2]){
                    $arrResult[]=$arrSt[$i];
                }
            }
            $result = implode( ", ", $arrResult);
            echo $result;
        ?>

        <h3>Диана)</h3>
        <?php

            $arr10=array(1,2,1, 3,1,10, 2,10,1);
            $arr101=array_chunk($arr10,3);
            print_r($arr101);
            echo "<br>";

            $x=0;
            $y=0;
            for($i=1;$i<=count($arr101);$i++){
                echo "я тут";
                echo "<br>";
                for($j=0;$j<=$i-1;$j++) {
                    var_dump($arr101[$i][$j]);
                    echo "<br>";
                    $x=$x + $arr101[$i][$j];
                    echo "я здесь";
                    echo "<br>";
                }
            }


            var_dump($x);
            echo "<br>";
        ?>

        <?php
        // $a = 1234; // десятичное число
        // $a = 0123; // восьмеричное число (эквивалентно 83 в десятичной системе)
        // $a = 0o123; // восьмеричное число (начиная с PHP 8.1.0)
        // $a = 0x1A; // шестнадцатеричное число (эквивалентно 26 в десятичной системе)
        // $a = 0b11111111; // двоичное число (эквивалентно 255 в десятичной системе)
        // $a = 1_234_567; // десятичное число (с PHP 7.4.0)
        ?>
    </body>
</html>