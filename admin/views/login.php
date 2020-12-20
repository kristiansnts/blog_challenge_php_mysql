<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Masuk</title>
	<link rel="stylesheet" href="css/login.css">
	<style>
		
	</style>
</head>
<body>
		
	<div class="navbar">
		<a href="register.php">Daftar</a>
		<a href="login.php">Masuk</a>
	</div>

	<div class="main">
		<div class="item">
			<h3>Blog Ghack</h3>
			<form action="../login/verify.php" method="post">
				<div class="form">
					<input type="text" name="username" placeholder="username" required>
				</div>
				<div class="form">
					<input type="text" name="password" placeholder="password" required>
				</div>
				<div class="form">
					<input type="submit" value="Masuk">
				</div>
			</form>
		</div>
	</div>

	<footer>
		<p>Copyright by Kristian</p>
	</footer>

</body>
</html>