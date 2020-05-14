<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<title>World of Verses</title>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />
		<link href="http://fonts.googleapis.com/css?family=Kreon" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="/css/style.css" />
		<script src="/js/jquery-1.6.2.js" type="text/javascript"></script>
		<script type="text/javascript">
		// return a random integer between 0 and number
		function random(number) {
			
			return Math.floor( Math.random()*(number+1) );
		};
		
		// show random quote
		$(document).ready(function() { 

			var quotes = $('.quote');
			quotes.hide();
			
			var qlen = quotes.length; //document.write( random(qlen-1) );
			$( '.quote:eq(' + random(qlen-1) + ')' ).show(); //tag:eq(1)
		});
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="logo">
					<a href="/">World</span> <span class="cms">of Verses</span></a>
				</div>
				<div id="menu">
					<ul>
						<li class="first active"><a href="/">Главная</a></li>
						<li><a href="/authors">Авторы</a></li>
						<li><a href="/verses">Стихотворения</a></li>
						<li class="last"><a href="/selections">Подборки</a></li>
					</ul>
					<br class="clearfix" />
				</div>
			</div>
			<div id="page">
				<div id="sidebar">
					<div class="side-box">
						<h3>Случайная цитата</h3>
						<p align="justify" class="quote">
						«Литература рождается из глубины народной души». Адам Мицкевич
						</p>
						<p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->
						«Писатель существует только тогда, когда тверды его убеждения». Оноре де Бальзак
						</p>
						<p align="justify" class="quote">
						«Стиль — порождение идей, а не слов». Оноре де Бальзак
						</p>
						<p align="justify" class="quote"><!-- &copy; Vitaly Swipe -->
						«Всякая поэзия есть выражение душевного состояния». Анри Бергсон
						</p>
						<p align="justify" class="quote">
						«Там, где нет точности выражения, поэзия невозможна». Бонвиль
						</p>
					</div>
					<div class="side-box">
						<h3>Основное меню</h3>
						<ul class="list">
							<li class="first "><a href="/">Главная</a></li>
							<li><a href="/authors">Авторы</a></li>
							<li><a href="/verses">Стихотворения</a></li>
							<li class="last"><a href="/selections">Подборки</a></li>
						</ul>
					</div>
				</div>
				<div id="content">
					<div class="box">
						<?php include 'application/views/'.$content_view; ?>
						
					</div>
					<br class="clearfix" />
				</div>
				<br class="clearfix" />
			</div>
			<div id="page-bottom">
				<div id="page-bottom-content">
					<h3>Коротко о сайте</h3>
					<p>
                    Там, где есть жизнь и свобода, есть место и для нового творчества.
					</p>
				</div>
				<br class="clearfix" />
			</div>
		</div>
		<div id="footer">
			<a href="/">World_of_Verses</a> &copy; 2020</a>
		</div>
	</body>
</html>