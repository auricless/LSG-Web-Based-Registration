
 <?php 

 	if(isset($_GET['edit'])){
 		$id = $_GET['edit'];
 		$query = "SELECT * FROM events WHERE event_id = $id";
 		$result = mysqli_query($con, $query);
 		if(!$result){
 			die('Query failed ' . mysqli_error($con));
 		}

 		while ($row = mysqli_fetch_assoc($result)) {
 			$title = $row['event_name'];
 			$image = $row['event_image'];
 			$date = $row['event_date'];
 		}

 	}

  ?>

  <?php 

  	 	if(isset($_POST['edit_event'])){
	 		$name = $_POST['post_event_name'];
	 		$image = $_FILES['post_image']['name'];
	 		$image_temp = $_FILES['post_image']['tmp_name'];
	 		$dt =  strtotime($_POST['post_date']);
	 		$date = date('Y-m-d', $dt);

	 		move_uploaded_file($image_temp, "images/$image");

	 		$query = "UPDATE events SET event_name = '{$name}', event_image = '{$image}', event_date = '{$date}' ";
	 		$query .= "WHERE event_id = $id";

	 		$result = mysqli_query($con, $query);
	 		if(!$result){
	 			die("Query failed" . mysqli_error($con));
	 		}

	 		header("Location: events.php");
 	}

   ?>

	<form action="" method="POST" enctype="multipart/form-data">
		
		<div class="form-group">
			<label>Title of event:
				<input class="form-control" type="text" name="post_event_name" value="<?php echo $title ?>">
			</label>
		</div>

		<div class="form-group">
			<label>Image poster:
				<input class="form-control" type="file" name="post_image" value="<?php echo $image ?>">
			</label>
		</div>

		<div class="form-group">
			<label>Date of event:
				<input class="form-control" type="date" name="post_date" value="<?php echo $date ?>">
			</label>
		</div>

		<div class="form-group">
			<input class="btn btn-primary btn-md" type="submit" name="edit_event">
		</div>

	</form>