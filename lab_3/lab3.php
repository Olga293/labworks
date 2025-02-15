<html>
    <head>
        <title>Лабораторная работа №3</title>
    </head>
    <body>
        <h1>
            Лабораторная работа №3
        </h1>
    </body>
</html>



<?php
//1.	Написать php-скрипты, использующие математические операции над переменными 
//(отрицание, сложение, вычитание, деление, умножение, деление по модулю).

 $a = 4;
 $b = 2;
 
 $c = -$a;
 echo "Смена знака переменной (a=$a): $c";

 $c = $a+$b;
 echo "<br>4+2=$c";

 $c = $a-$b;
 echo "<br>4-2=$c";

 $c = $a/$b;
 echo "<br>4/2=$c";

 $c = $a*$b;
 echo "<br>4*2=$c";

 $c = $a%$b;
 echo "<br>4%2=$c";

 $c = $a**$b;
 echo "<br>4**2=$c";
?>



<?php
//2.	Написать php-скрипты, использующие операции инкремента и декремента (постфиксные и префиксные)
// для числовых и символьных переменных. Пояснить полученные результаты.
 echo "<br><br>Инкремент";
 $a=10; 
 $b=$a++; 
 echo "<br>a=$a, b=$b";

 $a=10; 
 $b=++$a; 
 echo "<br>a=$a, b=$b";

 $a="aaa"; 
 $b=$a++; 
 echo "<br>a=$a, b=$b";

 $a="aaa"; 
 $b=++$a; 
 echo "<br>a=$a, b=$b";


 echo "<br>Декремент";
 $a=10; 
 $b=$a--; 
 echo "<br>a=$a, b=$b";

 $a=10; 
 $b=--$a; 
 echo "<br>a=$a, b=$b";
?>



<?php
//3.	Написать php-скрипты, использующие операции присваивания (в том числе и комбинированные) для различных типов переменных.
// Пояснить полученные результаты.
 $b = 4; 
 $a = $b + 5;
 echo "<br><br>a= $a , b= $b";

 $a = ($b=4) + 5;
 echo "<br>a= $a , b= $b";

 $a = 3; 
 $a += 5;
 echo "<br>a= $a";


//  // Пример использования оператора
//  $action = $_POST['action'] ?? 'default';
//  echo $action;
//  echo '<hr>';
//  // Пример выше аналогичен следующему коду
//  if (isset($_POST['action'])) {
//  $action = $_POST['action'];
//  } else {
//  $action = 'default';
//  }
//  echo $action;
?>



<?php
//4.	Написать php-скрипты, использующие операции конкатенации, присваивания с конкатенацией, сложения для символьных переменных.
// Пояснить полученные результаты.
 echo "<br><br>Конкатенация";
 $a = "Hello ";
 $b = "World!"; 
 $c = $a . "World!"; 
 echo "<br>$c";

 $a = "Hello ";
 $a .= "World!";
 echo "<br>$a";

 $a = "Hello ";
 $a .= $b;
 echo "<br>$a";

 $a = "Hello ";
 $b = "World!"; 
 $c = $a . $b; 
 echo "<br>$c";
?>



<?php
//5.	Написать php-скрипты, использующие побитовые операции (‘И’, ‘ИЛИ’, исключающееся ‘ИЛИ’, сдвиг влево <<, сдвиг в право >>)
// на примере числовых переменных. Результаты просчитать с помощью калькулятора в двоичной системе в ручную
// и сравнить с полученными резельтатами в программе. Пояснить полученные результаты.
 echo  "<br><br>Побитовые операции";
 $a=12; //в двоичной системе 12 - это 1100
 $b=$a|6; //Побитовая операция ‘ИЛИ’ (хотя бы 1)
 echo "<br>12|6 = $b"; // результат = 14
 
 $b=$a&6; //Побитовая операция ‘И’ (оба 1)
 echo "<br>12&6 = $b"; // результат = 4
 
 $b=$a^6; //Побитовая операция исключающее ‘ИЛИ’ (1 если разные)
 echo "<br>12^6 = $b"; // результат = 10
 
 $a=6;
 $b=$a<<1;
 echo "<br>$a<<1 = $b";

 $b=$a>>2;
 echo "<br>$a>>2 = $b";
?>



<?php
//6.	Написать php-скрипты, использующие операции сравнения (в том числе и операции эквивалентности). 
//Пояснить полученные результаты.
 echo "<br><br>Операции сравнения";
 $a=0;
 $b="";
 echo "<br>";
 var_dump($a===$b); // false

 $a=0;
 $b=0;
 echo "<br>";
 var_dump($a===$b); // true
 
 $a=0;
 $b="";
 echo "<br>";
 var_dump($a==$b); // true

 $a=0;
 $b=1;
 echo "<br>";
 var_dump($a!=$b); // true

 $a=1;
 $b=1;
 echo "<br>";
 var_dump($a<>$b); // false

 $a=1;
 $b=0;
 echo "<br>";
 var_dump($a<=>$b); // 1

 $a=1;
 $b=0;
 echo "<br>";
 var_dump($a>$b); // true

 $a=1;
 $b=0;
 echo "<br>";
 var_dump($a<=$b); // false
?>



<?php
// 7.	Написать php-скрипты, использующие логические операции. Пояснить полученные результаты. 
echo "<br><br>Логические операции";
 $a=10;
 $b=-5;
 echo '<br>Результат условия ($a>0 and $b>0) : ';
 var_dump(($a>0 and $b>0));
 
 echo '<br>Результат условия ($a>0 || $b>0) : ';
 var_dump(($a>0 || $b>0));

 $b=5;
 echo '<br>Результат условия ($a>0 xor $b>0) : ';
 var_dump(($a>0 xor $b>0));

 $a=0;
 echo '<br>Результат условия (!$a) : ';
 var_dump((!$a));
?>