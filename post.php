<?php 
	
include('connection.php');

$post_id = $_GET['post_id'];

$sql_user = "SELECT * FROM user";
$sql_post = "SELECT * FROM post WHERE post_id = '$post_id' LIMIT 1";
$result = $db->getAll($sql_user);
$result2 = $db->getAll($sql_post);

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

		.footer {
			padding: 5px;
			text-align: center;
			background: #ddd;
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
	<div class="row">
		<div class="main">
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
		<div class="side">
			
		</div>

	</div>
<?php include('assets/footer.php'); ?>


