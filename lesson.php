<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" type="text/css" href="css/stylelesson.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:wght@300&display=swap&subset=cyrillic" rel="stylesheet">

	<title></title>
</head>
<body>

	<div class="main-header">
		<div class="container">
			<div class="header">
				<div class="text-header">
					<p>онлайн - школа с групповыми и индивидуальными занятиями</p>
				</div>
				<div class="tel-header">
					<div class="tel">
						<p>8-952-816-34-46</p>
					</div>
					<div class="markstudio">
						<p>mark.studio93@gmail.com</p>
					</div>
					<div class="insta">
						<a href="https://www.instagram.com/only.render/"><img width="35" height="35" src="image/instagram.png"></a>
					</div>
				</div>
			</div>
			<div class="header-menu">
				<div class="logo">
					<a href="index.html">ONLY.RENDER</a>
				</div>
				<div class="menu">
					<div class="q">
						<a href="prepod.html">о нас</a>
					</div>
					<div class="w">
						<a href="master.html">мастер-класс</a>
					</div>
					<div class="e">
						<a href="lesson.php">индивидуальные уроки</a>
					</div>
					<div class="r">
						<a href="student.html">работы студентов</a>
					</div>
					<div class="t">
						<a href="contant.html">контакты</a>
					</div>
				</div>
			</div>
			<div class="text-main">
				<div class="text-main-tt">
					<p class="pp">Преподаватели онлайн-школы Only.Render</p>
					<p class="pt">Мы люди простые и объясняем простым языком. Если видим у Вас сложности, подсказываем.</p>
				</div>
			</div>

			<div class="form-a">
				<form class="vhod" method="POST">
					<h2>Откройте мастер-класс</h2>
					<input type="text" name="username" placeholder="Логин" required> <br>
					<input type="password" name="password" placeholder="Пароль" required> <br>
					<button class="clik" type="submit">Войти</button>
				</form>
			</div>


			<?php 
			session_start();
			require('connect.php');

			if (isset($_POST['username']) and isset($_POST['password'])) {
				$username = $_POST['username'];
				$password = $_POST['password'];

				$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
				$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
				$count = mysqli_num_rows($result);

				if ($count == 1) {
					$_SESSION['username'] = $username;
				}else{
					$fmsg = "Ошибка";
				}
			}

			if (isset($_SESSION['username'])) {
				$username = $_SESSION['username'];
				// echo "<p style='color: black;'>Салам $username</p>" . "";
				// echo "<p style='color: black;'>Добро пожаловать на курс</p>";
				echo "<div class='form-a'><div class='vhodi'><a href='lesson.php'> Выйти</a></div></div>";

				$connection = mysqli_connect('localhost', 'root', 'root');
				$select_db = mysqli_select_db($connection, 'onlydb');

				$id='4'; // вот тут как раз задаётся, что работаю только с тем видео, у которого айди 1 
				$query = "SELECT * FROM video WHERE `id_video` = $id"; 
				$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
 
				while ($row = mysqli_fetch_assoc($result)){
					$video_choose = $row['name_video'];
					$video_show = "trailer/exterier/$video_choose.mp4";
				echo "<div class='container_a'>
      						<div class='posts'>
      							<div class='post' data-category='exterier'>
      								<div class='master-trailer-right'>
      									<div class='trailer-right-one'>
											<div class='afc-right'><video style='width: 1000px; height: 800px;' autoplay muted loop><source src='$video_show' type='video/mp4'></video></div>
											<div class='trailer-block'>
												<div class='trailer-block-text'>
													<h3>Курс интерьера кухни</h3>
													<p>Продолжительность: 3 часа 45 минут</p>
													<p>Используемые программы: 3ds Max / Corona Render / Photoshop</p>
												</div>
											</div>
										</div>
									</div>
      							</div>
      						</div>
      					</div>";
			
			}
		
		}


			?>

			

 				<!-- <div class="container_a">
      				<div class="posts">
      					<div class="post" data-category="exterier">
      						<div class="master-trailer-right">
      							<div class="trailer-right-one">
									<div class="afc-right"><video style="width: 805px; height: 585px;" src="trailer/exterier/video1.mp4" autoplay muted loop></video></div>
									<div class="trailer-block">
										<div class="trailer-block-text">
											<h3>Дом в поле</h3>
											<p>Продолжительность: 3 часа 45 минут</p>
											<p>Используемые программы: 3ds Max / Corona Render / Photoshop</p>
										</div>
									</div>
								</div>
							</div>
      					</div>
      					<div class="post" data-category="interier">
      						<div class="master-trailer-right">
      							<div class="trailer-right-one">
									<div class="afc-right"><video style="width: 805px; height: 585px;" src="trailer/interier/video1.mp4" autoplay muted loop></video></div>
									<div class="trailer-block">
										<div class="trailer-block-text">
											<h3>ГАРАЖ</h3>
											<p>Продолжительность:5 часа 45 минут</p>
											<p>Используемые программы: 3ds Max / Corona Render / Photoshop</p>
										</div>
									</div>
								</div>
							</div>
      					</div>
      					<div class="post" data-category="interier">
      						<div class="master-trailer-right">
      							<div class="trailer-right-one">
									<div class="afc-right"><video style="width: 805px; height: 585px;" src="trailer/interier/video1.mp4" autoplay muted loop></video></div>
									<div class="trailer-block">
										<div class="trailer-block-text">
											<h3>ГАРАЖ</h3>
											<p>Продолжительность:5 часа 45 минут</p>
											<p>Используемые программы: 3ds Max / Corona Render / Photoshop</p>
										</div>
									</div>
								</div>
							</div>
      					</div>
      				</div>
      			</div> -->
			
			<div class="foot-pre"></div>
		</div>
	</div>


	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>

</body>
</html>