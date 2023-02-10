<?php
	// подключение к бд
    $connect = mysqli_connect('localhost', 'root', '', 'test');

    if (!$connect) {
        die('Error connect to DataBase');
    }

?>