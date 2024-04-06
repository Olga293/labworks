<html>
    <head>
        <title>Лабораторная работа №6</title>
    </head>
    <body>
        <h1>
            Лабораторная работа №6
        </h1>

        <!-- Создание массива и извлечение информации из него -->

        <?php
            $names[0]="Александр";
            $names[1]="Николай";
            $names[2]="Яков";
            var_dump ($names);
            echo "<br>";
            list($alex, $nick, $yakov)=$names;
            var_dump ($alex);
            echo "<br>";
            var_dump ($nick);
            echo "<br>";
            var_dump ($yakov);
            echo "<br><br>";
        ?>

        <?php
            $arr = array(); // Создает пустой массив
            $arr2 = array("Иванов","Петров","Сидоров"); // Со-здает список с тремя элементами. Индексы начинаются с нуля
            $arr3 = array("Иванов"=>"Иван", "Петров"=>"Петр", "Сидоров"=>"Сидор"); // Создает ассоциативный массив с тремя элементами
            $arr4 = array("name"=>"Иванов", "age"=>"24", "email"=>"ivanov@mail.ru"); // Создает многомерный ас-социативный массив
            $arr4 = array("name"=>"Петров", "age"=>"34", "email"=>"petrov@mail.ru");
            $arr4 = array("name"=>"Сидоров", "age"=>"47", "email"=>"sidorov@mail.ru");
            var_dump ($arr);
            echo "<br>";
            var_dump ($arr2);
            echo "<br>";
            var_dump ($arr3);
            echo "<br>";
            var_dump ($arr4);
            echo "<br><br>";
        ?>


<!-- Операции над массивами -->
<!-- Сортировка массивов. -->
        
        <?php
            $A=array("a"=>"Zero","b"=>"Weapon","c"=>"Al-pha","d"=>"Processor");
            var_dump ($A);
            echo "<br>";
            asort($A); // по возрастанию
            var_dump($A);
            echo "<br>";
            arsort($A); // по убыванию
            var_dump($A);
            echo "<br><br>";

            ksort($A); // по ключам (возрастание)
            var_dump($A);
            echo "<br>";
            krsort($A); // по ключам (убывание)
            var_dump($A);
            echo "<br><br>";
        ?>

        <?php
            // Функция сравнения
            // Функция сравнения должна возвращать целое, которое меньше, равно или больше нуля, если первый аргумент является соответственно меньшим, равным или большим, чем второй.
            function cmp($a, $b) {
                if ($a == $b) {
                    return 0;
                }
                return ($a < $b) ? -1 : 1;
            }

            // Сортируемый массив
            $array = array('a' => 4, 'b' => 8, 'c' => -1, 'd' => -9, 'e' => 2, 'f' => 5, 'g' => 3, 'h' => -4);
            print_r($array);
            echo "<br>";

            // Сортируем и выводим получившийся массив  
            // uasort($array, 'cmp'); по ключам
            uasort($array, 'cmp');
            print_r($array);
            echo "<br><br>";
        ?>

        <?php
            $ar = array(
                    array("10", 11, 100, 100, "a"),
                    array( 1, 2, "2", 3, 1)
            );
            array_multisort($ar[0], SORT_ASC, SORT_STRING,
                            $ar[1], SORT_NUMERIC, SORT_DESC);
            foreach ($ar as $key1 => $value1) {
                echo "[$key1] строка массива".':<br>';
                foreach ($value1 as $key2 => $value2) {
                    echo $key2.'=>';
                    var_dump($value2);
                    echo "<br>";
                }
                echo "<br>";
            };
        ?>

        <?php
            $A=array("b"=>"Zero","f"=>"Weapon","d"=>"Al-pha","c"=>"Processor");
            var_dump ($A);
            echo "<br>";
            $B=array_reverse($A);
            var_dump($B);
            echo "<br><br>";
        ?>

        <?php
            $A=array("40", "20", "10", "30");
            var_dump($A);
            echo "<br>";
            sort($A);
            var_dump ($A);
            echo "<br>";
            rsort($A);
            var_dump ($A);
            echo "<br>";
            shuffle($A);
            var_dump ($A);
            echo "<br><br>";
        ?>


<!-- Операции с ключами и значениями массива. -->
        <?php
            //меняет местами его ключи и значения
            $A=array("40", "20", "10", "80", "50", "90","30","70");
            var_dump($A);
            echo "<br>";
            $A=array_flip($A);
            var_dump($A);
            echo "<br><br>";
        ?>
        
        <?php
            $A=array("a"=>"40", "b"=>"20","c"=> "10", "b"=>"80", "e"=>"50", "f"=>"90","d"=>"30","h"=>"70");
            var_dump($A);
            echo "<br>";
            $B=array_keys($A);
            var_dump($B);
            echo "<br>";
            $B=array_keys($A,"80");
            var_dump($B);
            echo "<br>";
            $B=array_values($A);
            var_dump($B);
            echo "<br><br>";
        ?>

        <?php
            $A=array("a"=>"40", "b"=>"20","c"=> "10", "b"=>"80", "e"=>"50", "f"=>"90","d"=>"30","h"=>"70");
            var_dump($A);
            echo "<br>";
            $B=in_array(50,$A);
            var_dump($B);
            echo "<br>";
            $B=in_array(55,$A);
            var_dump($B);
            echo "<br><br>";
        ?>

        <?php
            //возвращает ассоциатив-ный массив с ключами – элементами списка и значениями – коли-чеством повторов этих элементов
            $A=array("a"=>"40", "b"=>"50","c"=> "70", "d"=>"80", "e"=>"50", "f"=>"90","d"=>"50","h"=>"70");
            var_dump($A);
            echo "<br>";
            $B=array_count_values($A);
            var_dump($B);
            echo "<br><br>";
        ?>


<!-- Конкатенация массивов -->

        <?php
            $A= array("1"=>"первый", "2"=>"второй");
            $B = array("1"=>"третий", "2"=>"четвертый","3"=>"пятый");
            var_dump($A);
            echo "<br>";
            var_dump($B);
            echo "<br>";
            echo "Массив А + Массив В","<br>";
            $C = $A + $B;
            var_dump($C);
            echo "<br>";
            echo "Массив B + Массив A","<br>";
            $C=$B+$A;
            var_dump($C);
            echo "<br>";
            echo 'array_merge($A,$B)',"<br>";
            $C=array_merge($A,$B);
            var_dump($C);
            echo "<br><br>";
        ?>


<!-- Получение части массива -->
        <?php
            $input = array ("a", "b", "c", "d", "e");
            $output = array_slice ($input, 2); // "c", "d", "e"
            var_dump($output);
            echo "<br>";
            $output = array_slice ($input, -2, 2); // "d", "e"
            var_dump($output);
            echo "<br>";
            $output = array_slice ($input, 0, 3); // "a", "b", "c"
            var_dump($output);
            echo "<br><br>";
        ?>


<!-- Вставка и удаление элементов массивов -->
        <?php
            $arr = array(5 => 1, 12 => 2);
            var_dump($arr);
            echo "<br>";
            $arr[] = 56; // В этом месте скрипта это эквива-лентно $arr[13] = 56;
            var_dump($arr);
            echo "<br>";
            $arr["x"] = 42; // Это добавляет к массиву новый элемент с ключом "x"
            var_dump($arr);
            echo "<br>";
            unset($arr[5]); // Это удаляет элемент из массива
            var_dump($arr);
            echo "<br>";
            unset($arr); // Это удаляет массив полностью
            var_dump($arr);
            echo "<br><br>";

            $A = array ("a", "b", "c", "d", "e");
            var_dump($A);
            echo "<br>";
            array_push($A,"f","g");
            var_dump($A);
            echo "<br><br>";
        ?>

        <?php
            $A = array ("a", "b", "c", "d", "e");
            var_dump($A);
            echo "<br>";
            array_push($A,"f","g");
            var_dump($A);
            echo "<br>";
            $B=array_pop($A);
            var_dump($A);
            echo "<br>";
            echo "удаленное значение =$B";
            echo "<br><br>";
        ?>

        <?php
            $A = array ("a", "b", "c", "d", "e");
            var_dump($A);
            echo "<br>";
            array_unshift($A,"f","g");
            var_dump($A);
            echo "<br><br>";

            $A = array ("a", "b", "c", "d", "e");
            var_dump($A);
            echo "<br>";
            array_shift($A);
            var_dump($A);
            echo "<br><br>";
        ?>

        <?php
        //уникальный массив
            $A = array ("a", "b", "b", "d", "e", "c", "c", "e");
            var_dump($A);
            $B=array_unique($A);
            var_dump($B);
            echo "<br><br>";
        ?>

        <?php
            $input=array("red", "green", "blue", "yellow");
            array_splice($input,2);
            var_dump($input);
            echo "<br>";
            $input=array("red", "green", "blue", "yellow");
            array_splice($input, 1, 2, array("black", "grey"));
            var_dump($input);
            echo "<br>";
            $input=array("red", "green", "blue", "yellow");
            array_splice($input, 1, 1, array("black", "grey"));
            var_dump($input);
            echo "<br>";
            $input=array("red", "green", "blue", "yellow");
            array_splice($input, 2, 0, array("black", "grey"));
            var_dump($input);
            echo "<br>";
            $input=array("red", "green", "blue", "yellow");
            array_splice($input, 1, 2, "black");
            var_dump($input);
            echo "<br><br>";
        ?>


<!-- Преобразования переменных в массив и обратно -->

        <?php
            $a="Test string";
            $b="Some text";
            $A=compact("a","b");
            var_dump($A);
            echo "<br><br>";
            //теперь $A===array("a"=>"Test string", "b"=>"Some text")

            $a="Test";
            $b="Text";
            $c="CCC";
            $d="DDD";
            $Lst=array("b",array("c","d"));
            var_dump($Lst);
            echo "<br>";
            $A=compact("a",$Lst);
            var_dump($A);
            echo "<br><br>";
            // теперь $A===array("a"=>"Test", "b"=>"Text", "c"=>"CCC", "d"=>"DDD")

            $var_array = array("color" => "blue",
                            "size"  => "medium",
                            "shape" => "sphere");
            extract($var_array);

            echo "$color, $size, $shape\n";
            echo "<br><br>";
        ?>

        <?php
            $low=10;
            $high=15;
            $A=range($low,$high);
            var_dump($A);
            echo "<br>";

            echo "количество элементов в массиве =".count($A);
            echo "<br><br>";
        ?>


<!-- Функции для сравнения массивов -->

        <?php
            $arr[1] = "PHP";
            $arr[2] = "HTML";
            $arr[3] = "JS" ;
            $arr[4] = "CSS";
            $arr2[1] = "PHP";
            $arr2[2] = "NODE.JS";
            $arr2[3] = "PYTHON";
            $arr2[4] = "CSS";
            $diff = array_diff($arr, $arr2);
            print_r ($diff);
            echo "<br>";

            //чтобы сравнивался еще и строковый индекс мас-сивов
            $diff = array_diff_assoc($arr, $arr2);
            print_r ($diff);
            echo "<br>";

            //если нужно найти общие элементы массивов
            $diff = array_intersect($arr, $arr2);
            print_r ($diff);

            //Если при нахождении общих элементов массивов нужно учесть и индекс,
            // то, по аналогии array_diff_assoc, можно использовать функцию array_intersect_assoc
        ?>
    </body>
</html>