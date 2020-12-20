<?php

include('../../connection.php');

$sql = "SELECT * FROM user";
$result = $db->getAll($sql);
$dirUpload = "uploads/";

?>

<html>
    <head>
        <title>List_User</title>
    </head>
    <body>
        
        <a href="add.php">Add User</a>
        <br>
        <br>
        <table border=1;>
            <tr>
                <th>Number</th>
                <th>Username</th>
                <th>Password</th>
                <th>About</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
            <?php $i = 1;?>
            <?php foreach($result as $results): ?>
            <tr>
                    <td><?php echo $i++?></td>
                    <td><?php echo $results['username']; ?></td>
                    <td><?php echo $results['password']; ?></td>
                    <td><?php echo $results['about']; ?></td>
                    <td><img src="<?php echo $dirUpload.$results['photo']; ?>" width="100px" height="100px"></td>
                    <td>
                        <a href="edit.php?id=<?php echo $results['user_id']; ?>">Edit</a>
                        <a href="delete.php?id=<?php echo $results['user_id']; ?>">Hapus</a>
                    </td>
            </tr>
            <?php endforeach;?>
        </table>
    </body>
</html>