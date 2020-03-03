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

    <!-- Page content -->
    <!-- <div class="main">123</div> -->
</section>';
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
        <a href="wdm_php.php">PHP</a>
        <a href="wdm.php" class="logo">WDM</a>
</header>

<?php echo $sidebar;?>



    <section class="main">
        <div class="post">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat fuga, animi libero cumque earum quibusdam commodi 
            veritatis vitae vero rerum voluptatum, doloribus sequi consequuntur quidem quos, sit atque nisi eligendi!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat fuga, animi libero cumque earum quibusdam commodi 
            veritatis vitae vero rerum voluptatum, doloribus sequi consequuntur quidem quos, sit atque nisi eligendi!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat fuga, animi libero cumque earum quibusdam commodi 
            veritatis vitae vero rerum voluptatum, doloribus sequi consequuntur quidem quos, sit atque nisi eligendi!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat fuga, animi libero cumque earum quibusdam commodi 
            veritatis vitae vero rerum voluptatum, doloribus sequi consequuntur quidem quos, sit atque nisi eligendi!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat fuga, animi libero cumque earum quibusdam commodi 
            veritatis vitae vero rerum voluptatum, doloribus sequi consequuntur quidem quos, sit atque nisi eligendi!</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Placeat fuga, animi libero cumque earum quibusdam commodi 
            veritatis vitae vero rerum voluptatum, doloribus sequi consequuntur quidem quos, sit atque nisi eligendi!</p>

        </div>
    </section>
</body>
</html>