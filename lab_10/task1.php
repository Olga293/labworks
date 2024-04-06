<!DOCTYPE html>
<html>
<head>
<title>Как хорошо ты знаешь мультик "Том и Джери"</title>
</head>
<body>

<?php

    //проверка ФИО
    $name = $_POST["name"];
    $regex = "/^[А-Я][а-я]*\s[А-Я][а-я]*\s[А-Я][а-я]*$/u";
    $error = false;
    $name_color = "black";
    if(!preg_match($regex,$name)){
        $error = true;
        $name_color = "red";
    }

    echo "<p style ='color:$name_color;'>Имя: $name</p>";

    
    //проверка почты
    $email = $_POST["email"];
    $regex = "/^\w+@\w+\.\w{2,4}$/";
    $email_error = "";
    $email_color = "black";
    if(!preg_match($regex,$email)){
        $error = true;
        $email_color = "red";
    }

    echo "<p style ='color:$email_color;'>Почта: $email</p>";

    
    //проверка телефона
    $phone = $_POST["phone"];
    $regex = "/^[+]375-(44|29)-\d{3}-\d{2}-\d{2}$/";
    $phone_error = "";
    $phone_color = "black";
    if(!preg_match($regex,$phone)){
        $error = true;
        $phone_color = "red";
    }

    echo "<p style ='color:$phone_color;'>Телефон: $phone</p>";



    //тест
    if(!$error){
        $points = 0;
    
        $death_right = "два";
        $creator_right = array("Джозеф Барбера","Уильям Ханна");
        $series_right = array("Кот получает пинка","Каратист-хранитель");
        $first_name_right = "Джаспер и Джинкс";
        $favourite_right = !"";
    
        $death = $_POST["death"];
        $creator = $_POST["creator"];
        $series = $_POST["series"];
        $first_name = $_POST["first_name"];
        $favourite = $_POST["favourite"];
    
        if($death == $death_right){ 
            $death_color = "green";
            $points++;
        }else{ 
            $death_color="red";}
        echo "<p style ='color:$death_color;'><span style ='color:black;'>1.</span> $death</p><p>2.";
        
        
        foreach($creator as $creat){
            foreach($creator_right as $creat_right){
                if($creat == $creat_right){
                    $creator_color = "green";
                    $points += 0.5;
                    break;
                }else{
                    $creator_color ="red";
                }
            }
            echo "<span style ='color:$creator_color;'>$creat<br>";
        }
        echo "</span></p><p>3.";


        foreach($series as $ser){
            foreach($series_right as $ser_right){
                if($ser == $ser_right){
                    $series_color = "green";
                    $points += 0.5;
                    break;
                }else{
                    $series_color ="red";
                }
            }
            echo "<span style ='color:$series_color;'>$ser<br>";
        }
        echo "</span></p><p>";

        if($first_name == $first_name_right){ 
            $first_name_color = "green";
            $points++;
        }else{ 
            $first_name_color="red";
        }
        echo "<p style ='color:$first_name_color;'><span style ='color:black;'>4.</span> $first_name</p>";

        $favourite_message = "";
        if($favourite == $favourite_right){ 
            $favourite_color = "green";
            $points++;
        }else{ 
            $favourite_color="red";
            $favourite_message = "В этом мультике всё идеально";
        }
        echo "<p style ='color:$favourite_color;'><span style ='color:black;'>5.</span> $favourite <br> $favourite_message</p>";
        //var_dump($points);
        echo "<p> Баллы:$points</p>";
    }
?>

    
</body>
</html>