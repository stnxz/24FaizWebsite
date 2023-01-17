<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Halaman Login</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
	<section class="login py-5" style="background-image: url(img/p.jpg); background-size: auto;">
		<div class="login_box">
			<div class="left">
				<div class="top_link"><a href="register.php"><img src="https://drive.google.com/u/0/uc?id=16U__U5dJdaTfNGobB_OpwAJ73vM50rPV&export=download" alt="">Return home</a></div>
				<div class="contact">
					<form action="" method="POST">
						<h3>MASUK IN</h3>
						<input type="text" placeholder="USERNAME" name="username">
						<input type="password" placeholder="PASSWORD" name="password">
						<input type="submit" value="Login dek" name="submit" >
						<?php
							if (isset($_POST['submit'])) {
								$username = $_POST['username'];
								$password = $_POST['password'];

								$_SESSION['username'] = "Faizzz";
								$_SESSION['password'] = "999";

								if ($username == $_SESSION['username'] && $password == $_SESSION['password']) {
									header('Location:admin.php');
								} else {
									echo "Username atau Password salah !";
								}
							}
						?>
					</form>

				</div>
			</div>
			<div class="right">
				<div class="right-text">
					<h2>P</h2>
					<h5>LU MENDING LOGIN DAH</h5>
				</div>
				<div class="right-inductor"><img src="" alt=""></div>
			</div>
		</div>
	</section>
</body>
</html>