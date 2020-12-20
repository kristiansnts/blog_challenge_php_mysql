<?php 

include('connection.php');

$query = mysqli_query($connect, "SELECT * FROM user");
$result = mysqli_fetch_all($query, MYSQLI_ASSOC);
$dirUpload = "../../user/uploads/";

 ?>

 <?php include ('header.php'); ?>
 <style>
 	.side a:nth-child(1) {
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
                		<th>Username</th>
                		<th>About</th>
                		<th>Photo</th>
                		<th>Level</th>
                		<th>Action</th>
            		</tr>
					<?php $i = 1;?>
            		<?php foreach($result as $results): ?>
            		<tr>
                    	<td><?php echo $i++?></td>
                    	<td><?php echo $results['username']; ?></td>
                    	<td><?php echo $results['about']; ?></td>
                    	<td><img src="<?php echo $dirUpload.$results['photo']; ?>" width="100px" height="100px"></td>
                    	<td></td>
                    	<td>
                        	<a href="../../user/edit.php?id=<?php echo $results['user_id']; ?>">Edit</a>
                        	<a href="../../user/hapus.php?id=<?php echo $results['user_id']; ?>">Hapus</a>
                    	</td>
            		</tr>
            		<?php endforeach;?>
				</table>
			</div>
		</div>
	</div>
<?php include ('footer.php'); ?>
