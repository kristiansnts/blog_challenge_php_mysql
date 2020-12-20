<?php include ('header.php'); ?>

	<div class="main">
		<div class="side">
			<nav>
				<a href="setting_user.php?id=<?php echo $id;?>">Setting User</a>
				<a href="post_control.php?id=<?php echo $id;?>">Post Control</a>
				<a href="../../../home/page_user/success.php?id=<?php echo $id;?>">Back to Home</a>
			</nav>
		</div>
		<div class="content">
			<h2>Selamat Datang, <?php echo $result[0]['username'];?></h2>
			<br>
			<p>Untuk Pengaturan User klik <span><a href="#">Setting User</a></span></p>
			<p>Untuk Pengaturan Post klik <span><a href="post_control.php?id=<?php echo $id;?>">Post Control</a></span></p>
		</div>
	</div>
<?php include ('footer.php'); ?>