<?php include "includes/header.php"; ?>
<?php include "includes/RaffleCSS.php"; ?>
<?php include "includes/navigation.php"; ?>

<center style='height:65%';>
	<div style='margin-top: 15%;'>
		<h1>Congratulations!</h1>
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

	$guests = [];
	$query = "SELECT * FROM guests";
	$result = mysqli_query($con, $query);
	while ($row = mysqli_fetch_assoc($result)) {
		array_push($guests, $row['first_name'] . " " . $row['last_name']);
	}
	
	$arrSize = sizeof($guests) - 1;
	$guest_won = rand(0, $arrSize);

	echo 
	"
		<h1 class='alert alert-success'><strong>{$guests[$guest_won]}</strong></h1>
		<h2>You won a raffle item! Please claim it at the front.</h2>
	";

 ?>
 	<a class="btn btn-lg btn-primary" href="Raffle.php" style="color: white;">Draw Again</a>
 	<a class="btn btn-lg btn-danger" href="Index.php" style="color: white;">Go Back</a>
 	</div>
</center>
<?php include "includes/footer.php"; ?>