<html>
    <head>
        <title>Лабораторная работа №4</title>
    </head>
    <body>
        <h1>
            Лабораторная работа №4
        </h1>
    </body>
</html>



<?php
 echo '<br>Модуль -3: ';
 var_dump (abs(-3));
 echo '<br>Округление 2.7 к ближайшему: ';
 var_dump (round(2.7));
 echo '<br>Округление 2.3 в большую: ';
 var_dump (ceil(2.3));
 echo '<br>Округление 3.9 в меньшую: ';
 var_dump (floor(3.9)); 

 $result = min(2, abs(-3), -3,ceil(2.3) );
 echo "<br>Минимальное значение = $result";

 $result = max(2, abs(-3), -3, ceil(2.3) );
 echo "<br>Максимальное значение = $result"; 

 $result = sqrt(4);
 echo "<br>Корень из 4 = $result";
?>



<?php
 echo "<br><br>Генерация случайных чисел<br>";
 mt_srand((float)(microtime()*1000000));
 for ($i=0; $i<=10; $i++){
    $random = 100.0 + 20.0 * mt_rand() / mt_getrandmax();
    echo (int)$random;
    echo "<br>";
 }
?>



<?php
 echo "<br>Константы";
 echo "<br>";
 var_dump(M_PI);
 echo "<br>";
 var_dump(M_PI_2);
 echo "<br>";
 var_dump(M_PI_4);
 echo "<br>";
 var_dump(M_1_PI);
 echo "<br>";
 var_dump(M_2_PI);
 echo "<br>";
 var_dump(M_2_SQRTPI);
 echo "<br>";
 var_dump(M_E);
 echo "<br>";
 var_dump(M_SQRT2);
 echo "<br>";
 var_dump(M_SQRT1_2);
 echo "<br>";
 var_dump(M_LOG2E);
 echo "<br>";
 var_dump(M_LOG10E);
 echo "<br>";
 var_dump(M_LN2);
 echo "<br>";
 var_dump(M_LN10);
 echo "<br>";
?>



<?php
 echo "<br>Проверка формата чисел";
 echo "<br>";
 var_dump(is_numeric(25 - 6));
 echo "<br>";
 var_dump(is_numeric("25"));
 echo "<br>";
 var_dump(is_numeric("25 - 6"));
 echo "<br>";
 var_dump(is_int(4));
 echo "<br>";
 var_dump(is_int(4.2));
 echo "<br>";
 var_dump(is_int("4"));
 echo "<br>";
 var_dump(is_float(4)); 
 echo "<br>";
 var_dump(is_float(4.0)); 
 echo "<br>";
 var_dump(is_float(M_PI));
 echo "<br>";
?>



<?php
 echo "<br>Преобразования систем счисления";
 echo "<br>";
 var_dump (bindec('1011'));
 echo "<br>";
 var_dump (hexdec('FF'));
 echo "<br>";
 var_dump (decbin('101'));
 echo "<br>";
 var_dump (dechex('101'));
 echo "<br>";
 var_dump (decoct('101'));
 echo "<br>";
 var_dump (base_convert('1011', 2,10));
 echo "<br>";
 var_dump (base_convert('FF', 16,20));
?>



<?php
 echo "<br><br>Экспоненциальные функции<br>";
 $a=exp(1); 
 echo "a = $a<br>";
 $a=pow(10,3); 
 echo "a = $a<br>";
 $a=10**3; 
 echo "a = $a<br>";
 $a=log10(100); 
 echo "a = $a<br>";
?>



<?php
 echo "<br>Тригонометрические функции<br>";
 $a=pi();
 echo "a=$a<br>";
 $agrad=rad2deg($a);
 echo "a(в градусах)=$agrad<br>";
 $arad=deg2rad($agrad);
 echo "a(в радианах)=$arad<br>";
 $sin=sin(pi()); 
 echo "sin(pi)=$sin<br>";
 $cos=cos(pi()/3); 
 echo "cos(pi)=$cos<br>";
 $tan=tan(pi()/4); 
 echo "tan(pi)=$tan<br>";
 $asin=asin($sin); 
 echo "asin(pi)=$asin<br>";
 $acos=acos($cos); 
 echo "acos(pi)=$acos<br>";
 $atan=atan($tan); 
 echo "atan(pi)=$atan<br>";
?>

