<!DOCTYPE html>
<html lang="en">
<head>
    <title>Car Workshop</title>
    <link rel="shortcut icon" href="./img/car-repair.png" type="image/x-png">
    <link rel="stylesheet" href="./css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <h1 id="topText">Admin Panel</h1>

    <div id="table">
        <table>

            <tr>
                <th>ID</th>
                <th>Client Name</th>
                <th>Phone</th>
                <th>Car Reg. No</th>
                <th>Date</th>
                <th>Mechanic Name</th>
                <th>Actions</th>
            </tr>

            <?php
                $servername = "sql210.epizy.com";
                $username = "epiz_31216966";
                $password = "2nsrim6SeJ";
                $dbname = "epiz_31216966_car_workshop";
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                 $sql = "SELECT * FROM appointment";
                 $result = mysqli_query($conn, $sql);
                 if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id = $row['id'];
                        $name =$row['name'];
                        $phone=$row['phone'];
                        $license=$row['car_license'];
                        $date=$row['date'];
                        $mechanic=$row['mechanic'];
                        echo '<tr><td>'.$id.'</td>
                        <td>'.$name.'</td>
                        <td>'.$phone.'</td>
                        <td>'.$license.'</td>
                        <td>'.$date.'</td>
                        <td>'.$mechanic.'</td>
                        <td>
                            <button class="btn btn-primary"><a href="update.php?updateid='.$id.'"  class="text-light">Update</a></button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'"  class="text-light">Delete</a></button>
                         </td>
                        </tr>';
                    }
                 }
            ?>
            
            

        </table>
    </div>

</body>
</html>