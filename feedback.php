<?php include "includes/header.php"; ?>
<?php include "includes/RegisterCss.php"; ?>
<?php include "includes/navigation.php"; ?>
<?php include "includes/db.php"; ?>

<?php 

	if(isset($_POST['feedbackPost'])){
		$feedback = $_POST['feedbackContent'];


			$query = "SELECT * FROM events WHERE event_launch = 1";
			$result = mysqli_query($con, $query);
			if(!$result){
				die("Query failed " . mysqli_error($con));
			}

			if(mysqli_num_rows($result) != 0){
				$addFeedback = true;
			}else{
				$addFeedback = false;
			}

			while($row = mysqli_fetch_assoc($result)){
				$event_id = $row['event_id'];
			}

			if($addFeedback){
				$query = "INSERT INTO feedbacks(lsg_id, feedback_content) ";
				$query .= "VALUES($event_id, '{$feedback}')";

				$result = mysqli_query($con, $query);
				if(!$result){
					die("Query failed " . mysqli_error($con));	
			}
			
		}
	}

 ?>


<div class="container">
	<div class="form-container">
		
		<form method="POST" action="Feedback.php">
		 	<div class="form-group">
		 		<label>Feedback/Suggestions:
		 			<textarea class="form-control" name="feedbackContent" rows="4" cols="50"></textarea>
		 		</label>
		 	</div>

		 	<div class="form-group">
		 		<input class="btn btn-primary btn-md" type="submit" name="feedbackPost">
		 	</div>

		</form>

	</div>
</div>



<?php include "includes/footer.php"; ?>