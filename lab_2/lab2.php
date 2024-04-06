<html>
    <head>
        <title>Лабораторная работа №2</title>
    </head>
    <body>
        <h1>
            Лабораторная работа №2
        </h1>
    </body>
</html>

<?php
    $Zima = "-1";
    $zima = -1;
    $_Zima = -1.0;

    $typeZima = gettype($Zima);
    $typezima = gettype($zima);
    $type_Zima = gettype($_Zima);

    echo "Значение переменнной \$Zima = $Zima. Это тип данных \"$typeZima\"<br />"; 
    echo "Значение переменнной \$zima = $zima. Это тип данных \"$typezima\"<br />"; 
    echo "Значение переменнной \$_Zima = $_Zima. Это тип данных \"$type_Zima\"<br />"; 
    echo "План \"Тень-2\" начнется через два-три месяца<br />";
?>


<?php
    $int_max=PHP_INT_MAX;
    echo "<br />Max integer: $int_max";
    $int_min=PHP_INT_MIN;
    echo "<br />Min integer: $int_min";
    $int_max32 = (2**32)/2-1;
    echo "<br />Max integer: $int_max32";
    //PHPinfo();
?>

<?php
    echo 'это простая строка';
    echo "<br>","<br>";
    echo 'Также вы можете вставлять в строки
    символ новой строки таким образом,
    поскольку это нормально';
    echo "<br>","<br>";

    // Выведет: Однажды Арнольд сказал: "I'll be back"
    echo 'Однажды он сказал: "I\'ll be back"';
    echo "<br>","<br>";

    // Выведет: Вы удалили C:\*.*?
    echo 'Вы удалили C:\\*.*?';
    echo "<br>","<br>";

    // Выведет: Это не вставит: \n новую строку
    echo 'Это не вставит: \n новую строку';
    echo "<br>","<br>";

    // Выведет: Переменные $expand также $either не подставляются
    echo 'Переменные $expand также $either не подстав-ляются';
?>

<?php
$V = 6;
$v = (int)8.5;
$_8 = "str";
$n = true;

$b = 0b011;

$arr ["number"] = "5";
$arr ["num"] = "6";

$ar = array('num' => 7, [3, 7, 8], 4, 7 => 5, 6, 7, 3 => 5, 7, 9);
//var_dump($ar);

$arrr [0][0] = 3;

echo "<br>";
echo $ar[11];

$ar = array('num' => array('name' => 'num', 'cit'), 'num2' => array('num', 'cit'));
?>
