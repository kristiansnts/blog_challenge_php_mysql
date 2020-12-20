<?php 

include('../../connection/connection.php');

$id = $_GET['id'];
$post_id = $_GET['post_id'];

$query = mysqli_query($connect, "SELECT * FROM user WHERE user_id LIKE '$id' LIMIT 1");
$post = mysqli_query($connect, "SELECT * FROM post LEFT JOIN tag ON post.tag_id = tag.tag_id WHERE post_id ='$post_id' LIMIT 1");
$tag = mysqli_query($connect, "SELECT * FROM tag");
$result2 = mysqli_fetch_all($post, MYSQLI_ASSOC);
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
$result_tag = mysqli_fetch_all($tag, MYSQLI_ASSOC);

$dirUpload = "../../post/uploads_post/";

 ?>

<?php include ('header.php'); ?>
 <style>
 	.side a:nth-child(2) {
 		background-color: skyblue;
 		color: white;
     }
     
     .main{
         overflow: auto;
     }

     .content {
         height: 140vh;
     }

     .side {
         height: 140vh;
     }
 </style>

	<div class="main">
        <div class="side">
			    <nav>
				    <a href="setting_user.php?id=<?php echo $id;?>">Setting User</a>
				    <a href="post_control.php?id=<?php echo $id;?>">Post Control</a>
				    <a href="../../../home/page_user/success.php?id=<?php echo $id;?>">Back to Home</a>
			    </nav>
		    </div>
		<div class="content">
			<div class="form">
				<h2>Edit Post</h2>
			</div>
			        <div>
                    <form action="../../post/update.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
                    <div>
                        <input type="hidden" name="post_id" value="<?php echo $post_id;?>">
                    </div>
                    <div>
                        <label>Post Title</label><br>
                        <input type="text" name="title_name" value="<?php echo $result2[0]['title']; ?>">
                    </div>
                    <br>
                    <div>
                        <label>Title Description</label><br>
                        <input type="text" name="title_description" value="<?php echo $result2[0]['title_description']; ?>">
                    </div>
                    <br>
                    <div>
                        <label>Date Post</label><br>
                        <input type="date" name="date" value="<?php echo $result2[0]['date']; ?>">
                    </div>
                    <br>
                    <div>
                        <label>Select Image to upload: </label><br>
                        <img src="<?php echo $dirUpload.$result2[0]['image']; ?>" width="100px" height="100px" ><br>
                        <input type="file" name="image">
                    </div>
                    <br>
                    <div>
                        <label>Content</label><br>
                        <textarea name="description" cols="60" rows="20"><?php echo $result2[0]['description']; ?></textarea>
                    </div>
                    <br>
                    <div>
                        <label>Tags</label>
                        <select name="tag">
                                <option value="<?php echo $result2[0]['tag_id'];?>"><?php echo $result2[0]['tag_name'];?></option>
                                <?php foreach ($result_tag as $results): ?>
                                <option value="<?php echo $results['tag_id']; ?>" ><?php echo $results['tag_name']; ?> </option>
                                <?php endforeach;?>
                        </select>
                    </div>
                    <br>
                    <div>
                        <input type="submit" value="Edit Post">
                    </div>
                </form>
			</div>
		</div>
	</div>
<?php include ('footer.php'); ?>