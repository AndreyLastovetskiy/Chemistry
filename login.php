<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Авторизация</title>
    <link rel="stylesheet" href="./style/login.css"/>
</head>
<body>
<section class="container">
	<article class="half">
		<h1>Чистый дом</h1>
		<div class="tabs">
			<span class="tab signin active"><a href="#signin">Вход</a></span>
			<span class="tab signup"><a href="#signup">Регистрация</a></span>
		</div>
		<div class="content">
			<div class="signin-cont cont">
				<form action="./vendor/login.php" method="post" enctype="multipart/form-data">
					<input type="text" name="login" id="login" class="inpt" required="required" placeholder="Логин">
					<label for="login">Логин</label>
					<input type="password" name="password" id="password" class="inpt" required="required" placeholder="Пароль">
                	<label for="password">Пароль</label>
					<div class="submit-wrap">
						<input type="submit" value="Войти" class="submit">
					</div>
        		</form>
				<?php
				if (($_SESSION["errMes"] ?? '') === ''); else {
					print_r($_SESSION["errMes"]);
					session_destroy();
				}
				?>
    		</div>
    	<div class="signup-cont cont">
            <form action="./vendor/signup.php" method="post" enctype="multipart/form-data">
				<input type="name" name="name" id="name" class="inpt" required="required" placeholder="Логин">
				<label for="name">Логин</label>
				<input type="email" name="email" id="email" class="inpt" required="required" placeholder="Email">
                <label for="email">Email</label>
				<input type="password" name="password" id="password" class="inpt" required="required" placeholder="Пароль">
                <label for="password">Пароль</label>
				<input type="password" name="cpassword" id="cpassword" class="inpt" required="required" placeholder="Подтверждение пароля">
                <label for="cpassword">Пароль</label>
				<div class="submit-wrap">
					<input type="submit" value="Зарегестрироваться" class="submit">
				</div>
        	</form>
			<?php
			if (($_SESSION["errMesUp"] ?? '') === ''); else {
				print_r($_SESSION["errMesUp"]);
				session_destroy();
			}
			?>
        </div>
	</article>
</section>

	<script src="//code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="./js/login.js"></script>
    </body>
</html>

