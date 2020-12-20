<?php 

include('../../../connection.php');

$id = $_GET['id'];

$sql_post = "SELECT * FROM post WHERE user_id = '$id' ";
$result_post = $db->getAll($sql_post);

$dirUpload_post = "../../post/uploads_post/";


 ?>

<?php include ('header.php'); ?>
 <style>
 	.side a:nth-child(2) {
 		background-color: skyblue;
 		color: white;
 	}
 </style>

	<div class="main">
		<div class="side">
			<nav>
				<a href="setting_user.php?id=<?php echo $id;?>">Setting User</a>
				<a href="post_control.php?id=<?php echo $id;?>">Post Control</a>
				<a href="../../../home/success.php?id=<?php echo $id;?>">Back to Home</a>
			</nav>
		</div>
		<div class="content">
			<div class="form">
				<h2>Post Control</h2>
			</div>
			<div>
				<table border="1">
					<tr>
						<th>Number</th>
                		<th>Title</th> 
                		<th>Title-Description</th>
                		<th>Date</th>
                		<th>Image</th>
                		<th>Description</th>
                		<th>Action</th>
            		</tr>
					<?php $i = 1;?>
            		<?php foreach($result_post as $results): ?>
            		<tr>
						<td><?php echo $i++?></td>
                    	<td><?php echo $results['title']; ?></td>
                    	<td><?php echo $results['title_description']; ?></td>
                    	<td><?php echo $results['date']; ?></td>
                    	<td><img src="<?php echo $dirUpload_post.$results['image']; ?>" width="100px" height="100px"></td>
                    	<td><?php echo $results['description']; ?></td>
                    	<td>
                        	<a href="edit_post.php?post_id=<?php echo $results['post_id']; ?>&id=<?php echo $id;?>">Edit</a>
                        	<a href="../../post/delete.php?post_id=<?php echo $results['post_id']; ?>&id=<?php echo $id;?>">Hapus</a>
                   		</td>
            		</tr>
            		<?php endforeach;?>
				</table>
			</div>
		</div>
	</div>
<?php include ('footer.php'); ?>