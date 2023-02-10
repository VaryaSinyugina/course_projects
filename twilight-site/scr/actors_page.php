<?php
    session_start();

    //если пользователь не авторизирован, делаем переадрисацию на авторизацию
    if (!$_SESSION['user']) {
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Twilight</title>
  <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style_main.css">
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
   
    <div class="name_page">
   	  <h1 align="left">Актерский состав</h1>
    </div>

    <div class="forms">
   	  <div class="f1">
   	    <p align="center">
   		    <img src="img/rpt.jpg" width="250" height="550">
   	    </p>
   	    <a href="https://www.kinopoisk.ru/name/544406/" target="_blank">Роберт Паттинсон</a>
   	    <p>Эдвард Каллен</p>
      </div>

      <div class="f2">
   	    <p align="center">
   		   <img src="img/krisst.jpg" width="250" height="550">
   	    </p>
   	    <a href="https://www.kinopoisk.ru/name/3425/" target="_blank">Кристен Стюарт</a>
   	    <p>Белла Свон</p>
      </div>

      <div class="f3">
   	    <p align="center">
   		    <img src="img/tlot.jpg" width="250" height="550">
   	    </p>
   	    <a href="https://www.kinopoisk.ru/name/224189/" target="_blank">Тейлор Лотнер</a>
   	    <p>Джейкоб Блэк</p>
      </div>

      <div class="f4">
   	    <p align="center">
   		    <img src="img/rencall.jpg" width="250" height="550">
   	    </p>
   	    <a href="https://www.kinopoisk.ru/name/2007922/" target="_blank">Маккензи Фой</a>
   	    <p>Ренесми Каллен</p>
      </div>

      <div class="f5">
   	    <p align="center">
   		    <img src="img/carlcal.jpg" width="250" height="550">
   	    </p>
   	    <a href="https://www.kinopoisk.ru/name/9785/" target="_blank">Питер Фачинелли</a>
   	    <p>Карлайл Каллен</p>
      </div>

      <div class="f6">
   	    <p align="center">
   		    <img src="img/esmcall.jpg" width="250" height="550">
   	    </p>
   	    <a href="https://www.kinopoisk.ru/name/813/" target="_blank">Элизабет Ризер</a>
   	    <p>Эсми Каллен</p>
      </div>

      <div class="f7">
   	    <p align="center">
   		    <img src="img/ellcall.jpg" width="250" height="550">
   	    </p>
   	    <a href="https://www.kinopoisk.ru/name/1222782/" target="_blank">Эшли Грин</a>
   	    <p>Эллис Каллен</p>
      </div>

      <div class="f8">
   	    <p align="center">
   		    <img src="img/jasphale.jpg" width="250" height="550">
   	    </p>
   	    <a href="https://www.kinopoisk.ru/name/584294/" target="_blank">Джексон Рэтбоун</a>
   	    <p>Джаспер Хейл</p>
      </div>

      <div class="f9">
   	    <p align="center">
   		    <img src="img/emmcall.jpg" width="250" height="550">
   	    </p>
   	    <a href="https://www.kinopoisk.ru/name/732297/" target="_blank">Келлан Латс</a>
   	    <p>Эммет Каллен</p>
      </div>

      <div class="f10">
   	    <p align="center">
   		    <img src="img/roshale.jpg" width="250" height="550">
   	    </p>
   	    <a href="https://www.kinopoisk.ru/name/30190/" target="_blank">Никки Рид</a>
   	    <p>Розали Хейл</p>
      </div>

      <div class="f11">
   	    <p align="center">
   		    <img src="img/challswan.jpg" width="250" height="550">
   	    </p>
   	    <a href="https://www.kinopoisk.ru/name/11825/" target="_blank">Билли Берк</a>
   	    <p>Чарли Свон</p>
      </div>

      <div class="f12">
   	    <p align="center">
   		    <img src="img/renswan.jpg" width="250" height="550">
   	    </p>
   	    <a href="https://www.kinopoisk.ru/name/30193/" target="_blank">Сара Кларк</a>
   	    <p>Рене Дуайер(Свон)</p>
      </div>
    </div>
  </div>

</body>
</html>