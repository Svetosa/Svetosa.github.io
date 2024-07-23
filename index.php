<!doctype html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>Организации РГУ</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300" type="text/css">
</head>
<body>
<div id="heading">
	<h1 align="center">Обратная связь</h1>
</div>
		<header></header>
<nav>
	<ul class="top-menu">
		<li><a href="index.html">Главная</a></li>
		<li class="active"><a href="profcom.html">Профком</a></li>
		<li><a href="starostat.html">Старостат</a></li>
		<li><a href="sno.html">СНО</a></li>
		<li><a href="sts.html">СТС</a></li>
		<li><a href="index.php">Обратная связь</a></li>
	</ul>
</nav>
<aside>
<nav>
	<ul class="aside-menu">
		<li class="active"><a href="https://www.gubkin.ru/?ysclid=lylicif49666555574">Официальный сайт</a></li>
		<li class="active"><a href="https://vk.com/gubkinstarostat?ysclid=lyhlr75ymi136093823">Старостат</a></li>
		<li class="active"><a href= "https://vk.com/snorgu?ysclid=lyhlp3scwo894862368">СНО</a></li>
		<li class="active"><a href= "https://vk.com/ucs_gubkin?ysclid=lyhlpo5p6y319656040">СТС</a></li>
		<li class="active"><a href= "https://vk.com/profkom.gubkin?ysclid=lyhlorst4s148638981">Профком</a></li>
	</ul>
</nav>
<h2>Создатель сайта староста группы АА-23-08</h2>
<p><img id="img_1" src="images/я.jpg" width="230" height="270" alt="Наш логотип"></p>
</aside>
<section>
<blockquote>
	<p id="tezxt_1">
		“Губкинцы во всем сильны, мы опора для страны...”
	</p>
	<cite>Студенты РГУ нефти и газа</cite>
</blockquote>
<p><b>Обратная связь</b>  - на данной вкладке любой желающий может оставить свой отзыв на сайт, либо написать об организации РГУ нефти и газа(НИУ) им.Губкина в которой он/она состоит и поделиться своими впечатлениями.</p>
<body>
    <h1>Оставьте свой отзыв, для нас это очень важно</h1>
    <form id="feedbackForm" method="POST" action="feedback.php">
        <label for="name">Имя:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="mail">Email:</label>
        <input type="email" id="mail" name="mail" required>
        
        <label for="text">Отзыв:</label>
        <textarea id="text" name="text" required></textarea>
        
        <button type="submit", class = "f1" >Отправить</button>
		

    </form>

    <h2>Ваши отзывы:</h2>
    <div class = "container">
		<?php
		/* Подключаемся к базе данных */
		$link = mysqli_connect("localhost", "root", "");
		
		mysqli_select_db($link, "feedback");
		/* Выбираем данные */
		$sql="SELECT name, mail, text FROM reply";
		$result=mysqli_query($link, $sql);

		while ($line=mysqli_fetch_row($result)) {
		echo "<br><br><b> Имя:</b>".$line[0]."<br>";
		echo "<b> Email:</b>".$line[1]."<br>";
		echo "<b> Сообщение:</b>".$line[2]."<br>";
		}
		?>
        
    </div>
</body>
</section>

	<footer>
	<h3>Наши контактные данные</h3>
<p>
Официальный сайт РГУ нефти и газа gubkin.ru
</p>
<p>
 Адрес : 119991, Москва, Ленинский пр-т., д.65
</p>
<p>
 Телефон горячей линии:+7 (499) 507-82-73
</p>
</div>
	</footer>
</body>
</html>