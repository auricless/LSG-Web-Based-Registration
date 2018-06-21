
 <?php 

 	if(isset($_POST['add_event'])){
 		$name = $_POST['post_event_name'];
 		$image = $_FILES['post_image']['name'];
 		$image_temp = $_FILES['post_image']['tmp_name'];
 		$dt =  strtotime($_POST['post_date']);
 		$date = date('Y-m-d', $dt);

 		echo(move_uploaded_file($image_temp, "images/$image"));

 		$query = "INSERT INTO events(event_name, event_image, event_date) ";
 		$query .= "VALUES('{$name}', '{$image}', '{$date}')";

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
				<input class="form-control" type="text" name="post_event_name">
			</label>
		</div>

		<div class="form-group">
			<label>Image poster:
				<input class="form-control" type="file" name="post_image">
			</label>
		</div>

		<div class="form-group">
			<label>Date of event:
				<input class="form-control" type="date" name="post_date">
			</label>
		</div>

		<div class="form-group">
			<input class="btn btn-primary btn-md" type="submit" name="add_event">
		</div>

	</form>