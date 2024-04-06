<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №8</title>
</head>
<body>
    <h1 align="center">
        Дополнительные задания для работы №8
    </h1>
    <h2 align="center">
        Вариант 2
    </h2>

    <h3>1</h3>
    <?php
        require_once "menu.inc.php";
    ?>

    <h3>2</h3>
    <?php
        $n = 3;
        include "shop.php";
        for($i = 0; $i < $n; $i++){
            include "goods.php";
        }
    ?>

    <h3>3</h3>
    <?php
        echo "5x + 2y = 7";
        echo "<br>2x + y = 9";
        include_once "cramerMethod.php"; //2 неизвестные
        $X = array(5, 2);
        $Y = array(2, 1);
        $result = array(7, 9);
        $xy = Cramer($X, $Y, $result);
        if(is_array($xy)){
            echo "<br>x = $xy[0], y = $xy[1]";
        }
        else{
            echo $xy;
        }
    ?>

    <h3>4</h3>
    <?php
        //a-переменная
        //n-число повторов
        function Сycle($a, $n){
            $result = 0;
            for($i = 0; $i < $n; $i++){
                $result = sqrt($a + $result);
            }
            return $result;
        };

        function Recursion($a, $n, $result){
            if($n != 0){
                $result =  sqrt($a + $result);
                return Recursion($a, $n - 1, $result);
            }
            else{
                return $result;
            }
        };

        $a = Сycle(4, 3);
        echo "Цикл: $a";
        $b = Recursion(4, 3, 0);
        echo "<br>Рекурсия: $b";
    ?>

    <h3>5</h3>
    <?php
        function Variable(){
            $argsArr = func_get_args();
            $result = 0;
            for ($i = 0; $i < count($argsArr); $i++){
                $result += $argsArr[$i] * $argsArr[$i+1];
            }
            return $result;
        }

        $a = Variable(1, 2, 3, 4);
        echo $a;
    ?>

    <h3>7</h3>
    <?php
        function Days($date1, $date2){
        $dateCreate1 = date_create($date1); //date_create чтобы сработало date_diff
        $dateCreate2 = date_create($date2);

        $interval = date_diff($dateCreate1, $dateCreate2);
        // var_dump($interval);

        switch (func_num_args()) {
            case '3':
                echo "<br>$interval->days дней разницы и один странный параметр";
                break;
            case '5':
                echo "<br>$interval->days дней разницы и два странных параметра";
                break;
            case '8':
                echo "<br>$interval->days дней разницы и шесть странных параметров";
                break;
            
            default:
                echo "<br>$interval->days дней разницы и что-то совсем странное<br>";
                break;
        }
    }

    function Main(){
        Days("16-12-2021", "25-12-2021", 1);
        Days("02-04-2002", "04-04-1996",1,2,3);
        Days("16-12-2021","17-12-2021",1,2,3,4,5,6);
        Days("01-01-2021","01-01-2022");
    }

    Main();
    ?>

    <h3>10</h3>
    <?php
        function divide_text(){ //функция, делящая текст на блоки в соответсвии с указанными разделителями
            $numargums = func_num_args();
            $text = func_get_arg(0);
            $delimiters = func_get_args();
            array_shift($delimiters);
            $result = multiexplode( $delimiters, $text);
            return $result;
        }
        function multiexplode( $delimiters, $text){
            $arr = explode(array_shift($delimiters),$text);
            if($delimiters != NULL){
                foreach($arr as $key => $sentence){
                    $arr[$key] = multiexplode($delimiters, $sentence); //рекурсивно вызываем саму же функцию, раз-бивающую текст на предложения
                }
            }
            return $arr;
        }
        $text='PHP – это широко используемый язык сценариев общего назначения с открытым исходным кодом.
         PHP это язык программирования, специально разработанный для написания web-приложений (сценариев), исполняющихся на Web-сервере.
          Синтаксис языка берет начало из C, Java и Perl. Преимуществом PHP является предоставление web-разработчикам
          возможности быстрого создания динамически генерируемых web-страниц. Также важным преимуществом языка PHP перед такими языками,
          как языков Perl и C за-ключается в возможности создания HTML документов с внедренными командами PHP.
          Еще одним из значительных преимуществ PHP является поддержка широкого круга баз данных.';
        $sentences=divide_text($text, '.','!');
        echo '<p><b>'.'Исходный текст:'.'</b><br>'.$text.'</p><hr>';
        foreach ($sentences as $sentence) {
            echo '<p>'.$sentence[0].'</p>';
        }
    ?>

    <?php
        function func(){
            static $a=1;
            return $a++;
        }
        for($i=0; $i<3; $i++){
            $res = func();
            echo "<br>$res";
        }

        $gl = 1;
        echo "<br><br>$gl";
        function aaa(){
            global $gl;
            $gl++;
        }
        aaa();
        echo"<br>$gl";
        
    ?>
</body>
</html>