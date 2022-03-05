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

    <h1 id="topText">Appoinment Form</h1>
    <form action="./confirm.php" id="form" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="fname"><br>
        <label for="adress">Adress</label>
        <input type="text" name="add" id="adress"><br>
        <label for="phone">Phone Number</label>
        <input type="text" name="num" id="number"><br>
        <label for="text">Car License Number</label>
        <input type="text" name="lic" id="license"><br>
        <label for="engine">Car Engine Number</label>
        <input type="text" name="eng" id="engine"><br>
        <label for="date">Appointment Date</label>
        <input type="date" name="app" id="date"><br>
        <label for="text">Select Mechanic</label>
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
        <input id="submit" type="submit">
    </form>
</body>
</html>