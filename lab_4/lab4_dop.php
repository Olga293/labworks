<html>
    <head>
        <title>Лабораторная работа №4</title>
    </head>
    <body>
        <h1 align="center">
            Дополнительные задания для работы №4
        </h1>
        

        <!-- Сгенерировать 10 случайных чисел и найти среди них минимальное и максимальное -->
        <h3>Генерация 10 случайных чисел и нахождение максимального и минимального</h3>
        <?php
            $randArr = [];
            mt_srand((float)(microtime()*1000000));
            echo "Массив случайных чисел: ";
            for ($i=0; $i<=10; $i++){
                $random = 1 + 50.0 * mt_rand() / mt_getrandmax();
                $randArr[] = (int)$random;
                echo $randArr[$i].", ";
            }
            $min = min($randArr);
            $max = max($randArr);
            echo "<br>Минимальный элемент массива: $min";
            echo "<br>Максимальный элемент массива: $max";
        ?>
        

        <!-- Запрограммируйте формулы -->
        <h3><br>Формулы</h3>
        <table border="1" width="30%" cellpadding="5">
        <tr>
            <th>Значение функции<br>f(x)=2xe^(-|x|)</th>
            <th>Значение переменной<br>x∈[-5;5], Δx=0.25</th>
        </tr>
        <?php
            for($x=-5; $x<=5;$x+=0.25){
                $f_x = 2 * $x * exp(-abs($x));
                echo "<tr><td>$f_x</td>";
                echo "<td>$x</td></tr>";
            }
        ?>
        </table>
        
        <br><br>
        <table border="1" width="30%" cellpadding="5">
        <tr>
            <th>Значение функции<br>g(x)=cos(x)</th>
            <th>Значение переменной<br>x∈[-π;π], Δx=π/10</th>
        </tr>
        <?php
            for($x=-M_PI; $x<=M_PI;$x+=M_PI/10){
                $g_x = cos($x);
                echo "<tr><td>$g_x</td>";
                echo "<td>$x</td></tr>";
            }
        ?>
        </table>
        
        <br><br>
        <table border="1" width="30%" cellpadding="5">
            <?php
                $x = (1 + 50.0 * mt_rand() / mt_getrandmax())/2;
                $y = (1 + 50.0 * mt_rand() / mt_getrandmax())/2;
                $z = (1 + 50.0 * mt_rand() / mt_getrandmax())/2;
            ?>
            <tr>
                <th>x</th>
                <th>y</th>
                <th>z</th>
            </tr>
            <tr>
                <?php
                    echo "<td>$x</td>";
                    echo "<td>$y</td>";
                    echo "<td>$z</td>";
                ?>
            </tr>
        </table>

        <br>
        <table border="1" width="30%" cellpadding="5">
            <?php
                $a = round(sin((M_PI*$x)/4) * sqrt(abs(($y+log($z**2+1)))), 3);
                $b = $x * exp(-abs($x+$y)/2) + cos(log10(1+abs($y))) + pow($z, 1/3);
                for ($i=0; $i<=10; $i++){
                    $random = 1 + 50.0 * mt_rand() / mt_getrandmax();
                    $X[] = (int)$random;
                    $random = 1 + 50.0 * mt_rand() / mt_getrandmax();
                    $Y[] = (int)$random;
                }
                $c = sqrt(abs((max($Y)-min($Y))/(max($X)+min($X))));
                $d = ($y+3)/($z**2+1)*log(abs($x+1));
                $e = sin($x**2)-log(abs(cos($y)+$z+1));
                $f = sqrt((4*$b**3+log(($x+$x**4/$y**2),2))/($x+log(($b+$x),3)));
                $g = (pow((2*$x+3),1/3))/(pow((3*$x**5)/4*pow($x,cos($x)),1/7));
            ?>
            <tr>
                <th>a</th>
                <th>b</th>
                <th>c</th>
                <th>d</th>
                <th>e</th>
                <th>f</th>
                <th>g</th>
            </tr>
            <tr>
                <?php
                    echo "<td>$a</td>";
                    echo "<td>$b</td>";
                    echo "<td>$c</td>";
                    echo "<td>$d</td>";
                    echo "<td>$e</td>";
                    echo "<td>$f</td>";
                    echo "<td>$g</td>";
                ?>
            </tr>
        </table>


        <!-- Создайте и заполните таблицу -->
        <h3><br>Создайте и заполните таблицу</h3>
        <table border="1" width="30%" cellpadding="5">
            <tr>
                <th>Исходное число</th>
                <th>В 10-ной системе</th>
                <th>В 2-ной системе</th>
                <th>В 8-ной системе</th>
                <th>В 16-ной системе</th>
            </tr>
            <tr>
                <?php
                    $dec = 248;
                    $dec1 = decbin($dec);
                    $dec2 = decoct($dec);
                    $dec3 = dechex($dec);
                    echo "<td>$dec</td>";
                    echo "<td>-</td>";
                    echo "<td>$dec1</td>";
                    echo "<td>$dec2</td>";
                    echo "<td>$dec3</td>";
                ?>
            </tr>
            <tr>
                <?php
                    $bin = "10101";
                    $bin1 = base_convert($bin, 2, 10);
                    $bin2 = base_convert($bin, 2, 8);
                    $bin3 = base_convert($bin, 2, 16);
                    echo "<td>$bin</td>";
                    echo "<td>$bin1</td>";
                    echo "<td>-</td>";
                    echo "<td>$bin2</td>";
                    echo "<td>$bin3</td>";
                ?>
            </tr>
            <tr>
                <?php
                    $oct = "153";;
                    $oct1 = base_convert($oct, 8, 10);
                    $oct2 = base_convert($oct, 8, 2);
                    $oct3 = base_convert($oct, 8, 16);
                    echo "<td>$oct</td>";
                    echo "<td>$oct1</td>";
                    echo "<td>$oct2</td>";
                    echo "<td>-</td>";
                    echo "<td>$oct3</td>";
                ?>
            </tr>
            <tr>
                <?php
                    $hex = "6e";
                    $hex1 = base_convert($hex, 16, 10);
                    $hex2 = base_convert($hex, 16, 2);
                    $hex3 = base_convert($hex, 16, 8);
                    echo "<td>$hex</td>";
                    echo "<td>$hex1</td>";
                    echo "<td>$hex2</td>";
                    echo "<td>$hex3</td>";
                    echo "<td>-</td>";
                ?>
            </tr>
        </table>
    </body>
</html>