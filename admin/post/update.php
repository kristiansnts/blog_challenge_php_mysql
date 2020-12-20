<?php

include('../../connection.php');

$post_id = $_POST['post_id'];
$id = $_GET['id'];

$title_name = $_POST['title'];
$title_desc = $_POST['title_description'];
$date = $_POST['date'];
$content = $_POST['description'];

$image = $_FILES['image']['name'];
$tmp_name = $_FILES['image']['tmp_name'];
$dirUpload = "uploads_post/";
$upload = move_uploaded_file($tmp_name, $dirUpload.$image);

$query = mysqli_query($connect, "SELECT * FROM post WHERE post_id='$post_id' LIMIT 1");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);

$old_image = $result[0]['image'];
$image_url = $dirUpload.$old_image;
if(file_exists($image_url)){
    unlink($image_url);
}else {
    die('file does not exist');
}

$table = 'post';
$record['username'] = $username;
$record['title'] = $title_name;
$record['title_description'] = $title_desc;
$record['date'] = $date;
$record['image'] = $image;
$record['description'] = $description;

$db->autoExecute($table, $record, 'UPDATE', 'post_id=' . $post_id);

if($db)
    header('Location: ../views/user/post_control.php?id='.$id );
else
    $e = $db->errorMsg();
    print $e;

?>