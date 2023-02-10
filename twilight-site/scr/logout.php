<?php
	session_start();
	unset($_SESSION['user']);
	//при выходе из аккаунта переадрисуем на главную страницу
	header('Location: main_page.html');
?>