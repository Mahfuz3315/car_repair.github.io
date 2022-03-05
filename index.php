<!DOCTYPE html>
<html lang="en">
<head>
    <title>Car Workshop</title>
    <link rel="shortcut icon" href="./img/car-repair.png" type="image/x-png">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@200&display=swap" rel="stylesheet">
</head>
<body>
    <h1 id="pageName">Car Repair</h1>
    <img id="line3" src="./img/line.png" alt="line">
    
    <div id="div1" class="divs">
        <img class="intro" id="repairPic" src="./img/20618.jpg" alt="Car Repair">
        <p class="intro" id="welcomeNote">Welcome to our car repair service. Fill up the application and choose the mechanic
            you want to get the appointment. We will provide service as soon as possible. 
        </p>
    </div>
    <img id="line" src="./img/line.png" alt="line">
    <div id="div2">
        <div id="div3">
            <p id="applyNote" class="apply">Fill up the form and get your appointment here</p>
            <a href="./Appointment.php"><button button class="apply" id="application">Get Appointment</button></a>
        </div>
        <img id="repairPic2" src="./img/490_REpWIE1BUiAwNTctMTM.jpg" alt="gggg">
    </div>
    <img id="line2" src="./img/line.png" alt="line">

    <img id="botPic" src="./img/Untitled-1.png" alt="ASDEDF">

</body>
<footer>
    <br>
    <h2><a href="./adminlogin.php" id="adminlogin">Admin Login</a></h2>
    <br>
    <p>Webpage created by Mahfuz</p>
    <p>All rights reserved | 2022</p>
</footer>
<script>
    document.getElementById("application").onclick = "./Appointment.html"
</script>
</html>