<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css">
		<title>Личный сайт студента GeekBrains</title>
		<!-- <script type="text/javascript">
			
			var score = 0;
			function checkAnswer(inputId, answers){
				var userAnswer = document.getElementById(inputId).value;
				userAnswer = userAnswer.toLowerCase();
				for(var i = 0; i < answers.length; i++) {
				if(userAnswer == answers[i]) {
					score++;
					break;
				}
			}
		}
			function checkAnswers() {
				checkAnswer('userAnswer1', ['сон', 'сновидение']);
				checkAnswer('userAnswer2', ['морской', 'укус акулы']);
				checkAnswer('userAnswer3', ['шахматный', 'мертвый']);
				alert('Вы отгадали ' + score + ' загадки.');
			}
		</script> -->
		
	</head>
	<body>
		<div class="container">
			<?php
				include "header.php";
			?>
			<div class="content">
				 <div class="contentWrap">
				 	<div class="Hello_riddle">
					<h1 class="Riddles_title">Riddles</h1>
					<h3 class="Riddles_first_description">Chalenge yourself in riddles</h3>
				</div>
				<div class="center">
					
					<div class="box">
						<?php 

							if(isset($_GET['userAnswer1']) && isset($_GET['userAnswer2']) && isset($_GET['userAnswer3'])) {
								$userAnswer = $_GET['userAnswer1'];
								$score = 0;
								if($userAnswer == 'сон' || $userAnswer == 'сновидение'){
									$score++;
								}

								$userAnswer = $_GET['userAnswer2'];
								if($userAnswer == 'морской'){
									$score++;
								}

								$userAnswer = $_GET['userAnswer3'];
								if($userAnswer == 'шахматный' || $userAnswer == 'мёртвый'){
									$score++;
								}

								echo 'Вы отгадали ' . $score . ' загадок';
							}
						 ?>
						

					<form method="GET" class="boxIn">
						<p>Что можно увидеть с закрытыми глазами?</p>
						<input type="text" name="userAnswer1">
						<p>Какой болезнью никто не болеет на суше?</p>
						<input type="text" name="userAnswer2">
						<p>Какой конь не ест овса?</p>
						<input type="text" name="userAnswer3"> <br>
						<input class="submit_php" type="submit" value="Ответить" name="">
					</form>
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