<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<title>Личный сайт студента GeekBrains</title>
		<script type="text/javascript">

			var Levels = 0;

			function hide(id) {
				document.getElementById(id).style.display = 'none';
		}
			function show(id) {
				document.getElementById(id).style.display = 'block';
		}
			function getRandomNumber(max) {
				return parseInt(Math.random() * max);
		}

			function getRandomLetters(Letters, Length) {
				var text = "";
				for(var i = 0; i < Length; i++) {
				var n = getRandomNumber(Letters.length);
				text += Letters[n];
			}
				return text;
		}
			function write(text) {
				document.getElementById('info').innerHTML = text;
		}
			function userAnswer() {  // input id="userAnswer" >> readInt() и преобразован в целые числа.
				return document.getElementById('userAnswer').value;
			}
			function Levels(Letters, Length) {
				while(true) {
				var text = getRandomLetters(Letters, Length); // фаафаффаффаффафф
				write('text');
				show('userAnswer');
				
				// var userAnswer = userAnswer().toLowerCase();
				if(userLetters == text) {
				write('Все верно. Переходим на следующий уровень.');
				Levels++;
				break;
			} else {
				write('Вы ошиблись. Попробуйте ещё раз.');
				}
			}
		}
		/*
		alert('Вас приветствует программа по обучению слепой печати');
		alert('Положиет 4 пальца левой руки - мизинец, безымянный, средний и указательный - на клавиши ф, ы, в, а. Запомните расположение пальцев.\nТеперь неспеша набирайте текст. Постарайтесь не смотреть на клавиатуру.');
		*/
		function checkAnswers() {
		var firstLevel = Levels(["ф", "а"], 10);
		var secondLevel = Levels(["ы", "в"], 10);
		var thirdLevel = Levels(["о", "ж"], 10);
		}
		/*
		alert('Положиет 4 пальца правой руки - мизинец, безымянный, средний и указательный - на клавиши ж, д, л, о. Запомните расположение пальцев.\nТеперь неспеша набирайте текст. Постарайтесь не смотреть на клавиатуру.');
		
		alert('Поставьте мизинец левой руки на букву Ф, безымянный палец - на Ы, средний - на В, указательный - на А.\n Поставьте мизинец правой руки на букву Ж, безымянный палец - на Д, средний - на Л, указательный - на О.\n Запомните расположение пальцев.');
		*/
		</script>
	</head>
	<body>
		<div class="container">
			<?php
				include "header.php";
			?>
			<div class="content">
				<div class="contentWrap">
					<div class="Hello_riddle">
						<h1 class="Riddles_title">Blind Typing</h1>
						<h3 class="Riddles_first_description">Вас приветствует программа по обучению слепой печати</h3>
					</div>
					<div class="center">
						<div class="box">
							<p id="info">Положиет 4 пальца левой руки - мизинец, безымянный, средний и указательный - на клавиши ф, ы, в, а. Запомните расположение пальцев. Теперь неспеша набирайте текст. Постарайтесь не смотреть на клавиатуру.</p>
							<a href="#" onclick="checkAnswers();" id="button">Начать</a>
							<input type="text" id="userAnswer">
							<br>
							<!-- 
							<input type="text" id="userAnswer1">
							<p>Положиет 4 пальца правой руки - мизинец, безымянный, средний и указательный - на клавиши ж, д, л, о. Запомните расположение пальцев.\nТеперь неспеша набирайте текст. Постарайтесь не смотреть на клавиатуру.</p>
							<input type="text" id="userAnswer2">
							<p>Какой конь не ест овса?</p>
							<input type="text" id="userAnswer3"> <br>
							<a href="#" onclick="checkAnswers();">Ответить</a> -->
						</div>
					</div>
				</div>
				
				<div class="picture_for_game"><img src="img/PhotoRoom_20200926_210607.png " width="525" alt="me"></div>
				
				
			</div>
			<div class="footer">
				<ul class="list_Inc">
					<li class="Inc"><p>Ad Libitum, Inc.</p></li>
					<li><p>&copy; 2017 Kazak. All rights reserved.</p></li>
					<li><p>Designed by "Not Me"</p></li>
				</ul>
				<ul class="list_contacts">
					<li><p>arkantos781227@mail.ru</p></li>
					<li><p>+375 29 328 6927</p></li>
				</ul>
				<ul class="info" id="social">
					<li><p>Facebook</p></li>
					<li><p>Instagram</p></li>
					<li><p>VK</p></li>
					<li><p>WhatsApp</p></li>
				</ul>
				
				<ul class="info" id="news">
					<li><p>News</p></li>
					<li><p>Events</p></li>
					<li><p>Contacts</p></li>
					<li><p>Legals</p></li>
				</ul>
				<ul class="info" id="projects">
					<li><p>Projects</p></li>
					<li><p>About</p></li>
					<li><p>Services</p></li>
					<li><p>Carreer</p></li>
				</ul>
			</div>
		</div>
	</body>
</html>