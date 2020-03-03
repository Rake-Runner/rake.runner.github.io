<?php 
    $nickname = "Rake Runner";
    # Сюда бы заинклюдить файл с переменными
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/reset.css">
    <title>Document</title>
</head>
<body>
<header class="header">
        <a href="#">Лента</a>
        <a href="#">Библиотека</a>
        <a href="#">Помощь проекту</a>
        <a href="#">Администрация</a>
        <a href="wdm.php" class="logo">WDM</a>
</header>

<section class="sidebar">
        <div class="sidenav">
            <img src="img/ava.png" alt="photo" class="ava">
            <a href="#">Позывной:<span style="color:blue;"><?php echo '<br>'.$nickname;?></span></a>
            <a href="program.php">Программа</a>
            <a href="#">Сообщения</a>
            <a href="#">Файлы</a>
            <a href="#">Общий чат</a>
            <a href="#">Мои чаты</a>
        </div>

        <!-- Page content -->
        <!-- <div class="main">123</div> -->
</section>

<section class="main_prog">
    <div class="nexus">
        <div class="b_n">
            <div class="basis">
                <h2>БАЗИС</h2>
                <div class="list">
                    <a href="#">Языки</a>
                    <a href="#">Математика</a>
                    <a href="#">Логика и мнемоника</a>
                    <a href="#">Натурфилософия (Физика и химия)</a>
                    <a href="#">Биология</a>
                    <a href="#">Выживание </a> 
                    <!-- (собирательство, охота, рыбалка, ориентирование на местности, ) -->
                    <a href="#">Основы производства, эксплотации, ремонта и обслуживания</a>
                    <a href="#">Основы сельского хозяйства</a>
                    <a href="#">Осовы кулинарии и диетологии</a>
                    <a href="#">Первая медицинская помощь и основы медицины</a>
                    <a href="#">История, полит-экономия(экономика) и философия</a>
                    <a href="#">Физическая культура, дисциплина и БИ</a>
                    <a href="#">Основы культуры</a>
                    <a href="#">Защита от темных искусств</a>
                    <!-- научный метод -->
                    <a href="#">Основы психологии</a>
                    <a href="#">Информитика и радиоэлектроника</a>
                    <a href="#">Инженерия</a>
                </div>
            </div>
            <div class="nadstroika">
                <h2>НАДСТРОЙКА</h2>
                <div class="list">
                    <a href="#">Научная область</a>
                    <a href="#">Медицинская область</a>
                    <a href="#">Кулинарная область</a>
                    <a href="#">Сторительная область</a>
                    <a href="computer_science.php">Компьютерная область</a>
                    <a href="#">... ...</a>
                    <a href="#">... ...</a>
                    <a href="#">... ...</a>
                    <a href="#">... ...</a>
                    <a href="#">... ...</a>
                    <a href="#">... ...</a>
                    <a href="#">... ...</a>
                </div>
            </div>
        </div>
        <div class="b_n_window">
            <h2 style="text-align: center;">Добро пожаловать на БЖД!</h2>
            <!-- <img src="img/monblan.PNG" alt="Monblan" style="margin: 10px;"> -->
        </div>
    </div>   
</section>

    
</body>
</html>

