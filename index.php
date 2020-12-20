<?php 
	
	include('connection.php');

	$sql = "SELECT * FROM post";
	$result = $db->getAll($sql);

	$dirUpload = "admin/post/uploads_post/";

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

		tbody #view-post {
			padding-bottom: 30px;
		}

		.container-body{
			height: 100vh;
		}
	</style>
</head>
<body>

	<!-- Navbar before Login -->
	<div class="navbar-left" id="home">
		<a href="admin/views/register.php">Daftar</a>
		<a href="admin/views/login.php">Masuk</a>
	</div>

<div class="wrapper">
	<!-- Header -->
	<div class="header">
		<h1>Ghack Blog</h1>
		<p>Personal Blog created by Kristian/@cepingdaman </p>
	</div>


	<!-- content -->
	<div class="row container-body">
		<div class="main">
			<div>
				<div class="breadcrum-nav">
					<ul class="breadcrumb">
						<li><a href="index.php">Home</a></li>
					</ul>
				</div>
				<table style="width: 100%">
					<colgroup>
						<col span="1" style="width: 70%;">
						<col span="1" style="width: 30%;">
					</colgroup>
					<tbody>
						<div class="post">
							<?php foreach($result as $results): ?>
								<tr>
									<td><label><?php echo $results['date']; ?></label></td>
									<td rowspan="3"><img href="post.php?post_id=<?php echo $results['post_id']; ?>" src="<?php echo $dirUpload.$results['image']; ?>" width="100px" height="100px"></td>
								</tr>
								<tr>
									<td><label><strong><a href="post.php?post_id=<?php echo $results['post_id']; ?>"><h3><?php echo $results['title']; ?></h3></a></strong></label></td>
								</tr>
								<tr>
									<td id="desc"><a href="post.php?post_id=<?php echo $results['post_id']; ?>"><p><?php echo $results['description']; ?></p></a></td>
									<td></td>
								</tr>
							<?php endforeach; ?>
						</div>
					</tbody>
				</table>
			</div>
		</div>
		<div class="side">
			
		</div>
	</div>

<?php include('assets/footer.php'); ?>

</div>
