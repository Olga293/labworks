<html>
    <head>
        <title>Лабораторная работа №7</title>
    </head>
    <body>
        <h1>
            Лабораторная работа №7
        </h1>

        <?php
            $a=5;
            $b=1;
            if ($a > $b) {
            echo "a больше b";
            $c = $a-$b;
            echo "<br>", "разность равна $c";
            }

            $a=5;
            $b=6;
            if ($a > $b) { 
                echo "a больше, чем b"; 
            } else { 
                echo "a НЕ больше, чем b"; 
            }

            $a=5;
            $b=6;
            if ($a > $b) :
            echo "a больше, чем b";
            else :
            echo "a НЕ больше, чем b";
            endif
        ?>

        <?php
            $a=5;
            $b=5;
            if ($a > $b) { 
                echo "a больше, чем b"; 
            } elseif ($a == $b) { 
                echo "a равен b"; 
            } else { 
                echo "a меньше, чем b"; 
            }
        ?>

        <?php
            // тернарный оператор
            $x = -2;
            $mod = $x >= 0 ? $x : -$x;
            echo "Модуль числа $x равен: " . $mod;
        ?>

        <?php
            $x=0; 
            while ($x++<10) echo $x; // Выводит 12345678910
        ?>
    </body>
</html>