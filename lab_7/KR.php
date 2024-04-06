<html>
    <head>
        <title>Контрольная работа</title>
    </head>
    <body>
        <h1 align="center">
            Вариант №2
        </h1>
        <h2 align="center">
            Брикса Ольга
        </h2>

        <?php
            //1
            //a

            //2
            //b, d($var_dump)
        ?>

        <h3>3</h3>
        <?php
            //3
            $a = 67;// десятичное число
            $b = 0103;// восьмеричное число
            $c = 0x43;// шестнадцатеричное число
            $d = 0b01000011;// двоичное число
            var_dump($a);
            var_dump($b);
            var_dump($c);
            var_dump($d);
        ?>

        <h3>4</h3>
        <?php
            //4
            $a = 125**(1/3);
            $b = 243**(1/5);
            $c = $a % $b;
            var_dump($c);
        ?>

        <h3>5</h3>
        <?php
            //5
            $x = 128>>5;
            var_dump($x);
        ?>

        <h3>6</h3>
        <?php
            //6
            mt_srand((float)(microtime()*1000000));
            for ($i=0; $i<3; $i++){
                $random = 500 + 200 * mt_rand() / mt_getrandmax();
                $arr[] = (int)$random/100;
                echo $arr[$i].", ";
            }
            
            $avg2 = (array_sum($arr)/count($arr))*1000;
            $avg2 = (int)$avg2/1000;
            echo "<br>".$avg2;
        ?>

        <h3>7</h3>
        <?php
            //7
            $a = 1;
            $x = 2;
            $y = 3;
            $m = 4;
            $T = 5;
            $f = (1/$a*sqrt(2*M_PI))*exp(-(($x-$m)**2/2*($a**2))) + cos(log(30*$T/($x+$y), 2));
        ?>

        <h3>8</h3>
        <?php
            //8
            $strLen  = (int)(30 + 20 * mt_rand() / mt_getrandmax());
            $str = "";
            for ($i=0; $i<$strLen; $i++){
                $random = (int)(97 + 26 * mt_rand() / mt_getrandmax());
                $str .= chr($random);
            }
            echo "<br>Строка: ".$str;
            echo "<br>Длина строки: ".$strLen;
            $ost = $strLen%3;
            echo "<br>Остаток: ".$ost;

            // $del = $strLen/3;
            // echo $del;

            if($strLen%3 == 0){
                $strSplit = chunk_split($str, $strLen/3, "|");
                echo "<br>Строка: ".$strSplit;
                var_dump($strSplit);
            }
            else{
                $newLen = $strLen-$ost + 3;
                echo "<br>Длина строки (новая): ".$newLen;
                $strNew = str_pad($str, $newLen, "%", STR_PAD_LEFT);
                echo "<br>Строка%: ".$strNew;
                $strSplit = chunk_split($strNew, $newLen/3, "|");
                echo "<br>Строка: ".$strSplit;
            }
            
            $arrOfPart = explode("|", $strSplit); ////////////////////////////
            $str1 = $arrOfPart[0];
            $str2 = $arrOfPart[1];
            $str3 = $arrOfPart[2];

            $str1_1 = $str1[strlen($str1)-2];
            $str1_2 = $str1[strlen($str1)-1];
            $str1[strlen($str1)-2] = strtoupper($str1_2);
            $str1[strlen($str1)-1] = strtoupper($str1_1);
            echo "<br>Первая часть: ".$str1;

            for ($i=0; $i<strlen($str2); $i++){
                $random = (int)(1 + 9 * mt_rand() / mt_getrandmax());
                $str2new .= strval($random);
            }
            $str2 = $str2new;
            echo "<br>Вторая часть: ".$str2;

            $code1 = ord(substr($str1, -1));
            $str3[1] = chr($code1-5);
            echo "<br>Третья часть: ".$str3;

            echo "<br>Итоговая строка: ".$str1.$str2.$str3;
        ?>

        <h3>9</h3>
        <?php
            //9
            $chem = 4;
            $math = 8;
            $sum = $chem + $math;
            echo $sum;
            $result = $math<4||$chem<4 ? "двоечник" : ($sum>15 ? "отличник" : "тихий троечник");
            var_dump ($result);
        ?>

        <h3>10</h3>
        <?php
            //10
            $arr = range(15, 23, 2);
            var_dump($arr);
            $arr1 = array_slice($arr, 1, count($arr)-1);
            echo "<br>";
            var_dump($arr1);
            $sum = array_sum($arr1);
            echo "<br>";
            var_dump($sum);
        ?>
    </body>
</html>