<?php

include('../../connection.php');

$id = $_GET['id'];

$db->Execute("DELETE FROM user WHERE user_id = '$id' ");

if($db)
    header('Location: ../views/user/setting_user.php?id='.$id);
else
    $e = $db->errorMsg();
	print $e;

?>