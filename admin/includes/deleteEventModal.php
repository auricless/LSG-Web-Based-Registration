<?php 
	if (isset($_GET['de_id'])) {
		$id = $_GET['de_id'];
	}
 ?>

				<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Delete Event</h4>
			    </div>
			    <div class="modal-body">
			    	<p>To delete this, you must enter the administrator password</p>
			        <form action="events.php?de_id=<?php echo $id ?>" method="POST">
			        	<div class="form-group">
								<label>Password:
									<input id="passTxtbox" class="form-control" type="password" name="pass">
								</label>
						</div>
						<div class="form-group">
							<button class= btn btn-md btn-primary name="admin">Submit</button>
						</div>
			        </form>
			    </div>
			    <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			    </div>