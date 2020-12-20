<?php 

include('connection.php');

$username = $_GET['id'];

$sql  = "SELECT * FROM user WHERE username = '$username'";
$result = $db->getAll($sql);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Berhasil</title>
</head>
<body>
    <p>Selamat <strong><?php echo $result[0]['username']; ?></strong> akun anda berhasil dibuat. Kembali ke <a href="home/success.php?id=<?php echo $result[0]['user_id']; ?>">Home</a></p>
</body>
</html>