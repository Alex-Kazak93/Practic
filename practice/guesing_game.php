<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">

		<title>Личный сайт студента GeekBrains</title>
		<script type="text/javascript">
			var playerNumber = 1;
			var answer = parseInt(Math.random() * 100);
			var tryCount = 0;
			var maxTryCount = 10;

		function changePlayer() {
			if(playerNumber == 1)
						playerNumber = 2;
					 else 
						playerNumber = 1;
		}

			function readInt() {  // input id="userAnswer" >> readInt() и преобразован в целые числа.
				var number = document.getElementById('userAnswer').value;
				return parseInt(number);
				// return +document.getElementById('userAnswer').value;
			}
			function write(text) {
				document.getElementById('info').innerHTML = text;
			}
			function hide(id) {
				document.getElementById(id).style.display = 'none';
			}
			function guess() {
				tryCount++;
				var userAnswer = readInt();
					if(userAnswer == answer){ 
					write('<b>Поздравляю! Вы угадали!<br> Победил игрок № ' + playerNumber);
					hide('userAnswer');
					hide('button');
				} else if(tryCount >= maxTryCount) {
					write('Вы проиграли <br> Правильный ответ: ' + answer);
					hide('userAnswer');
					hide('button'); } 
				 else if(userAnswer > answer){
				 	changePlayer();
					write('Это слишком большое число<br> \n У вас осталось ' + (maxTryCount - tryCount) + ' попыток. \n Ходит игрок под номером ' + playerNumber);
				}
				  else if(userAnswer < answer){
				  	changePlayer();
				  	write('Это слишком маленькое число<br>\n У вас осталось ' + (maxTryCount - tryCount) + ' попыток. \n Ходит игрок под номером ' + playerNumber);
				  }
					
			}

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
					<h1 class="Riddles_title">Guessing Game</h1>
					<h3 class="Riddles_first_description">Chalenge yourself in Guesses!</h3>
				</div>
				<div class="center">
					
					<div class="box">
						<div class="boxIn">
							<p id="info">Угадайте число от 0 - 100. <br> Ходит игрок № 1</p>
							<input class="guessInput" type="text" id="userAnswer">
							<br>
							<a href="#" onclick="guess();" id="button">Играть</a>
						</div>
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
	<!-- 
		<div class="content">
			<ul class="menu">
				<li><a href="index.html">Главная</a></li>
				<li><a href="puzzle.html">Загадки</a></li>
				<li><a href="#">Угадайка</a></li>
			</ul>

			<div class="contentWrap">
				<div class="content">
					<div class="center">

						<h1>Игра угадайка</h1>

						<div class="box">
							<p id="info">Угадайте число от 0 - 100</p>
							<input type="text" id="userAnswer">
							<br>
							<a href="#" onclick="guess();" id="button">Начать</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		
		
		 -->
	</body>
</html>