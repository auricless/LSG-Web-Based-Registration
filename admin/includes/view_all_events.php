<table class = "table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>LSG Event Title</th>
            <th>LSG Poster</th>
            <th>Date</th>
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

                echo
                "
                    <tr>
                        <td>{$id}</td>
                        <td>{$title}</td>
                        <td>{$image}</td>
                        <td>{$date}</td>
                        <td><a href='events.php?source=edit_event&edit={$id}'>Edit</a></td>
                        <td><a href='events.php?delete={$id}'>Delete</a></td>
                    </tr>
                ";
            }

         ?>
        </tbody>
</table>