<?php include ('header.php'); ?>
 <style>
 	.side a:nth-child(1) {
 		background-color: skyblue;
 		color: white;
 	}
 </style>

	<div class="main">
		<div class="side">
			<nav>
				<a href="setting_user.php?id=<?php echo $id;?>">Setting User</a>
				<a href="post_control.php?id=<?php echo $id;?>">Post Control</a>
				<a href="../../../home/success.php?id=<?php echo $id;?>">Back to Home</a>
			</nav>
		</div>
		<div class="content">
			<div class="form">
				<h2>Setting User</h2>
			</div>
			<div>
                <form action="../../../admin/user/update.php" method="post" enctype="multipart/form-data">
                <div>
                    <input type="hidden" name="id" value="<?php echo $result[0]['user_id'];?>">
                </div>
                <div>
                    <label>Username</label><br>
                    <input type="text" name="username" placeholder="username" value="<?php echo $result[0]['username']; ?>">
                </div>
                <br>
                <div>
                    <label>About Me</label><br>
                    <textarea name="about" cols="30" rows="10"><?php echo $result[0]['about']; ?></textarea>
                </div>
                <br>
                <div>
                    <label>Select image to upload:</label><br>
                    <img src="<?php echo $dirUpload.$result[0]['photo']; ?>" width="100px" height="100px" ><br>
                    <input type="file" name="photo">
                </div>
                <br>
                <div>
                    <input type="submit" value="Edit User">
                </div>
            </form>
			</div>
		</div>
	</div>
<?php include ('footer.php'); ?>