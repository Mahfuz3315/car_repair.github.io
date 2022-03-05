<!DOCTYPE html>
<html lang="en">
<head>
  <title>Car Workshop</title>
  <link rel="shortcut icon" href="./img/car-repair.png" type="image/x-png">
  <link rel="stylesheet" href="./css/confirm.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@200&display=swap" rel="stylesheet">
</head>
<body>

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

    $name = $_POST["name"];
    $address = $_POST["add"];
    $phone = $_POST["num"];
    $license = $_POST["lic"];
    $car_engine = $_POST["eng"];
    $date = $_POST["app"];
    $mechanic = $_POST["mech"];

    $sql = "insert into appointment (name, adress, phone, car_license, car_engine, date, mechanic) values ('$name', '$address', '$phone', '$license', '$car_engine', '$date', '$mechanic');";
    $conn->query($sql);
    $conn->close();
  ?>

  <div id="message">
    <p id="alert">The appointment has been set. We will send you the details by text.
      Thank You for choosing our service.
    </p><br>
    <a href="./index.php">Home</a>
  </div>

</body>
</html>