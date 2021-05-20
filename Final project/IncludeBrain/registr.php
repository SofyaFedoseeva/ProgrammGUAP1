<!DOCTYPE html>
<html>

	 <link rel="icon" href="image/logo.png">


	<head>
		<meta charset=utf-8">
		<title>Форма регистрации</title>
		<link rel="stylesheet" href="style.css" type="text/css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
	</head>

	<body>
		<header>
			<div class="logo">
				<img src="img/logo.png">
			</div>
			<div class="headerButtons">
				<a class="menuButton" href="#">Курсы ˅</a>
				<a class="menuButton" href="#">Работа ˅</a>
				<a class="menuButton" href="#">Специалисты ˅</a>
				<a class="menuButton thinButton" href="#">Помощь</a>
				<a class="menuButton thinButton" href="#">О нас</a>
				
			</div>
			<div>
				<a class="menuButton thinButton">Регистрация</a>
				<a class="menuButton">Войти</a>
			</div>

		</header>

			<div class="conteiner">
				<div class="logo2">
					<img src="img/logo.png">
					<h1>РЕГИСТРАЦИЯ</h1>
				</div>
				<form action= "reg.php" method="post">
					
						<div class="field">
						 <label for="login">Логин</label> <br>
						<input type="text" id="login" name="login" placeholder ="Введите Логин" >
						</div>

						<div class="field">
						 <label for="pass">Пароль</label> <br>
						<input type="text" id="pass" name="pass" placeholder ="********" >
						</div>

						<div class="field">
						 <label for="repeatPass">Подтвердите пароль</label> <br>
						<input type="text" id="repeatPass" name="repeatPass" placeholder ="********" >
						</div>
						
						<div class="field">
						 <label for="name">ФИО</label> <br>
						<input type="text" id="name" name="name" placeholder ="Иванов Иван Иванович" >
						</div>

						<div class="field">
						 <label for="date">Дата рождения</label> <br>
						<input type="date" id="date" name="date" placeholder ="xx.xx.xxxx" >
						</div>

						<div class="field">
						 <label for="phone">Номер телефона</label> <br>
						<input type="tel" id="phone" name="phone" placeholder ="8 (000) 000-00-00" >
						</div>

						<div class="field">
						 <label for="mail">E-mail</label> <br>
						<input type="email" id="mail" name="mail" placeholder ="xxxxxx@xxx.xx" >
						</div>

						<div class="status">
							<div class="selectSex">
								 <label class="sexLabel" for="sex">Укажите пол</label> 
								<input type="radio" id="sex"
								name="sex" value="M">
								<label class="specificSex" for="sex">м</label>
								<input type="radio" id="sex"
								name="sex" value="F">
								<label class="specificSex" for="sex">ж</label>
							</div>
						</div>

						<div class="field">
							<label for="status">Выберите желаемый статус</label>
							<select class="readerType" name="status">
							<option>Ученик</option>
							<option>Заказчик</option>
							<option>Администратор</option>
							</select>
						</div> 

						<div class = "center submit">
						<button class = "wideButton simpleButton submitButton" >Зарегистрироваться</a>
						</div>
				</form>
			</div>
			<footer>
				<div class="logo">
				<img src="img/logo.png">
			</div>
				<div class="phone_footer">
					<p>8 (981) 691-60-62</p>
					<p>daveroom@mail.ru</p>
				</div>
				<div class="menu_footer">
					<div class="help">
						<a href="#">Помощь</a>
						<a href="#">О нас</a>
					</div>
					<div class="help">
						<a href="#">Курсы</a>
						<a href="#">Работа</a>
						<a href="#">Специалисты</a>
					</div>
					<div class="help">
						<a href="#">Лицензия</a>
						<a href="#">Партнерам</a>
						<a href="#">О компании</a>
						<a href="#">Контакты</a>
						<a href="#">Вакансии</a>
					</div>
				</div>
			</footer>
		
</body>
</html>