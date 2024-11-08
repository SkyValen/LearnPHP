<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Главная страница</title>
	<meta name="description" content="КиноБаза - это портал о кино" />
	<meta name="keywords" content="фильмы, фильмы онлайн, hd" />
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<div class="main">
		
		<div class="header">
			<div class="logo">
				<div class="logo_text">
					<h1><a href="index.html">КиноБаза</a></h1>
					<h2>Кино - наша страсть!</h2>
				</div>
			</div>
			
			<div class="menubar">
				
				<ul class="menu">
					<li class="selected"><a href="games">Главная</a></li>	
					<li><a href="films.html">Фильмы</a></li>
					<li><a href="#">Сериалы</a></li>
					<li><a href="rating.html">Рейтинг фильмов</a></li>
					<li><a href="contact.html">Контакты</a></li>
				</ul>

			</div>

		</div>

			
		<div class="site_content">
			
			<div class="sidebar_container">
				
				<div class="sidebar">
					<h2>Поиск</h2>
					<form method="post" action="#" id="search_form" >
						<input type="search" name="search_field" placeholder="ваш запрос" />
						<input type="submit" class="btn" value="найти" />
					</form>
				</div>

				<div class="sidebar">
					<h2>Вход</h2>
					<form method="post" action="#" id="login">
						
						<input type="text" name="login_field" placeholder="логин" />
						<input type="password" name="password_field" placeholder="пароль" />
						<input type="submit" class="btn" value="вход" />
						<div class="lables_passreg_text">
							<span><a href="#">забыли пароль?</a></span> | <span><a href="#">регистрация</a></span>
						</div>

					</form>
				</div>

				<div class="sidebar">
					<h2>Новости</h2>
					<span>31.02.2018</span>
					<p>Мы запустили расширенный поиск</p>
					<a href="#">читать</a>
				</div>

				<div class="sidebar">
					<h2>Рейтинг фильмов</h2>
					<ul>
						<li><a  href="show.html">Интерстеллар</a><span class="rating_sidebar">8.1</span></li>
						<li><a href="#">Матрица</a><span class="rating_sidebar">8.0</span></li>
						<li><a href="#">Безумный макс</a><span class="rating_sidebar">7.5</span></li>
						<li><a href="#">Облачный атлас</a><span class="rating_sidebar">7.4</span></li>
					</ul>
				</div>

			</div>

			<div class="content">
				
				<h1>Новые фильмы</h1>

				<div class="films_block">
					
					<?php
						echo $content
					?>

				</div>

				<h1>Новые сериалы</h1>

				<div class="films_block">
					
					<a href="#"><img class="turn" src="assets/img/dead.png"></a>
					<a href="#"><img class="turn" src="assets/img/silicon.png"></a>
					<a href="#"><img class="turn" src="assets/img/breakingbad.png"></a>
					<a href="#"><img class="turn" src="assets/img/xfiles.png"></a>

				</div>


				<div class="posts">
					
					<hr>
					<h2> <a href="#">Как снимали Интерстеллар</a> </h2>
					<div class="posts_content">
						<p>
							45 лет исполнилось Кристоферу Нолану — одному из самых успешных режиссеров нашего времени, чьи работы одинаково любимы как взыскательными критиками, так и простыми зрителями. Фильмом изначально занималась студия Paramount. Когда Кристофер Нолан занял место режиссера, студия Warner Bros., которая выпускала его последние фильмы, добилась участия в проекте.
						</p>
					</div>

					<p><a href="#">читать</a></p>

					<hr>
		            <h2><a href="#">Актер Том Хенкс поделился впечатлением о фестивале</a></h2>
		            <div class="posts_content">
		              <p>16 февраля в Лондоне состоялась 67-я церемония вручения наград Британской киноакадемии. Леонардо ДиКаприо, Брэд Питт, Анджелина Джоли, Кейт Бланшетт, Хелен Миррен, Эми Адамс, Кристиан Бэйл, Альфонсо Куарон и другие гости и победители премии — в нашем репортаже.</p>
		            </div>
		            <p><a href="#">читать</a></p>

				</div>


			</div>

		</div>





	<div class="footer">
		<p>
			<a href="index.html">Главная</a> |
			<a href="films.html">Фильмы</a> | 
			<a href="#">Сериалы</a> |
			<a href="rating.html">Рейтинг фильмов</a> |
			<a href="contact.html">Контакты</a>
		</p>
		<p>wh-db.com 2015</p>
	</div>

	</div>
	
</body>
</html>