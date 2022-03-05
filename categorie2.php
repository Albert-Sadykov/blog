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
	<div class="wrapper">
		<header class="header">
			<div class="content flex_content">
				<div class="header_content">
					<div class="logo"><img src="img/logo.png" alt="">
						<div class="header_text">Лучшие статьи <br> про программирование!</div>
					</div>
					<div class="header_button">
						<form action="" method="post">
							<a href=""><button type="submit" class="button">Выйти</button></a>
						</form>
					</div>
				</div>
			</div>
		</header>
		<div class="content grid_content">
			<div class="left_container">
				<div class="title_top">Web</div>
				<div class="grid_blog">
					<!--<div class="article">
							<div class="article_name">Статья</div>
							<div class="read_article">Читать</div>
					</div> -->
					<?php
						$db = mysqli_connect("localhost", "root", "", "blog_db");
						$sql_query = "SELECT * FROM `articles` WHERE `categorie_id` = 2";
                        $sql_query = mysqli_query($db, $sql_query);
                        while($resalt = mysqli_fetch_assoc($sql_query)){
                            $result_name = $resalt["article_name"];
                            echo "<div class=\"article\">
                                    <div class=\"article_name\">$result_name</div>
                                    <div class=\"read_article\">Читать</div>
                            </div>";
                        }
					?>
				</div>
			</div>
			<div class="right_container">
				<div class="search_container">
					<form action="" method="post" class="search_form">
						<input type="text" placeholder="Введите ключивое слово" class="form-control form-style search_input">
						<button type="submit" class="button form-style">Поиск</button>
					</form>
				</div>
				<div class="categories_conteiner">
					<span class="categories_text">Категории</span>
					<div class="categorie"><a href="categorie1.php">Web</a></div>
					<div class="categorie"><a href="categorie2.php">Python</a></div>
					<div class="categorie"><a href="categorie3.php">Games</a></div>
					<div class="categorie"><a href="categorie4.php">JavaScript</a></div>
					<div class="categorie"><a href="categorie5.php">PHP</a></div>
					<div class="categorie"><a href="categorie6.php">C++</a></div>
					<div class="categorie"><a href="new_article.php">+  Добавить статью</a></div>
				</div>
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