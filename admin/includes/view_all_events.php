<?php 

    if(isset($_GET['launch'])){

        $query = "UPDATE events SET event_launch = 0";
        $result = mysqli_query($con, $query);
        if(!$result){
            die("Query failed " . mysqli_error($con));
        }

        if(isset($_GET['g_id'])){
            $id = $_GET['g_id'];
            $query = "UPDATE events SET event_launch = 1 WHERE event_id = $id";
            $result = mysqli_query($con, $query);
            if(!$result){
                die("Query failed " . mysqli_error($con));
            }
        }
    }else if(isset($_GET['unlaunch'])){
        $query = "UPDATE events SET event_launch = 0";
        $result = mysqli_query($con, $query);
        if(!$result){
            die("Query failed " . mysqli_error($con));
        }
    }

 ?>

 <?php 

 if(isset($_GET['de_id'])){
    $event_to_delete = $_GET['de_id'];

    $isCorrect = isAdminPassCorrect();

    if($isCorrect){
        $query = "DELETE FROM events WHERE event_id = $event_to_delete";
        $result = mysqli_query($con, $query);
        if(!$result){
            die("Query failed " . mysqli_error($con));
        }else{
            echo 
            "<div class='alert alert-success'>
                <strong>Success!</strong> Record succesfully deleted.
            </div>";
        }
    }else{
        echo
            "<div class='alert alert-warning'>
                <strong>Error!</strong> Invalid admin password entered.
            </div>";
    }
 }

    function isAdminPassCorrect(){
        global $con;

        if (isset($_POST['admin'])) {
            $pass = $_POST['pass'];


            $query = "SELECT * FROM admins WHERE password = '{$pass}'";

            $result = mysqli_query($con, $query);
            if (!$result) {
                die("QUERY failed" . mysqli_error($con));
            }

            if(mysqli_num_rows($result) != 0){
                while ($row = mysqli_fetch_assoc($result)) {
                    $dbPass = $row['password'];
                }

                if($dbPass === $pass){
                    return true;
                }
            }

            return false;
        }
    }
  ?>

<table class = "table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>LSG Event Title</th>
            <th>LSG Poster</th>
            <th>Date</th>
            <th>Guests</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $query = "SELECT * FROM events";
            $result = mysqli_query($con, $query);
            if(!$result){
                die("Query error " . mysqli_error($con));
            }
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['event_id'];
                $title = $row['event_name'];
                $image = $row['event_image'];
                $date = $row['event_date'];
                $isLaunch = $row['event_launch'];
                
                if($isLaunch){
                    echo "<tr class='success'>";
                }else{
                    echo "<tr>";
                }

                echo
                "
                        <td>{$id}</td>
                        <td>{$title}</td>
                        <td>{$image}</td>
                        <td>{$date}</td>
                        <td><a href='events.php?source=view_guests&edit={$id}'>View</a></td>
                        <td><a href='includes/deleteEventModal.php?de_id={$id}' data-toggle='modal' data-target='#myModal'>Delete</a></td>
                        <td><a href='events.php?source=edit_event&edit={$id}'>Edit</a></td>";


                        if($isLaunch){
                             echo
                        "<td><a href='events.php?unlaunch=true&g_id={$id}'>Unlaunch</a></td>
                    </tr> ";
                        }else if(!$isLaunch){
                            echo
                        "<td><a href='events.php?launch=true&g_id={$id}'>Launch</a></td>
                    </tr> ";
                        }


            }

         ?>
        </tbody>
</table>