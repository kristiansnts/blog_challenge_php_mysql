<?php

include('../../connection.php');

$id = $_POST['id'];
$username = $_POST['username'];
$about = $_POST['about'];
$photo = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$dirUpload = "uploads/";
$upload = move_uploaded_file($tmp_name, $dirUpload.$photo);

$sql = "SELECT * FROM user WHERE user_id='$id' LIMIT 1";
$result = $db->getAll($sql);

$old_photo = $result[0]['photo'];

$image_url = $dirUpload.$old_photo;
if(file_exists($image_url)){
    unlink($image_url);
} else {
    die('file does not exist');
}

$table = 'user';
$record['username'] = $username;
$record['about'] = $about;
$record['photo'] = $photo;

$db->autoExecute($table, $record, 'UPDATE', 'user_id=' . $id);

if($db)
    header('Location: ../views/user/setting_user.php?id='.$id);
else
	$e = $db->errorMsg();
	print $e;
?>