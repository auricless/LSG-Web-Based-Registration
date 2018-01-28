<?php

	function addGuest(){
		global $con;
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
	}

	function deleteGuest(){
		global $con;
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
	}

	function showGuests(){
			global $con;
			$count = 0;
			$query = "SELECT * FROM guests";
			$result = mysqli_query($con, $query);
			if (!$result) {
				die("SQL query failed " . mysqli_error($con));
			}
			while ($row = mysqli_fetch_assoc($result)) {
				$ID = $row['guest_id'];
				$time = date("h:i:sA", strtotime($row['attended_time']));
				$name = $row['first_name'] . " " . $row['last_name'];
				$gender = $row['gender'];
				$age = $row['age'];
				$address = $row['address'];
				$contact = $row['contact'];
				$invited = $row['invited_by'];
				$count++;
			 echo
			"<tr>
				<td> {$ID} </td>
				<td> {$time} </td>
				<td> {$name} </td>
				<td> {$gender} </td>
				<td> {$age} </td>
				<td> {$address} </td>
				<td> {$contact} </td>
				<td> {$invited} </td>
				<!-- Register.php?g_id=<?php echo $ID> -->
				<td class='danger'><a href='includes/deleteModal.php?g_id='{$ID}'' data-toggle='modal' data-target='#myModal'>Delete</a></td>
			</tr>";
		}

		return $count;
	}
 	
?>