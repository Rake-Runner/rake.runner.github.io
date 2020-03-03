<?php 
    $nickname = "Rake Runner";
    $sidebar = '<section class="sidebar">
                    <div class="sidenav">
                        <img src="img/ava.png" alt="photo" class="ava">
                        <a href="#">Позывной:<span style="color:blue;">'."<br>".$nickname.'</span></a>
                        <a href="program.php">Педагогия</a>
                        <!-- Курс молодого разумного -->
                        <a href="#">Сообщения</a>
                        <a href="#">Файлы</a>
                        <a href="#">Общий чат</a>
                        <a href="#">Мои чаты</a>
                        <a href="#">Вопросы</a>
                    </div>
                </section>';

                #- \n – символ новой строки;
                #- \r – символ возврата каретки;
                #- \t – символ табуляции;
                #- \$ - символ $, чтобы следующий за ним текст не был интерполирован, как переменная;
                #- \” – символ двойной кавычки;
                #- \\ - символ обратного слеша;
                #- \xNN – символ с шестнадцатеричным кодом NN.
                
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/fonts.css">
    <title>Document</title>
</head>
<body class="body">
    <header class="header">
            <a href="#">Лента</a>
            <a href="#">Библиотека</a>
            <a href="#">Помощь проекту</a>
            <a href="#">Администрация</a>
            <a href="wdm.php" class="logo">WDM</a>
    </header>
    <section class="sidebar">
        <div class="sidenav">
            <!-- <img src="img/ava.png" alt="photo" class="ava"> -->
            <span style="color:#818181; margin-bottom: 10px;">Вход</span>

                <form action="/login.php" method="post" class="login_form">
                    <input type="text">
                    <input type="password" name="password" id="pass">
                    <input type="submit" value="Вход" id="inputenter">
                    <a href="wdm_reg.php">Регистрация</a>
                    <a href="#">Забыли пароль?</a>
                </form>
        </div>
    </section>

    <section class="reg_form">
            <h1>Registration form</h1>
            <form class="login_form">
                <span>Nickname:</span><input type="text" name="nickname"><br>
                <span>Password:</span><input type="password" name="password"><br>
                <span>What do you want here </span><input type="text" name="porpose">
                <input type="submit" value="Register"> <br>
                
            </form>
            
    </section>
</body>
</html>