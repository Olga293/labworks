<html>
    <head>
    <meta charset="utf-8">
    <title>Лабораторные работы</title>

    <style>
        body {
            --def: #96B7C4; 	
            --inv: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-image: linear-gradient(-25deg, #616161 0%, #96B7C4 100%);
        }

        .title{ 
            text-align: center; 
            border-bottom: solid; 
            padding-bottom: 20px; 
            color: white;
        }
        .menu{
            margin-top: 50px;
            display: flex;
            flex-direction: row;
        }
        .col {
            display: flex;
            flex-direction: column;
        }

        .btn {		
            position: relative;	
            padding: 1.2rem 4.4rem;
            padding-right: 3.1rem;
            font-size: 1.2rem;
            color: var(--inv);
            text-transform: uppercase;
            transition: all 500ms cubic-bezier(0.77, 0, 0.175, 1);	
            cursor: pointer;
            user-select: none;
        }

        .btn:before, .btn:after {
            content: '';
            position: absolute;	
            transition: inherit;
            z-index: -1;
        }

        .btn:hover {
            color: var(--def);
            transition-delay: .5s;
        }

        .btn:hover:before {
            transition-delay: 0s;
        }

        .btn:hover:after {
            background: var(--inv);
            transition-delay: .35s;
        }

        .from-left:before, 
        .from-left:after {
            top: 0;
            width: 0;
            height: 100%;
        }

        .from-left:before {
            right: 0;
            border: 1px solid var(--inv);
            border-left: 0;
            border-right: 0;	
        }

        .from-left:after {
            left: 0;
        }

        .from-left:hover:before,
        .from-left:hover:after {
            width: 100%;
        }

    </style>
    </head>

    <body>
        <div class="title">
            <h1>
                ЛАБОРАТОРНЫЕ РАБОТЫ 
            </h1>
            <h3>
                Выполнила: Брикса Ольга Андреевна
            </h3>
        </div>
        <div class="menu">
            <div class="col">
                <a href="lab_1/lab1.php" class="btn from-left">Лабораторная работа № 1</a>
                <a href="lab_2/lab2.php" class="btn from-left">Лабораторная работа № 2</a>
                <a href="lab_3/lab3.php" class="btn from-left">Лабораторная работа № 3</a>
                <a href="lab_4/lab4.php" class="btn from-left">Лабораторная работа № 4</a>
                <a href="lab_4/lab4_dop.php" class="btn from-left">Доп. для лабы № 4</a>
                <a href="lab_5/lab5.php" class="btn from-left">Лабораторная работа № 5</a>
                <a href="lab_5/lab5_dop.php" class="btn from-left">Доп. для лабы № 5</a>
            </div>
            <div class="col">
                <a href="lab_6/lab6.php" class="btn from-left">Лабораторная работа № 6</a>
                <a href="lab_6/lab6_dop.php" class="btn from-left">Доп. для лабы № 6</a>
                <a href="lab_7/lab7.php" class="btn from-left">Лабораторная работа № 7</a>
                <a href="lab_7/lab7_dop.php" class="btn from-left">Доп. для лабы № 7</a>
                <a href="lab_8/lab8_dop.php" class="btn from-left">Доп. для лабы № 8</a>
                <a href="lab_9/lab9_dop.php" class="btn from-left">Доп. для лабы № 9</a>
                <a href="lab_10/lab10_dop.php" class="btn from-left">Доп. для лабы № 10</a>
            </div>
        </div>
    </body>
</html>








