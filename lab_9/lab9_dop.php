<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 align="center">
        Дополнительные задания для работы №9
    </h1>
    <h2 align="center">
        Вариант 3(2)
    </h2>

    <h3>1</h3>
    <?php
        $email = "test@test.test";
        echo "Проверка e-mail (test@test.test)";
        $regex = "/^\w+@\w+\.\w{2,4}$/";
        if (preg_match($regex, $email)){
            echo "<br>E-mail $email подходит)";
        }
        else{
            echo "<br>E-mail $email неподходит(";
        }
    ?>

    <h3>2</h3>
    <?php
        $password = "a57Vwf3s";
        echo "Проверка пароля ($password)";
        $regex = "/(?=.*[A-Z])(?=.*[a-z])(?=.*\d)\w{8,}/";
        if (preg_match($regex, $password)){
            echo "<br>Пароль $password надежный)";
        }
        else{
            echo "<br>Пароль $password не надежный(";
        }
    ?>

    <h3>3</h3>
    <?php
        $code = "zzz(спать(долго)ZZZ)очень долго";
        echo "колличества скобок($code)";
        $regex = "/^([^()]*\(([^()]|(?1))*\)[^()]*)+$/";
        if (preg_match($regex, $code)){
            echo "<br>Скобки выставлены верно)";
        }
        else{
            echo "<br>Скобки выставлены неверно(";
        }
    ?>

    <h3>4</h3>
    <?php
        $message = "Ты очень дурак, ну прям очень-очень ДуР aк";
        echo "Милый вариант общения ($message)";
        $regex = "/[дd]\s*[уy]\s*[рp]\s*[аa]\s*[кk]/iu";
        $result = preg_replace($regex, "хороший человек", $message);
        echo "<br> $result";
    ?>
</body>
</html>