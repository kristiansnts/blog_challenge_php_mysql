<?php 

include('../../../connection.php');

$sql_post = "SELECT * FROM post LEFT JOIN user ON post.user_id = user.user_id");
$result = $db->getAll($sql_post);

$dirUpload = "../../post/uploads_post/";

 ?>

<?php include ('header.php'); ?>
 <style>
 	.side a:nth-child(2) {
 		background-color: skyblue;
 		color: white;
 	}
 </style>

	<div class="main">
		<?php include ('side.php'); ?>
		</div>
		<div class="content">
			<div class="form">
				<h2>User Control</h2>
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
                		<th>Tags</th>
						<th>User</th>
                		<th>Views</th>
                		<th>Action</th>
            		</tr>
					<?php $i = 1;?>
            		<?php foreach($result as $results): ?>
            		<tr>
					<td><?php echo $i++?></td>
                    <td><?php echo $results['title']; ?></td>
                    <td><?php echo $results['title_description']; ?></td>
                    <td><?php echo $results['date']; ?></td>
                    <td><img src="<?php echo $dirUpload.$results['image']; ?>" width="100px" height="100px"></td>
                    <td><?php echo $results['description']; ?></td>
                    <td><?php echo $results['tag_name']; ?></td>
					<td><?php echo $results['username']; ?></td>
                    <td><?php echo $results['total_views']; ?></td>
                    <td>
                        <a href="../../post/edit.php?id=<?php echo $results['post_id']; ?>">Edit</a>
                        <a href="../../post/hapus.php?id=<?php echo $results['post_id']; ?>">Hapus</a>
                    </td>
            		</tr>
            		<?php endforeach;?>
				</table>
			</div>
		</div>
	</div>
<?php include ('footer.php'); ?>