<?php
	session_start();

	if(isset($_SESSION['username_beauty_salon_Xw211qAAsq4']) && isset($_SESSION['password_beauty_salon_Xw211qAAsq4']))
	{
		header('Location: index.php');
		exit();
	}
	$pageTitle = 'hairdresser Admin Login';
	include 'connect.php';
	include 'Includes/functions/functions.php';


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Admin Login</title>
		<link href="Design/fonts/css/all.min.css" rel="stylesheet" type="text/css">

		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

		<link href="Design/css/sb-admin-2.min.css" rel="stylesheet">
		<link href="Design/css/main.css" rel="stylesheet">
	</head>
	<body>
		<div class="login">
			<form class="login-container validate-form" name="login-form" method="POST" action="login.php" onsubmit="return validateLogInForm()">
				<span class="login100-form-title p-b-32">
					Admin Login
				</span>

				<?php

					if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signin-button']))
					{
						$username = test_input($_POST['username']);
						$password = test_input($_POST['password']);
						$hashedPass = sha1($password);

						$stmt = $con->prepare("Select admin_id, username,password from admin where username = ? and password = ?");
						$stmt->execute(array($username,$hashedPass));
						$row = $stmt->fetch();
						$count = $stmt->rowCount();

						if($count > 0)
						{

							$_SESSION['username_beauty_salon_Xw211qAAsq4'] = $username;
							$_SESSION['password_beauty_salon_Xw211qAAsq4'] = $password;
							$_SESSION['admin_id_beauty_salon_Xw211qAAsq4'] = $row['admin_id'];
							header('Location: index.php');
							die();
						}
						else
						{
							?>

							<div class="alert alert-danger">
								<button data-dismiss="alert" class="close close-sm" type="button">
									<span aria-hidden="true">×</span>
								</button>
								<div class="messages">
									<div>Ім'я користувача та/або пароль неправильні!</div>
								</div>
							</div>

							<?php
						}
					}

				?>
				<div class="form-input">
					<span class="txt1">Ім'я користувача</span>
					<input type="text" name="username" class = "form-control" oninput = "getElementById('required_username').style.display = 'none'" autocomplete="off">
					<span class="invalid-feedback" id="required_username">Ім'я користувача обов'язкове!</span>
				</div>

				<div class="form-input">
					<span class="txt1">Пароль</span>
					<input type="password" name="password" class="form-control" oninput = "getElementById('required_password').style.display = 'none'" autocomplete="new-password">
					<span class="invalid-feedback" id="required_password">Пароль обов'язковий!</span>
				</div>

				<p>
					<button type="submit" name="signin-button" >Увійти</button>
				</p>

				<span class="forgotPW">Забули пароль? <a href="#">Змініть його тут.</a></span>
			</form>
		</div>
		<footer class="sticky-footer bg-white">
			<div class="container my-auto">
		  		<div class="copyright text-center my-auto">
					<span>Beauty salon Website by Onishchenko Katerina</span>
		  		</div>
			</div>
	  	</footer>

		<script src="Design/js/jquery.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script src="Design/js/bootstrap.bundle.min.js"></script>
		<script src="Design/js/sb-admin-2.min.js"></script>
		<script src="Design/js/main.js"></script>
	</body>
</html>
