<?php

include('../../connection.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql_user = "SELECT user_id FROM user WHERE username LIKE '$username' LIMIT 1";
$result_user = $db->getAll($sql_user);

$sql_password = "SELECT password FROM user WHERE username LIKE '$username' LIMIT 1";
$result_password = $db->getAll($sql_password);

$id = $result_user[0]['user_id'];
$hash = $result_password[0]['password'];

if(password_verify($password,$hash)){
    header("Location: ../../home/success.php?id=".$id);
}else{
    die("Password Incorect!");
}
?>