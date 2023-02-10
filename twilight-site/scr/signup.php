<?php

    session_start();
    require_once 'connect.php'; // подключение к бд

    $full_name = $_POST['full_name']; //передаем имя
    $login = $_POST['login']; //передаем логин
    $email = $_POST['email']; //передаем почту
    $password = $_POST['password']; //передаем пароль
    $password_confirm = $_POST['password_confirm']; //передаем подтверждение пароля

    //проверяем пароль и подтверждение пароля на совпадение
    if ($password === $password_confirm) {

        //путь для сохранения аватара
        $path = 'vendor/' . time() . $_FILES['avatar']['name'];
        if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $path)) {
            $_SESSION['message'] = 'Ошибка при загрузке сообщения';
            header('Location: register.php');
        }

        //хэшируем(шифруем) пароль перед добавлением в бд
        $password = md5($password);

        //заносим переменные в бд
        mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$email', '$password', '$path')");
        //вывод сообщения с переадресацией
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: index.php');


    } else {
        //вывод сообщения с переадресацией
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: register.php');
    }

?>
