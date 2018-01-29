<?php include "includes/header.php"; ?>
<?php include "includes/RegisterCss.php"; ?>
<?php include "includes/navigation.php"; ?>
<?php include "includes/db.php"; ?>
<?php include "includes/functions.php"; ?>

<!-- 
TO-DO:
-refactor codes *DONE*
-convert database to Excel
-clientside form validation

 -->
<?php addGuest(); ?>
<?php deleteGuest(); ?>
<div class="validation-message"></div>
	
		<div class="container">
			<div class="form-container">
				<h1>Register</h1>
				<form action="Register.php" method="POST" name="guestForm" onsubmit="return validate()">
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
										<input type="radio" name="gender" value="Male" required>
										Male
									</label>
									<label class="radio-inline">
										<input type="radio" name="gender" value="Female" required>
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
					<?php $count = showGuests(); ?>					
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
<?php echo time(); ?>
<?php include "includes/footer.php"; ?>