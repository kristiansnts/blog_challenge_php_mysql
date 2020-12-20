<?php

include('../connection.php');

$id = $_GET['id'];

$sql_user = "SELECT * FROM user WHERE user_id = '$id' ";
$result = $db->getAll($sql_user);

$dirUpload = "../../admin/post/uploads_post/";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog Ghack</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<style>


	</style>
</head>
<body>

	<!-- Navbar after Login -->
	<div class="navbar-left dropdown" >
		<a onclick="showdropdown()" class="dropbtn">Selamat Datang, <?php echo $result[0]['username']; ?></a>
			<div id="dropDown" class="dropdown-content">
				<a href="../../admin/views/user/index.php?id=<?php echo $id; ?>">Kontrol Akun</a>
				<a id=logout onclick="LogOut()">Log Out</a>
			</div>
	</div>

	<!-- Header -->
	<div class="header">
		<h1>Ghack Blog</h1>
		<p>Personal Blog created by Kristian/@cepingdaman </p>
	</div>


	<!-- content -->
	<div class="row">
		<div class="main">
			<div>
				<div class="breadcrum-nav">
					<ul class="breadcrumb">
						<li><a href="success.php?id=<?php echo $id;?>">Home</a></li>
					</ul>
				</div>
				<table style="width: 100%">
					<colgroup>
						<col span="1" style="width: 70%;">
						<col span="1" style="width: 30%;">
					</colgroup>
					<tbody>
                        <h2>Create Post</h2>
                            <form action="../admin/post/insert.php" method="post" enctype="multipart/form-data">
                            <div>
                                <input type="hidden" name="id" value="<?php echo $id;?>">
                            </div>
                            <div>
                                <label>Post Title</label><br>
                                <input type="text" name="title">
                            </div>
                            <br>
                            <div>
                                <label>Title Description</label><br>
                                <input type="text" name="title_description">
                            </div>
                            <br>
                            <div>
                                <label>Date Post</label><br>
                                <input type="date" name="date">
                            </div>
                            <br>
                            <div>
                                <label>Select Image to upload: </label><br>
                                <input type="file" name="image">
                            </div>
                            <br>
                            <div>
                                <label>Content</label><br>
                                <textarea name="description" cols="60" rows="20"></textarea>
                            </div>
                            <br>
                            <div>
                                <input type="submit" value="Tambah Post">
                            </div>
                        </form>
					</tbody>
				</table>
			</div>
		</div>
		<div class="side">
            <div>
					<div class="create-post">
						<a href="create_post.php?id=<?php echo $id;?>"><strong>Create Post</strong></a>
					</div>
				</div>
				<br>
				<div>
					<div class="list-post">
						<a href="../../admin/views/user/post_control.php?id=<?php echo $id;?>"><strong>List Post</strong></a>
					</div>
				</div>
		</div>
	</div>

<?php include('../assets/footer.php'); ?>