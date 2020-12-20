<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Daftar</title>
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
			<form action="../user/insert.php" method="post" enctype="multipart/form-data">
				<div class="form">
					<label>Username</label><br>
					<input type="text" name="username" placeholder="username" required>
				</div>
				<div class="form">
					<label>Password</label><br>
					<input type="text" name="password" placeholder="password" required>
				</div>
				<div class="form">
					<label>About Me</label><br>
					<textarea name="about" cols="30" rows="10"></textarea>
				</div>
				<div>
                	<label>Select image to Upload:</label><br>
                	<input type="file" name="photo">
            	</div>
				<div class="form">
					<label><br></label>
					<input type="submit" value="Daftar">
				</div>
			</form>
		</div>
	</div>

	<footer>
		<p>Copyright by Kristian</p>
	</footer>

</body>
</html>