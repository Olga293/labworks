<html>
    <head>
        <title>Лабораторная работа №5</title>
    </head>
    <body>
        <h1>
            Лабораторная работа №5
        </h1>

        <?php
            $great = 'fantastic';
            // Работает, выведет: b is fantastic
            echo "This is {$great}_ok";
            echo "<br>";
            echo "This is ${great}_ok";
            echo "<br>";
            echo "This is $great"."_ok";
            echo "<br>";
            // Пример работы с массивом
            $arr[0][0]="00";
            $arr[1][0]="10";
            $arr[0][1]="01";
            $arr[1][1]="11";
            var_dump ($arr);
            echo "Это работает: {$arr[1][1]}";
            echo "<br>";
            //echo "Это не работает: $arr[1][1]";
        ?>

        <?php
            // Получение первого символа строки
            $str = '1234567';
            $first = $str{0};
            echo $first,"<br>";
            // Получение третьего символа строки
            $first = $str{0};
            $third = $str{2};
            echo $third,"<br>";
            // Получение последнего символа строки
            $str = '123456789.';
            $last = $str{strlen($str)-1};
            echo $last,"<br>";
            // Изменение последнего символа строки  cp1251
            $str = 'Посмотри на море';
            $str{strlen($str)-1} = "я";
            echo $str,"<br>";
            $str = '1234567 89 1234';
            $str{strlen($str)-2} = "0";
            echo $str,"<br>";
        ?>

        <?php
            $a = "Hello ";
            $b = $a."World!"; // $b содержит строку "Hello World!" - Это конкатенация
            echo $b."<br>";
            $a = "Hello ";
            $a .= "World!"; // $a содержит строку "Hello World!" - Это присвоение с конкатенацией
            echo $a;
        ?>

        <?php
            $x="Строка";
            $y="Строка";
            $z="Строчка";
            //if ($x == $z) echo "<p>Строка X равна строке Z</p>";
            //if ($x == $y) echo "<p>Строка X равна строке Y</p>";
            //if ($x != $z) echo "<p>Строка X НЕ равна строке Z</p>";
            if ($x === $z) echo "<p>Строка X равна строке Z</p>";
            if ($x === $y) echo "<p>Строка X равна строке Y</p>";
            if ($x !== $z) echo "<p>Строка X НЕ равна строке Z</p>";
        ?>

        <?php
            $x = "Hello!"; 
            echo strlen($x);
            echo "<br><br>";
        ?>

        <?php
            echo strpos("Hello","el");
            echo "<br>";
            echo strpos("Hello! Hello!","el");
            echo "<br>";
            echo strpos("Hello! Hello!","el", 3);
            echo "<br>";
            echo "<br>";
        ?>

        <?php
            $str = "123456789";
            echo substr($str,0,2);
            echo "<br>";
            echo substr($str,-4,3);
            echo "<br>";
            echo substr($str,-5,-2);
            echo "<br>";
            echo substr($str,-5,-4);
            echo "<br>";
            echo "<br>";
        ?>

        <?php
            $str1 = "Programmer";
            $str2 = "Programmer";
            $str3 = "Program";
            $str4 = "programmeR";
            echo strcmp($str1,$str2);
            echo "<br>";
            echo strcmp($str3,$str2);
            echo "<br>";
            echo strcmp($str2,$str3);
            echo "<br>";
            echo strcmp($str1,$str4);
            echo "<br>";
            echo strcasecmp($str1,$str4); 
            echo "<br>"; // не учитывается регистр
        ?>

        <?php
            $email  = 'name@example.com';
            $domain = strstr($email, '@');
            echo $domain; // выводит @example.com
            
            $user = strstr($email, '@', true);
            echo $user; // выводит name
            echo "<br>";
            echo "<br>";
            //без учета регистра stristr()
        ?>

        <?php
            $str = "abcde";
            $needle = "cc";
            $rez = strrchr($str, $needle);
            echo $rez;
            echo "<br>";
            echo "<br>";
        ?>

        <?php
            $str="Hello! Hello! Hello!";
            echo $str;
            echo"<br>";
            $str1=str_replace("!","?",$str);
            echo $str1;
            echo "<br>";
            echo "<br>";
        ?>

        <?php
            $string = " aaaa\n bbbb";
            echo nl2br($string);
            echo "<br>";
            echo "<br>";
        ?>

        <?php
            $str="Hello! Hello! Hello!";
            echo $str;
            echo"<br>";
            echo str_word_count($str, 0);
            echo "<br>";
            echo var_dump(str_word_count($str, 1));
            echo "<br>";
            echo var_dump(str_word_count($str, 2));
            echo "<br>";
            echo "<br>";
            // 0 - возвращает количество найденных слов
            // 1 - возвращается массив, содержащий все слова, входящие в строку string
            // 2 - возвращается массив, индексами которого являются позиции в строке string, а значениями - соответствующие слова.
        ?>

        <?php
            $str = "Это текст электронного письма, которое нужно будет отправить адресату...";
            echo "$str <br>";
            // Разбиваем текст по 20 символов
            $str = WordWrap ($str, 20, "<br>");
            echo $str;
            echo "<br>";
            echo "<br>";
        ?>

        <?php
            $str = "Это текст электронного письма,<br> которое нужно будет <br> отправить адресату...";
            var_dump ($str);
            echo "<br>";
            $stripped = strip_tags ($str, "<head><title>"); // Удаляет все html - теги из строки (текста)
            var_dump ($stripped);
            echo "<br>";
            echo $stripped;
            echo "<br>";
            echo "<br>";
        ?>

        <?php
            $str = 'один|два|три|четыре';
            echo $str;
            echo "<br>";
            print_r(explode('|', $str, 2));
            echo "<br>";
            // положительный лимит
            // Array
            // (
            //     [0] => один
            //     [1] => два|три|четыре
            // )

            print_r(explode('|', $str, -1));
            // отрицательный лимит
            // Array
            // (
            //     [0] => один
            //     [1] => два
            //     [2] => три
            // )
            echo "<br>";
            echo "<br>";
        ?>

        <?php
            $array = array('имя', 'почта', 'телефон');
            $comma_separated = implode(",", $array);
            echo $comma_separated; // имя,почта,телефон
            echo "<br>";
            // Пустая строка при использовании пустого массива:
            var_dump(implode('hello', array())); // string(0) ""
            echo "<br><br>";
        ?>

        <?php
            $str = "Hello world. (can you hear me?)";
            var_dump($str);
            echo "<br>";
            $str1= quotemeta($str);
            var_dump($str1);
            echo "<br><br>";
        ?>

        <?php
            $str = "PHP"; 
            echo $str[0]; // Выводит 'P'
            //обратиться по индексу

            echo chr(75); //Выводит K
            //возвращает строку, состоящую из символа с кодом

            echo ord('A'); // Выводит 65 - код буквы 'A'
            //возвращает код символа

            // for ($i=1; $i<=255; $i++){
            //     $symbol=chr($i);
            //     echo "код $i - символ $symbol","<br>";}
            // таблицa ASCII
            echo "<br><br>";
        ?>

        <?php
            $a="\tПривет, Привет!\t\t Пока, Пока!\t";
            var_dump ($a);
            echo "<br>";
            $b=trim($a);
            var_dump ($b);
            echo "<br>";

            $b=ltrim($a);
            var_dump ($b);
            echo "<br>";

            $b=chop($a);
            var_dump ($b);
            echo "<br><br>";
        ?>

        <?php
            $addr="ПриВеТ";
            echo $addr;
            echo "<br>";
            $addr=strtr($addr,"АБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯ", "абвгдеёжзийклмнопрстуфхцчшщъыьэюя");//с моей кодировкой не работает:)
            echo $addr;
            echo "<br><br>";
        ?>

        <!-- что-то пошло не так -->
        <?php
            $userinput = "https://www.php.net/manual/ru/function.urlencode.php";
            echo HtmlSpecialChars($userinput);
            echo "<br><br>";
        ?>

        <?php
            $str = "Mary Had A Little Toy and She LOVED It So";
            echo $str,"<br>";
            $str = strtolower($str);
            echo $str; // выводит: mary had a little lamb and she loved it so
            echo "<br>";

            $str = strtoupper($str);
            echo $str;
            echo "<br><br>";
        ?>

        <?php
            $str = "Mary Had A Little Toy and She LOVED It So";
            echo $str,"<br>";
            $str = strtolower($str);
            echo $str; // выводит: mary had a little lamb and she loved it so
            echo "<br>";

            $str = strtoupper($str);
            echo $str;
            echo "<br><br>";
        ?>

        <?php
            $str = "абвгдеёжзийклмнопрстуфхцчшщъыьэюя";
            echo mb_detect_encoding($str)." - ";
            echo $str;
            echo "<br>";

            $str1 = mb_convert_encoding($str, 'ASCII');
            echo $str1;
            echo "<br>";

            $str1 = mb_convert_encoding($str, 'UTF-8');
            echo $str1;

            echo "<br><br>";
        ?>
        
        <?php
            $pass_a = "MySecret";
            $pass_b = "MySecret";
            // Выводим хеш-код строки MySecret ($pass_a) - исходный пароль
            echo "<b>Хеш-код исходного пароля '$pass_a':</b><b style=\"color:green\">".md5($pass_a)."</b><br>";
            // Выводим хеш-код строки MySecret ($pass_b) - верифицируемый пароль
            echo "<b>Хеш-код верифицируемого пароля '$pass_b':</b><b style=\"color:green\">".md5($pass_b)."</b><br>";
            // Сравниваем хеш-коды MD5 исходного и верифици-руемого пароля
            echo "<h3>Проверяем истинность введенного па-роля:</h3>";
            if (md5($pass_a)===md5($pass_b)) 
                echo "<h3 style=\"color:green\">Пароль верный! (Хеш-коды совпадают)</h3>";
            else 
                echo "<h3 style=\"color:red\">Пароль неверный! (Хеш-коды не совпадают)</h3>";
            // В данной ситуации выводит: Пароль верный! (Хеш-коды совпадают)
            echo "<br><br>";

            $str = 'яблоко';
            echo sha1($str);
            echo "<br><br>";
        ?>

        <?php
            // введенное слово с опечаткой
            $input = 'carrrot';
            // массив сверяемых слов
            $words = array('apple','pineapple','banana','orange','radish','carrot','pea','bean','potato');
            // кратчайшее расстояние пока еще не найдено
            $shortest = -1;
            // проходим по словам для нахождения самого близкого ва-рианта
            foreach ($words as $word) {
                // вычисляем расстояние между входным словом и теку-щим
                $lev = levenshtein($input, $word);
                // проверяем полное совпадение
                if ($lev == 0) {
                    // это ближайшее слово (точное совпадение)
                    $closest = $word;
                    $shortest = 0;
                    // выходим из цикла - мы нашли точное совпадение
                    break;
                }
                // если это расстояние меньше следующего наименьшего расстояния
                // ИЛИ если следующее самое короткое слово еще не было найдено
                if ($lev <= $shortest || $shortest < 0)
                {
                    // set the closest match, and shortest distance
                    $closest = $word;
                    $shortest = $lev;
                }
            }
            echo "Вы ввели: $input","<br>";
            if ($shortest == 0)
            {
                echo "Найдено точное совпадение: $closest\n";
            } else {
                echo "Вы не имели в виду: $closest?\n";
            }
            echo "<br><br>";
        ?>

        <?php
            echo SetLocale(LC_CTYPE, 0);
        ?>

        <?php
            print("Привет мир!");
            print "<br> Привет мир!";
            print "<br>Это займет\nнесколько строк. Переводы строки тоже\nвыводятся";
            print "<br>Это займет<br>несколько строк. Переводы строки тоже<br>выводятся";
            print "<br>Экранирование символов делается \"Так\".";
            // с print можно использовать переменные ...
            $a = "aaaaa";
            $b = "bbbbb";
            print "<br>это a=$a , b=$b";
            // ... и массивы
            $bar = array("value" => "AAA", "type" => "BBB");
            print "<br>это {$bar['value']} !";
            // При использовании одиночных кавычек выводится имя переменной, а не значение
            print '<br>foo - это $a<br>';
            // Если вы не используете другие символы, можно выве-сти просто значения переменных
            print $a;
            echo "<br><br>";
        ?>

        <?php
            $year = 2016;
            $month = 9;
            $day = 30;
            $isodate=sprintf("%04d-%02d-%02d",$year,$month,$day);
            echo $isodate;
            echo "<br>";
            $isodate=sprintf("%4d-%2d-%2d",$year,$month,$day);
            echo $isodate;
            echo "<br><br>";
        ?>

        <?php
            $number=1234.56;
            $number_eng=number_format($number);
            print $number_eng;
            echo "<br>";
            $number_fr=number_format($number,2,',',' ');
            print $number_fr;
            echo "<br><br>";
        ?>

        <?php
            $a = array ('a' => 'apple', 'b' => 'bana-na', 'c' => array ('x', 'y', 'z')); print_r ($a);
            echo "<br><br>";
        ?>

        <?php
            $x = -2;
            $mod = $x >= 0 ? $x : -$x;
            echo "Модуль числа $x равен: " . $mod;
            //условие ? результат_если_true : результат_если_false
        ?>
    </body>
</html>