<!DOCTYPE html>
<html lang="en">
<head>
    <title>Car Workshop</title>
    <link rel="shortcut icon" href="./img/car-repair.png" type="image/x-png">
    <link rel="stylesheet" href="./css/adminLogin.css">
</head>
<body>
    <div id="div1">
    <p id="topText">Admin Login</p>
    <form action="./adminlogin.php" id="form" method="POST">
        <label for="text">Username </label>
        <input type="text" name="name" id="username"><br>
        <br>
        <label for="text">Password </label>
        <input type="password" name="password" id="pass"><br>
        <br>
        <input type="submit" value="Log in" id="adminLogIn">
        <br>

        

    </form>

    <?php if (isset($_GET['error'])){ ?>
            <p class="error">
             <?php echo $_GET['error']; ?>
            </p>
    <?php } ?>
    </div>

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
        session_start();
            if (isset($_POST['name']) && isset($_POST['password'])){
                function validate($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }

                $uname = validate($_POST['name']);
                $pass = validate($_POST['password']);

                if (empty($uname)) {
                    header("Location: adminlogin.php?error=User ID is required");
                    exit();
                } else if (empty($pass)) {
                    header("Location: adminlogin.php?error=Password is required");
                    exit();
                } else {
                    $sql = 'select username, password from login where username = ' . '"' . $_POST["name"] . '"';

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) === 1) {
                        $row = mysqli_fetch_assoc($result);
                        if ($row['username'] === $uname && $row['password'] === $pass) {
                            echo "Logged in!";
                            $_SESSION['user_name'] = $row['username'];
                            header("Location: admin.php");
                            exit();
                        } else {
                            header("Location: adminlogin.php?error=Incorect User name or password");
                            exit();
                        }
                    } else {
                        header("Location: adminlogin.php?error=Incorect User name");
                        exit();
                    }
                }
            }
    ?>
    <p>username: admin1</p>
    <p>password: 12345</p>

</body>
</html>