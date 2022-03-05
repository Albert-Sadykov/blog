<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" href="styles/style.css">
	<title>My Blog</title>
</head>
<body>
	<?php 
		if($_COOKIE['user']){
			header('Location: main.php');
		}
	?>
	<div class="wrapper">
		<header class="header">
			<div class="content flex_content">
				<div class="header_content">
					<div class="logo"><img src="img/logo.png" alt="">
						<div class="header_text">Лучшие статьи <br> про программирование!</div>
					</div>
					<div class="header_button">
						<a href="log_in.php"><button class="button">Войти</button></a>
					</div>
				</div>
			</div>
		</header>
		<div class="content">
			<div class="sign_up_form">
				<form action="sign_up.php" method="post" class="sign_up">
					<input type="text" name="login" class="form-control form-style" placeholder="Придумайте логин">
					<input type="password" name="password" class="form-control form-style" placeholder="Придумайте пароль">
					<input type="password" name="repassword" class="form-control form-style" placeholder="Подтвердите пароль">
					<button type="submit" class="button form-style">Зарегестрироваться</button>
				</form>
			</div>
		</div>
		<footer class="footer">
			<div class="content flex_content">
				<div class="logo"><img src="img/logo.png" alt="">
					<div class="header_text">Лучшие статьи <br> про программирование!</div>
				</div>
				<div class="footer_text">Все права строго защищены. <br> Любое копирование запрещено</div>
			</div>
		</footer>
	</div>
</body>
</html>