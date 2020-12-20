<?php 

include('../../../connection.php');

$id = $_GET['id'];

$sql_user = "SELECT * FROM user WHERE user_id='$id' LIMIT 1";
$result = $db->getAll($sql_user);


$dirUpload = "../../user/uploads/";

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Akun Kontrol - <?php echo $result[0]['username']; ?></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<div class="header">
		<h4><a href="index.php?id=<?php echo $id; ?>">Kontrol Akun</a></h4>
	</div>