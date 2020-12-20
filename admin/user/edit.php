<?php

include('../../connection.php');

$id = $_GET['id'];

$sql = "SELECT * FROM user WHERE user_id ='$id' LIMIT 1";
$result = $db->getAll($sql);
$dirUpload = "uploads/";

?>

<html>
    <head>
        <title>Add User</title>
    </head>
    <body>
        
        <a href="list.php">Back</a>
        <br>
        <br>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <div>
                <input type="hidden" name="id" value="<?php echo $result[0]['user_id'];?>">
            </div>
            <div>
                <label>Username</label><br>
                <input type="text" name="username" placeholder="username" value="<?php echo $result[0]['username']; ?>">
            </div>
            <br>
            <div>
                <label>About Me</label><br>
                <textarea name="about" cols="30" rows="10"><?php echo $result[0]['about']; ?></textarea>
            </div>
            <br>
            <div>
                <label>Select image to Upload:</label><br>
                <img src="<?php echo $dirUpload.$result[0]['photo']; ?>" width="100px" height="100px" ><br>
                <input type="file" name="photo">
            </div>
            <br>
            <div>
                <input type="submit" value="Edit User">
            </div>
        </form>

    </body>
</html>