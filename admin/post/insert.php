<?php

include('../../connection.php');

$id = $_POST['id'];
$title_name = $_POST['title'];
$title_desc = $_POST['title_description'];
$date = $_POST['date'];
$content = $_POST['description'];

$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$dirUpload = "uploads_post/";
$upload = move_uploaded_file($tmp_name, $dirUpload.$image);

$table = 'post';

$record = array();
$record['title'] = $title_name;
$record['title_description'] = $title_desc;
$record['date']	= $date;
$record['description']	= $content;
$record['image']	= $image;
$record['user_id']	= $id;

$db->autoExecute($table,$record, 'INSERT');


if($db)
    header('Location: ../../home/success.php?id='.$id);
else
	$e = $db->errorMsg();
	print $e;

?>