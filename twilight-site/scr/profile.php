<?php
    session_start();

    //если пользователь не авторизирован, делаем переадрисацию на авторизацию
    if (!$_SESSION['user']) {
        header('Location: /');
    }
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/main_forms.css">
</head>
<body>

    <p><a name="top"></a></p>
    <div class="header">
      <h2 align="center">Twilight Universe</h2>
    </div>

    <div class="topnav">
      <a class="active" href="main_page.html">Главная</a>
      <a href="universe_page.php">Вселенная</a>
      <a href="actors_page.php">Актеры</a>
      <a href="index.php">Войти</a>
      <a href="register.php">Регистрация</a>
    </div>

    <!-- Профиль -->
    <form class="formprof">
      <p><img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt=""></p>
      <h2 style="margin: 10px 0;"><?= $_SESSION['user']['full_name'] ?></h2>
      <a href="#"><?= $_SESSION['user']['email'] ?></a>
      <a href="logout.php" class="logout">Выход</a>
    </form>

</body>
</html>