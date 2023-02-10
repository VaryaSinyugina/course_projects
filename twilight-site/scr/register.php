<?php
    session_start();

    //если пользователь авторизирован, делаем переадрисацию на профиль
    if (isset($_SESSION['user'])) {
        header('Location: profile.php');
    }
?>

<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/main_forms.css">
</head>
<body>

    <!-- Форма регистрации -->
    <form class="formreg" action="signup.php" method="post" enctype="multipart/form-data">
        <label>Имя или никнейм</label>
        <input type="text" name="full_name" placeholder="Введите имя (никнейм)">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Почта</label>
        <input type="email" name="email" placeholder="Введите адрес почты">
        <label>Изображение профиля</label>
        <input type="file" name="avatar">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="index.php">авторизируйтесь</a>!
        </p>
        <?php
            //вывод сообщения, если оно существует
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            //очищаем
            unset($_SESSION['message']);
        ?>
    </form>

</body>
</html>