<?php

include('../../connection.php');

$post_id = $_GET['post_id'];
$id = $_GET['id'];

$db->Execute("DELETE FROM post WHERE post_id = '$post_id' ");

if($db)
    header('Location: ../views/user/post_control.php?id='.$id );
else
    $e = $db->errorMsg();
	print $e;

?>