<?php
    session_start();

    //если пользователь авторизирован, делаем переадрисацию на профиль
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    }

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/main_forms.css">
</head>
<body>

<!-- Форма авторизации -->
    <form class="formin" action="signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
        </p>
        <?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>