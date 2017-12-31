<?php include "includes/header.php"; ?>
<?php include "includes/RegisterCss.php"; ?>
<?php include "includes/navigation.php"; ?>

<?php 
	$db["db_host"] = "localhost";
	$db["db_user"] = "root";
	$db["db_pass"] = "";
	$db["db_name"] = "lsg";

	//DEFINE DB as CONSTANT
	foreach ($db as $key => $data) {
		define(strtoupper($key), $data);
	}

	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if (!$con) {
		die("Error in connecting database");
	}
 ?>

<!-- 
TO-DO:
-refactor codes
-convert database to Excel

 -->

<?php
 	if (isset($_POST['submit'])) {
		if((!isset($_POST['fname']) || trim($_POST['fname']) == "") || !isset($_POST['gender']) || (!isset($_POST['fname']) || trim($_POST['fname']) == "") || empty($_POST['age']) || (!isset($_POST['contact']) || trim($_POST['contact']) == "") || (!isset($_POST['address']) || trim($_POST['address']) == "") || (!isset($_POST['invited']) || trim($_POST['invited']) == "") ){
			echo
			"<div class='alert alert-warning'>
				<strong>Warning!</strong> Required fields were not filled up.
			</div>";
		}else if(preg_match('/[^0-9]+$/', $_POST['age']) == 1) {
			echo
			"<div class='alert alert-warning'>
				<strong>Warning!</strong> Age should be numeric.
			</div>";
		}
		else{
				$time = time();
				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$gender = $_POST['gender'];
				$age = $_POST['age'];
				$address = $_POST['address'];
				$contact = $_POST['contact'];
				$invited = $_POST['invited'];

				$query = "INSERT INTO guests(attended_time, first_name, last_name, gender, age, address, contact, invited_by) ";
				$query .= "VALUES(now(), '{$fname}', '{$lname}', '{$gender}',$age , '{$address}', '{$contact}', '{$invited}')";

				$result = mysqli_query($con, $query);
				if (!$result) {
					die("SQL query failed " . mysqli_error($con));
				}else{
					echo
					"<div class='alert alert-success'>
						<strong>Success!</strong> Guest succesfully registered.
					</div>";
				}
		}
	}
?>

<?php 
	if (isset($_POST['admin'])) {
		$pass = $_POST['pass'];

		$query = "SELECT * FROM admins WHERE password = '{$pass}'";
		$result = mysqli_query($con, $query);
		if (!$result) {
			die("QUERY failed" . mysqli_error($con));
		}

		if(mysqli_num_rows($result) == 0){
			echo
			"<div class='alert alert-danger'>
				<strong>Success!</strong> Wrong Admin password entered.
			</div>";			
		}else{
			while ($row = mysqli_fetch_assoc($result)) {
				$dbPass = $row['password'];
			}
		}

		if($pass === $dbPass){
			if (isset($_GET['g_id'])) {
				$id = $_GET['g_id'];

				$query = "DELETE FROM guests WHERE guest_id = $id";

				$result = mysqli_query($con, $query);

				if(!$result){
					die("QUERY failed" . mysqli_error($con));
				}else{
					echo
					"<div class='alert alert-success'>
						<strong>Success!</strong> Record succesfully deleted.
					</div>";
				}
			}
		}
	}
 ?>
	
		<div class="container">
			<div class="form-container">
				<h1>Register</h1>
				<form action="Register.php" method="POST">
					<div class="row">
						<div class="col-lg-12">
							<div class="form-group">
								<label>First Name:
									<input class="form-control" type="text" placeholder="Aron" required name="fname">
								</label>
								<label>Last Name:
									<input class="form-control" type="text" placeholder="Ciruela" name="lname">
								</label>
							</div>

							<div class="form-group">
								<label>Gender:
									<label class="radio-inline">
										<input type="radio" name="gender" value="Male">
										Male
									</label>
									<label class="radio-inline">
										<input type="radio" name="gender" value="Female">
										Female
									</label>
								</label>
							</div>

							<div class="form-group">
								<label style="width: 15%;">Age:
									<input class="form-control" type="text" placeholder="21" name="age">
								</label>
								<label style="width: 84%;">Address:
									<input class="form-control" type="text" placeholder="B7 L1 Brgy. Kapitan KUA, GMA Cavite" name="address">
								</label>
							</div>

							<div class="form-group">
								<label>Contact #:
									<input class="form-control" type="text" placeholder="09395913552" name="contact">
								</label>
								<label>Invited By:
									<input class="form-control" type="text" placeholder="Marcel" name="invited">
								</label>
							</div>

							<div class="form-group">
								<button class="btn btn-primary btn-md" name="submit">Submit</button>
								<a class="btn btn-danger btn-md cancel-btn" href="Index.php">Cancel</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

		<div class="container">
			<h3>Guest List</h3>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>ID</th>
						<th>Time</th>
						<th>Name</th>
						<th>Gender</th>
						<th>Age</th>
						<th>Address</th>
						<th>Contact #</th>
						<th>Invited by:</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$count = 0;
						$query = "SELECT * FROM guests";
						$result = mysqli_query($con, $query);
						if (!$result) {
							die("SQL query failed " . mysqli_error($con));
						}
						while ($row = mysqli_fetch_assoc($result)) {
							$ID = $row['guest_id'];
							$time = $row['attended_time'];
							$name = $row['first_name'] . " " . $row['last_name'];
							$gender = $row['gender'];
							$age = $row['age'];
							$address = $row['address'];
							$contact = $row['contact'];
							$invited = $row['invited_by'];
							$count++;
					 ?>
					<tr>
						<td><?php echo $ID ;?></td>
						<td><?php echo date("h:i:sA", strtotime($time));?></td>
						<td><?php echo $name; ?></td>
						<td><?php echo $gender; ?></td>
						<td><?php echo $age; ?></td>
						<td><?php echo $address; ?></td>
						<td><?php echo $contact; ?></td>
						<td><?php echo $invited; ?></td>
						<!-- Register.php?g_id=<?php echo $ID; ?> -->
						<td class="danger"><a href="includes/deleteModal.php?g_id=<?php echo $ID; ?>" data-toggle="modal" data-target="#myModal">Delete</a></td>
					</tr>
					<?php } ?>					
				</tbody>
			</table>
			<p>Total guest count: <?php echo $count; ?></p>
			<div>
				<div class="form-group">
<!-- 					<button class="btn btn-success btn-md">Print</button>
					<button class="btn btn-danger btn-md">Export</button> -->
					<button class="btn btn-primary btn-md"><a href="Raffle.php" style="color:white;">Draw Raffle</a></button>
				</div>
			</div>

			<!-- Modal -->
			<div id="myModal" class="modal fade" role="dialog">
			  <div class="modal-dialog">
			    <!-- Modal content-->
			    <div class="modal-content">

			    </div>
			  </div>
			</div>
			<!-- Modal END-->

		</div>
</div>


<?php include "includes/footer.php"; ?>