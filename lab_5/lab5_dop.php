<html>
    <head>
        <title>Лабораторная работа №5</title>
    </head>
    <body>
        <h1 align="center">
            Дополнительные задания для работы №5
        </h1>
        
        <h3>1</h3>
        <?php
            $mainstrmain_str = "";
            mt_srand((float)(microtime()*1000000));
            for ($i=0; $i<=10; $i++){
                $random = (int)(97 + 26 * mt_rand() / mt_getrandmax());
                $mainstrmain_str .= chr($random);
            }
            echo "Строка из случайных символов: ".$mainstrmain_str;
            $mainstrsub_str = "a";
            echo "<br>Подстрока символов: ".$mainstrsub_str;
            if(strpos($mainstrmain_str, $mainstrsub_str) >= round(strlen($mainstrmain_str)/2)){
                echo "<br>Последовательность найдена";
            }
            else{
                echo "<br>Последовательность ненайдена";
            }
        ?>

        <h3>2</h3>
        <?php
            echo "Строка из случайных символов: ".$mainstrmain_str;
            $mainstrsub_str = "a";
            echo "<br>Подстрока символов: ".$mainstrsub_str;
            if(strpos($mainstrmain_str, $mainstrsub_str)){
                $charBefor = strpos($mainstrmain_str, $mainstrsub_str)-1;
                echo "<br>Символ, стоящий перед подстрокой: ".$mainstrmain_str[$charBefor];
                $charAfter = strpos($mainstrmain_str, $mainstrsub_str) + strlen($mainstrsub_str);
                echo "<br>Символ, стоящий после подстроки: ".$mainstrmain_str[$charAfter];
            }
            else{
                echo "<br>Последовательность ненайдена";
            }
        ?>

        <h3>3</h3>
        <?php
            echo "Строка из случайных символов: ".$mainstrmain_str;
            $n = (int)(1 + round(strlen($mainstrmain_str)/2) * mt_rand() / mt_getrandmax());
            echo "<br>n = ".$n;
            $mainstrfirst_str = substr($mainstrmain_str,0,$n);
            echo "<br>Подстрока первых n символов: ".$mainstrfirst_str;
            $mainstrlast_str = substr($mainstrmain_str,-$n);
            echo "<br>Подстрока последних n символов: ".$mainstrlast_str;

            if(strcmp($mainstrlast_str, $mainstrfirst_str)){
                echo "<br>Строки равны";
            }
            else{
                echo "<br>Строки не равны";
            }
        ?>

        <h3>4</h3>
        <?php
            $main_str = $mainstrmain_str;
            echo "Строка из случайных символов: ".$main_str;
            $sub_str = "a";
            echo "<br>Подстрока символов: ".$sub_str;
            if((strpos($mainstrmain_str, $sub_str) <= round(strlen($main_str)/2)) && strpos($mainstrmain_str, $sub_str)){
                echo "<br>Последовательность найдена";
            }
            else{
                $last3 = substr($main_str,-3);
                echo "<br>Последние три символа строки: ".$last3;
            }
        ?>

        <h3>5</h3>
        <?php
            echo "Строка из случайных символов: ".$main_str;
            $sub_str = "a";
            echo "<br>Подстрока символов: ".$sub_str;
            if(strpos($mainstrmain_str, $sub_str)){
                $random = (int)(-10 + 27 * mt_rand() / mt_getrandmax());
                echo "<br>Сгенерированное случайное число: ".$random;
            }
            else{
                echo "<br>Длина подстроки: ".strlen($sub_str);
            }
        ?>

        <h3>6</h3>
        <?php
            $str = "abc abc abc";
            echo "Дана строка: ".$str;
            $firstB = strpos($str, "b");
            echo "<br>Позиция первой буквы 'b': ".$firstB;
            $lastB = strrpos($str, "b");
            echo "<br>Позиция последней буквы 'b': ".$lastB;
            $findB3 = strpos($str, "b", ($firstB + 1));
            echo "<br>Позиция буквы 'b' начиная с позиции 3: ".$findB3;
        ?>

        <h3>7</h3>
        <?php
            $str = "aaa aaaaa aaa aaaa aaa";
            echo "Дана строка: ".$str;
            $firstSpace = strpos($str, " ");
            $secondSpace = strpos($str, " ", $firstSpace + 1);
            echo "<br>Позиция второго пробела: ".$secondSpace;
        ?>

        <h3>8</h3>
        <?php
            $str = "a";
            echo "Дана буква: ".$str;
            $lowStr = strtolower($str);
            if($str===$lowStr){
                echo "<br>Регистр буквы: нижний";
            }
            else{
                echo "<br>Регистр буквы: верхний";
            }
            $str = "A";
            echo "<br><br>Дана буква: ".$str;
            $lowStr = strtolower($str);
            if($str===$lowStr){
                echo "<br>Регистр буквы: нижний";
            }
            else{
                echo "<br>Регистр буквы: верхний";
            }
        ?>

        <h3>9</h3>
        <?php
            $str = "слова слова слова.";
            echo "Дана строка: ".$str;
            $str1 = rtrim($str, ".");
            echo "<br>Строка без точки: ".$str1;
            $str2 = $str1.".";
            echo "<br>Строка с точкой: ".$str2;
        ?>

        <h3>10</h3>
        <?php
            $str = "madam";
            echo "Дана строка: ".$str;
            $str1 = strrev($str);
            if($str==$str1){
                echo "<br>Слово является палиндромом";
            }
            else{
                echo "<br>Слово не является палиндромом";
            }

            $str = "madams";
            echo "<br><br>Дана строка: ".$str;
            $str1 = strrev($str);
            if($str==$str1){
                echo "<br>Слово является палиндромом";
            }
            else{
                echo "<br>Слово не является палиндромом";
            }
        ?>

        <h3>11</h3>
        <?php
            $str = "as dfg h";
            echo "Строка из случайных символов: ".$str;
            $arrFromString = str_split($str);
            shuffle($arrFromString);
            $newStr = implode("", $arrFromString);
            echo "<br>Перемешанная строка: ".$newStr;
        ?>

        <h3>12</h3>
        <?php
            //$strLen = mt_rand(100);
            $strLen  = (int)(100 + 100 * mt_rand() / mt_getrandmax());
            $str = "";
            for ($i=0; $i<=$strLen; $i++){
                $random = (int)(97 + 26 * mt_rand() / mt_getrandmax());
                $str .= chr($random);
            }
            echo "Строка: ".$str;
            //$subStrArr = [];
            $subStrLen = floor(0.1 * $strLen);
            echo "<br>Полученные подстроки:";
            //var_dump($subStrLen);
            
            while(strlen($str)>=$subStrLen){
                $subStr = substr($str, 0, $subStrLen);
                echo "<br>";
                echo $subStr;
                //$subStrArr[] = $subStr;
                $str = substr($str, $subStrLen);
                $subStrLen = round($subStrLen + 0.15*$subStrLen);
            }

            // echo "<br>";
            // var_dump($subStrArr);
        ?>

        <h3>13</h3>
        <?php
            $str = "1234567890";
            echo "Дана строка: ".$str;
            $str1 = chunk_split($str, 2, "|");
            echo "<br>Строка после разбиения: ".$str1;
            $arr = explode('|', $str1, -1);
            echo "<br>";
            var_dump($arr);
        ?>

        <h3>14</h3>
        <?php
            $str = "1234567890";
            echo "Дана строка: ".$str;
            $str1 = chunk_split($str, 2, "-");
            $str2 = rtrim($str1, "-");
            echo "<br>Строка после преобразования: ".$str2;
        ?>

        <h3>15</h3>
        <?php
            $str = "12345678";
            echo "Дана строка: ".$str;
            $str1 = strrev($str);
            $str2 = chunk_split($str1, 3, " ");
            $str3 = strrev($str2);
            echo "<br>Строка после преобразования: ".$str3;
        ?>

        <h3>16</h3>
        <?php
            $str = "I--love-you";
            echo "Дана строка: ".$str;
            $str1 = substr($str, 1);
            $str2 = str_replace("-y", "--y", $str1);
            echo "<br>Строка после преобразования: ".$str2;
        ?>
    </body>
</html>