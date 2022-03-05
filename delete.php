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

     if(isset($_GET['deleteid'])){
         $id=$_GET['deleteid'];

         $sql = "DELETE FROM appointment WHERE id=$id";
         $result=mysqli_query($conn, $sql);
         if($result){
             header('location: admin.php');
         }
     }
?>