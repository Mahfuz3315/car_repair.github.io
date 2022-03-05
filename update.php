<!DOCTYPE html>
<html lang="en">
<head>
<title>Car Workshop</title>
    <link rel="shortcut icon" href="./img/car-repair.png" type="image/x-png">
    <link rel="stylesheet" href="./css/Appointment.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <h1 id="topText">Update Panel</h1>

    <form action="" id="form" method="POST">
        <label for="id">User ID: 
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
             if(isset($_GET['updateid'])){
                $id=$_GET['updateid'];
       
                $sql = "SELECT id FROM appointment WHERE id=$id";
                $result=mysqli_query($conn, $sql);
                if($result){
                    echo "$id";
                }
            }
        ?>
        </label><br>
        <label for="name">Name: 
        <?php
             if(isset($_GET['updateid'])){
                $id=$_GET['updateid'];
       
                $sql = "SELECT name FROM appointment WHERE id=$id";
                $result=mysqli_query($conn, $sql);
                $row=mysqli_fetch_assoc($result);
                if($result){
                    echo $row['name'];
                }
            }
        ?>
        </label><br>
        <label for="date">Appointment Date</label>
        <input type="date" name="app" id="date"><br>
        <label for="text">Select Mechanic</label>
        <?php
            $sql = "SELECT mechanic FROM `mechanic_table` WHERE assigned < 4;";
            $result = $conn ->query($sql    );
            echo "<select selected name='mech'>";
            while($row = $result->fetch_assoc()){
                echo "<option value="."'".$row['mechanic']."'".">";
                echo $row['mechanic'];
                echo "</option>";
            }
            echo "</select>";
        ?>
        <br>
        <button type="submit" name="submit" id="update">Update</button>
    </form>

    <?php
        if(isset($_POST['submit'])){
            $id=$_GET['updateid'];
            $date = $_POST['app'];
            $mech=$_POST['mech'];

            $sql = "UPDATE appointment SET date='$date', mechanic='$mech' WHERE id='$id'";
            $result = mysqli_query($conn, $sql);
            if($result){
                header("location: admin.php");
            }
                
        }
    ?>

</body>
</html>