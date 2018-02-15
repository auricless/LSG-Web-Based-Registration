    <?php include "includes/admin_header.php"; ?>
   
    <?php 

    	if(isset($_GET['delete'])){
    		$id = $_GET['delete'];

    		$query = "DELETE FROM events ";
    		$query .= "WHERE event_id = $id";

    		$result = mysqli_query($con, $query);
    		if(!$result){
    			die("Query faield " . mysqli_error($con));
    		}
    	}

    	/*
			
		TODOs:
		1. change frontend - 4
		2. dynamically change background depends on launched lsg event - 2
		3. dynamically register guest depends on lsg event - 1
		4. add guest or team field in guests database and front's registration - 3
		5. add chart widget with sort and filter feat - 5

    	*/

     ?>


    <div id="wrapper">



        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            LSG Events
                            <small>View All</small>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->
                 <?php 

                	if(isset($_GET['source'])){
                		$source = $_GET['source'];
                	}else{
                		$source = "";
                	}
            		switch ($source) {
            			case 'add_event':
            				include "includes/add_event.php";
            				break;
            			case 'edit_event':
            				include "includes/edit_event.php";
            				break;
            			
            			default:
            				include "includes/view_all_events.php";
            				break;
            		}

                 ?>

            </div>
            <!-- /.container-fluid -->

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
        <!-- /#page-wrapper -->


   <?php include "includes/admin_footer.php"; ?>
