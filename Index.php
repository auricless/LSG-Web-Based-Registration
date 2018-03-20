<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
<?php 

$query = "SELECT * FROM events WHERE event_launch = 1";
$result = mysqli_query($con, $query);
if(!$result){
	die("Query failed " . mysqli_error($con));
}

if(mysqli_num_rows($result) != 0){
	$showGuest = true;
}else{
	$showGuest = false;
}

while($row = mysqli_fetch_assoc($result)){
	$event_id = $row['event_id'];
	$lsg_event = $row['event_name'];
	$lsg_image = $row['event_image'];
}
  ?>
<?php include "includes/IndexCSS.php"; ?>
<?php include "includes/navigation.php"; ?>

	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-lg-12">
					<h1 id="head">Well, hello there!</h1>
					<p>We are glad that you came, please register first. Enjoy!</p>
					<hr>
					<a class="btn btn-default btn-lg" href="register.php"><span><i class="fa fa-user" aria-hidden="true"></i></span> Register Here</a></button>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include "includes/footer.php"; ?>
