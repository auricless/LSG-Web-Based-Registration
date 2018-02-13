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

        </div>
        <!-- /#page-wrapper -->

   <?php include "includes/admin_footer.php"; ?>
