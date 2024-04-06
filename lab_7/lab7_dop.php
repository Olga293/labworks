<html>
    <head>
        <title>Лабораторная работа №7</title>
    </head>
    <body>
        <h1 align="center">
            Дополнительные задания для работы №7
        </h1>
        <h2 align="center">
            Вариант 2
        </h2>

        <h3>1</h3>
        <?php
            $n = 10;
            $arr = [];
            $arrA = [];
            $arrKey = ["title", "description", "price"];
            mt_srand((float)(microtime()*1000000));
            for ($i=0; $i<$n; $i++){
                for($j=0; $j<count($arrKey); $j++){
                    $random = 0 + 30 * mt_rand() / mt_getrandmax();
                    $arr[] = (int)$random;
                }
                $arrB = array_combine($arrKey, $arr);
                $arrA[$i] = $arrB;
                $arr = array();
            }
            for ($i=0; $i<$n; $i++){
                if($arrA[$i]["price"]>=20){
                    echo "<h2>".$arrA[$i]["title"]."</h2>";
                    echo "<p>".$arrA[$i]["description"]."</p>";
                    echo "<a href=''>".$arrA[$i]["price"]."</a>";
                    echo "<br><br>";
                }
                else{
                    echo "<h2><font color='green'>".$arrA[$i]["title"]."</font></h2>";
                    echo "<p><font color='green'>".$arrA[$i]["description"]."</font></p>";
                    echo "<a href=''><font color='green'>".$arrA[$i]["price"]."</font></a>";
                    echo "<br><br>";
                }
            }
        ?>
        <h3>2</h3>
        <?php
            $n = 8;
            $arr = [];
            $countPos = 0;
            $countDif = 0;
            $countSame = 0;
            $countEven = 0;
            mt_srand((float)(microtime()*1000000));
            echo "Массив: ";
            for ($i=0; $i<$n; $i++){
                $random = -10 + 20 * mt_rand() / mt_getrandmax();
                $arr[] = (int)$random;
                echo $arr[$i].", ";
            }
            for($i=0; $i<$n-1; $i++){
                if($arr[$i]>0 && $arr[$i+1]>0){
                    $countPos++;
                }
                if(($arr[$i]>0 && $arr[$i+1]<0) || ($arr[$i]<0 && $arr[$i+1]>0)){
                    $countDif++;
                }
                if(($arr[$i]>0 && $arr[$i+1]>0) || ($arr[$i]<0 && $arr[$i+1]<0)){
                    if(abs($arr[$i])>abs($arr[$i+1])){
                        $countSame++;
                    }
                }
                if((abs($arr[$i]%2)==0 && abs($arr[$i+1]%2)==1) || (abs($arr[$i]%2)==1 && abs($arr[$i+1]%2)==0)){
                    if(($i+1)%2==1){
                        $countEven++;
                    }
                }
            }
            echo"<br>Число соседств двух положительных чисел: ".$countPos;
            echo"<br>Число соседств двух чисел разного знака: ".$countDif;
            echo"<br>Число соседств двух чисел одного знака: ".$countSame;
            echo"<br>Число соседств чётного числа и нечётного c нечётным индексом: ".$countEven;
        ?>

        <h3>3</h3>
        <?php
            $n = 8;
            $arr = [];
            $arrEnd = [];
            mt_srand((float)(microtime()*1000000));
            echo "Массив: ";
            for ($i=0; $i<$n; $i++){
                $random = -10 + 20 * mt_rand() / mt_getrandmax();
                $arr[] = (int)$random;
                echo $arr[$i].", ";
            }
            for($i=0; $i<$n; $i++){
                if($arr[$i]>0){
                    $arr[$i] = $arr[$i]/2;
                }
                else{
                    $arr[$i] = $i+1;
                }
                $arrEnd[] = $arr[$i];
            }
            echo "<br>Новый массив: ";
            for ($i=0; $i<$n; $i++){
                echo $arrEnd[$i].", ";
            }
        ?>

        <h3>4</h3>
        <?php
            //Из заданного вектора A(3N) получите вектор B(N), очередная компонента которого равна среднему арифметическому очередной тройки компонент вектора А.  
            $n = 3;
            $n3 = 3*$n;
            $arrA = [];
            $arrB = [];
            $sum = 0;
            mt_srand((float)(microtime()*1000000));
            echo "Массив A: ";
            for ($i=0; $i<$n3; $i++){
                $random = -10 + 20 * mt_rand() / mt_getrandmax();
                $arrA[] = (int)$random;
                echo $arrA[$i].", ";
            }

            for($i=0; $i<$n3; $i++){
                $sum = $sum + $arrA[$i];
                //echo "<br>";
                //var_dump($sum);
                if(($i+1)%3 == 0){
                    $arrB[] = round($sum/3);
                    $sum = 0;
                }
            }

            echo "<br>Массив B: ";
            for($i=0; $i<count($arrB); $i++){
                echo $arrB[$i].", ";
            }
        ?>

        <h3>5</h3>
        <?php
            $n = 4;
            $x = pi();
            $a = 0;
            $b = 0;
            $c = 0;
            for($i=1; $i<=$n; $i++){
                $a = $a + pow(sin($x), $i);
                $b = $b + sin(pow($x, $i));
                $c = $c + pow(sin(pow($x, $i)), $i);
            }
            echo "a) ".$a;
            echo "<br>б) ".$b;
            echo "<br>в) ".$c;
        ?>

        <h3>6</h3>
        <?php
            $n = 8;
            $arrA = [];
            $arrB = [];
            $counter = 0;
            mt_srand((float)(microtime()*1000000));
            echo "Массив A: ";
            for ($i=0; $i<$n; $i++){
                $random = -10 + 20 * mt_rand() / mt_getrandmax();
                $arrA[] = (int)$random;
                echo $arrA[$i].", ";
            }
            for($i=0; $i<$n; $i++){
                if($arrA[$i]>5){
                    $arrB[] = $arrA[$i];
                    $counter++;
                }
            }
            if(count($arrB)!=0){
                echo "<br>Массив B: ";
                for($i=0; $i<count($arrB); $i++){
                    echo $arrB[$i].", ";
                }
                echo"<br>Колличетсво элементов массива В: ".$counter;
            }
            else{
                echo"<br>Нет таких элементов: ".$counter;
            }
        ?>

        <h3>7</h3>
        <?php
            $n = 8;
            $arrX = [];
            $arrY = [];
            $arrZ = [];
            mt_srand((float)(microtime()*1000000));
            echo "Массив X: ";
            for ($i=0; $i<$n; $i++){
                $random = -10 + 20 * mt_rand() / mt_getrandmax();
                $arrX[] = (int)$random;
                echo $arrX[$i].", ";
            }
            echo "<br>Массив Y: ";
            for ($i=0; $i<$n; $i++){
                $random = -10 + 20 * mt_rand() / mt_getrandmax();
                $arrY[] = (int)$random;
                echo $arrY[$i].", ";
            }
            for($i=0; $i<$n; $i++){
                $arrZ[] = $arrX[$i];
                $arrZ[] = $arrY[$i];
            }

            echo "<br>Массив Z: ";
            for($i=0; $i<count($arrZ); $i++){
                echo $arrZ[$i].", ";
            }
        ?>

        <h3>8</h3>
        <?php
            $n = 8;
            $arr = [];
            $counter = 0;
            $avgArif;
            $avgGeom;
            $arif = 0;
            $geom = 1;
            $counter = 0;
            mt_srand((float)(microtime()*1000000));
            echo "Массив A: ";
            for ($i=0; $i<$n; $i++){
                $random = -10 + 20 * mt_rand() / mt_getrandmax();
                $arr[] = (int)$random;
                echo $arr[$i].", ";
            }
            for($i=0; $i<$n; $i++){
                if($arr[$i]>0){
                    $counter++;
                    $arif = $arif + $arr[$i];
                    $geom = $geom * $arr[$i];
                }
            }
            if($counter>0){
                $avgArif = round($arif/$counter);
                $avgGeom = round(pow($geom, 1/$counter));
                echo "<br>Cреднее арифметическое: ".$avgArif;
                echo "<br>Cреднее геометрическое: ".$avgGeom;
            }
            else{
                echo "<br>Нет положительных элементов";
            }
        ?>

        <h3>9</h3>
        <?php
            //То же что и в задании 3...
        ?>

        <h3>10</h3>
        <?php
            $n = 8;
            $arr = [];
            $check = false;
            $arrPos = [];
            $arrNeg = [];

            mt_srand((float)(microtime()*1000000));
            echo "Массив: ";
            for ($i=0; $i<$n; $i++){
                $random = -10 + 20 * mt_rand() / mt_getrandmax();
                $arr[] = (int)$random;
                echo $arr[$i].", ";
            }
            for($i=0; $i<$n; $i++){
                if($arr[$i]==$arr[$i+1]){
                    $check = true;
                }
            }

            if($check){
                echo "<br>Елементы данного массива попарно не различны. Обнови страницу ;)";
            }
            else{
                for($i=0; $i<$n; $i++){
                    if($arr[$i]>0){
                        $arrPos[] = $arr[$i];
                    }
                    if($arr[$i]<0){
                        $arrNeg[] = $arr[$i];
                    }
                }

                if(count($arrNeg)){
                    $smallNeg = $arrNeg[0];
                    for($i=0; $i<count($arrNeg); $i++){
                        if($smallNeg < $arrNeg[$i]){
                            $smallNeg = $arrNeg[$i];
                        }
                    }
                    echo "<br>Hаибольший элемент из отрицательных: ".$smallNeg;
                }
                else{
                    echo "<br>Отрицательных элементов нет";
                }

                if(count($arrPos)){
                    $smallPos = $arrPos[0];
                    for($i=0; $i<count($arrPos); $i++){
                        if($smallPos > $arrPos[$i]){
                            $smallPos = $arrPos[$i];
                        }
                    }
                    echo "<br>Hаименьший элемент из положительных: ".$smallPos;
                }
                else{
                    echo "<br>Положительных элементов нет";
                }

                rsort($arr);
                $secondary = $arr[1];
                echo "<br>Bторой по величине элемент: ".$secondary;
            }
        ?>
        <?php
        echo "<br>HHHHHHHHHHHHHHHHHHHHHHHHHHHHH";
var_dump (gd_info());
?>
<?php
  $i = imageCreate(400, 300);
?>


    </body>
</html>