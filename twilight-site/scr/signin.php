<?php

    session_start();
    require_once 'connect.php'; // подключение к бд

    //получаем переменные
    $login = $_POST['login'];
    $password = md5($_POST['password']);

    //проверка наличия пользователя в бд
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    //если пользователь найден
    if (mysqli_num_rows($check_user) > 0) {

        //получаем данные пользователя
        $user = mysqli_fetch_assoc($check_user);

        //создаем массив и переадресовываем на страницу профиля
        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email']
        ];

        header('Location: profile.php');

    } else {
        //вывод сообщения с переадресацией
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: index.php');
    }
    ?>

?>