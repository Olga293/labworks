<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Лабораторная работа №10s</title>

    <style>
        span {
            color: red;
        }
    </style>
</head>
<body>
    <h1 align="center">
        Дополнительные задания для работы №10
    </h1>
    <h2 align="center">
        Вариант 3(2)
    </h2>

    <h2>1</h2>
    <form action='' method='POST'>
        <p>Независимые переключатели (checkbox):</p>
        <p>
            <input type="checkbox" name="checkbox[]" value="Том">
            Том<br>
            <input type="checkbox" name="checkbox[]" value="Джерри">
            Джерри<br>
            <input type="checkbox" name="checkbox[]" value="Чип">
            Чип<br>
            <input type="checkbox" name="checkbox[]" value="Дэйл">
            Дейл<br>
            <input type="checkbox" name="checkbox[]" value="Бэймакс">
            Бэймакс<br>
            <input type="checkbox" name="checkbox[]" value="Олаф">
            Олаф<br>
            <input type="checkbox" name="checkbox[]" value="Беззубик">
            Беззубик<br>
            <input type="submit" value="ОК">
        </p>

        <p>
        <textarea name="textarea" cols="70" rows="20">

    
        <?php
            if(isset($_POST["checkbox"])){
                $checkbox = $_POST["checkbox"];
                foreach($checkbox as $item){
                    $hash = hash('ripemd160', $item);
                    echo "\nПерсонаж: $item\nХэш-функция: $hash\n\n\n"; 
                }   
            }

        ?>
        </textarea> 
        </p>
        <br><br><br><br>
    </form>


    <h2>2</h2>
    <h3>Как хорошо ты знаешь мультик "Том и Джери"</h3>
    <form action='task1.php' method='POST'>
        <p>ФИО:<span>*</span>  
        <input required type='text' name='name' placeholder="Фамилия Имя Отчество"/></p>

        <p>Email:<span>*</span> 
        <input required type="text" name="email" placeholder="email@email.com"></p>

        <p>Номер телефона:<span>*</span> 
        <input required type="text" name="phone" placeholder="+375-xx-xxx-xx-xx"></p>

        
        
        <!-- переключатели radio -->
        <p>1. Сколько раз за всё время погиб кот Том??</p>
        <div>
            <input type="radio" name="death" value="два">два<br>
            <input type="radio" name="death" value="ни разу">ни разу<br>
            <input type="radio" name="death" value="более 100">более 100<br>
            <input type="radio" name="death" value="пять">пять<br>
        </div><br>
        
        <!-- переключатели checkbox -->
        <p>2. Выберите, кто был создателем(ями) Тома и Джери?</p>
        <div>
            <input type="checkbox" name="creator[]" value="Уильям Ханна">Уильям Ханна<br>
            <input type="checkbox" name="creator[]" value="Стивен Хилленберг">Стивен Хилленберг<br>
            <input type="checkbox" name="creator[]" value="Джозеф Барбера">Джозеф Барбера<br>
            <input type="checkbox" name="creator[]" value="Юрий Норштейн">Юрий Норштейн<br>
            <input type="checkbox" name="creator[]" value="Юлиан Калишер">Юлиан Калишер<br>
        </div><br>

        <!-- списки с множественным выбором -->
        <p>3. Выберите название первой и последней серии мультфильма?</p>
        <select name="series[]" size='6'  multiple >
                <option value="Кот получает пинка">Кот получает пинка</option>
                <option value="Полуночная трапеза">Полуночная трапеза</option>
                <option value="Умный котик">Умный котик</option>
                <option value="Серенада любви">Серенада любви</option>
                <option value="Кошачья рыбалка">Кошачья рыбалка</option>
                <option value="Каратист-хранитель">Каратист-хранитель</option>
        </select><br><br>

        <!-- списки с единственным выбором -->
        <p>4. Как звали кота и мышонка в первом выпуске мультфильма?</p>
        <select name="first_name">
                <option>Билли и Вилли</option>
                <option>Джаспер и Джинкс</option>
                <option>Дживс и Вустер</option>
                <option>Кот и мышь</option>
                <option>Спарки и Спайк</option>
        </select><br><br>

        <!-- текстовое поле -->
        <p>5. Опишите свой самый любимый момент в мультике?</p>
        <div>
            <textarea name="favourite"></textarea>
        </div><br>
        <input type="submit" value="ОК">
    </form>
</body>
</html>