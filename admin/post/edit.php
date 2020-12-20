<?php 

include('../../connection.php');

$id = $_GET['id'];

$sql_post = "SELECT * FROM post WHERE post_id ='$id' LIMIT 1";
$result = $db->getAll($sql_post);

$dirUpload = "uploads_post/";

?>

<html>
    <head>
        <title>Add Tag</title>
    </head>
    <body>
        
        <a href="list.php">Back</a>
        <br>
        <br>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <div>
                <input type="hidden" name="id" value="<?php echo $id;?>">
            </div>
            <div>
                <label>Post Title</label><br>
                <input type="text" name="title" value="<?php echo $result[0]['title']; ?>">
            </div>
            <br>
            <div>
                <label>Title Description</label><br>
                <input type="text" name="title_description" value="<?php echo $result[0]['title_description']; ?>">
            </div>
            <br>
            <div>
                <label>Date Post</label><br>
                <input type="date" name="date" value="<?php echo $result[0]['date']; ?>">
            </div>
            <br>
            <div>
                <label>Select Image to upload: </label><br>
                <img src="<?php echo $dirUpload.$result[0]['image']; ?>" width="100px" height="100px" ><br>
                <input type="file" name="image">
            </div>
            <br>
            <div>
                <label>Content</label><br>
                <textarea name="description" cols="60" rows="20"><?php echo $result[0]['description']; ?></textarea>
            </div>
            <br>
            <div>
                <input type="submit" value="Edit Post">
            </div>
        </form>

    </body>
</html>