<?php

include('../../connection.php');

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$about = $_POST['about'];

$photo = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$dirUpload = "uploads/";
$upload = move_uploaded_file($tmp_name, $dirUpload.$photo);

$table = 'user';

$record = array();
$record['username'] = $username;
$record['password'] = $password;
$record['about']	= $about;
$record['photo']	= $photo;

$db->autoExecute($table,$record, 'INSERT');

if($db)
	header('Location: ../../redirect.php?id='. $username);
else
	$e = $db->errorMsg();
	print $e;

?>