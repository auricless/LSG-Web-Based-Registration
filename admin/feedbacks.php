<?php include "includes/admin_header.php"; ?>

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
                <!-- 

EDIT FEEDBACK CRUD

-->
<table class = "table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>LSG Event Title</th>
            <th>Feedback</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $query = "SELECT * FROM feedbacks";
            $result = mysqli_query($con, $query);
            if(!$result){
                die("Query error " . mysqli_error($con));
            }
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['feedback_id'];
                $lsg_id = $row['lsg_id'];

                $lsgquery = "SELECT * FROM events WHERE event_id = $lsg_id";
                $lsgresult = mysqli_query($con, $lsgquery);
                if(!$lsgresult){
                    die("Query error " . mysqli_error($con));
                }

                while($lsgrow = mysqli_fetch_assoc($lsgresult)){
                    $title = $lsgrow['event_name'];
                }

                $content = $row['feedback_content'];

                echo
                "
                    <tr>
                        <td>{$id}</td>
                        <td>{$title}</td>
                        <td>{$content}</td>
                    </tr>
                        ";
            }
         ?>
        </tbody>
</table>

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
