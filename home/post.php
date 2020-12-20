<?php

include('../connection.php');

$post_id = $_GET['post_id'];

$sql_user = "SELECT * FROM user";
$sql_post = "SELECT * FROM post WHERE post_id = '$post_id' LIMIT 1";
$result = $db->getAll($sql_user);
$result2 = $db->getAll($sql_post);

$dirUpload = "../admin/post/uploads_post/";

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

		#logout {
			cursor: pointer;
		}
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
						<div class="post">
							<span><?php echo $result2[0]['date']; ?></span>
                            <h2><?php echo $result2[0]['title']; ?></h2>
                            <div class="content">
                                <img src="<?php echo $dirUpload.$result2[0]['image']; ?>" width="100%" height="400px" alt="<?php echo $result2['image']; ?>">
                                <p><?php echo $result2[0]['description']; ?></p>
                            </div>
						</div>
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
				<br>
		</div>
	</div>

<script>
		function LogOut(){
		if(confirm("Are you sure to Log Out this Account?")){
			window.location.href = '../index.php';
		} else {
			window.location.href = 'post.php?post_id=<?php echo $result2[0]['post_id'];?>';
		}
	}	
	</script>

<?php include('../assets/footer.php'); ?>