<?php
session_start();
if(!isset($_SESSION['email'])){
          echo '<div class="alert alert-danger" role="alert">
  Please log in before requesting for blood.
</div>';
        }

include 'connect.php';
if(isset($_POST['submit'])){
  $userName = $_SESSION['name'];
  $email = $_SESSION['email'];
  $mobile = $_SESSION['mobile'];

  $patientName = $_POST['patientName'];
  $bloodType = $_POST['bloodType'];
  $patientcondition = $_POST['patientcondition'];
  $quantity = 1;
  $needdate = $_POST['needdate'];

  if(!isset($_SESSION['email'])){
          echo '<div class="alert alert-danger" role="alert">
  Please log in before requesting for blood.
</div>';
  }
  else{
    $sql= "Select * from `bloodreqtable` where email='$email'";
    $result=mysqli_query($con,$sql);
    if($result){
  $num=mysqli_num_rows($result);
}
  if($num<10){  
  $sql = "insert into `bloodreqtable` (username,email,mobile,patientname,bloodtype,patientcondition,quantity,needdate)values('$userName','$email','$mobile','$patientName','$bloodType','$patientcondition','$quantity','$needdate')";
$result = mysqli_query($con,$sql);
if(!$result){
    die(mysqli_error($con));
}else{
  header('location:index.php');
}
  }
  else{
    echo '<div class="alert alert-danger" role="alert">
  You have already made too many requests!.</div>';
  }
}
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://kit.fontawesome.com/9570d70b41.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="bloodReqStyle.php">

    <title>Document</title>
</head>
<body>


    <!-- This the navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">Blood Bank Managment System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./bloodReq.php">Request For Blood</a>
                    </li>
    
                </ul>
    
            </div>
        </div>
    
        <div class="login" <?php if(isset($_SESSION['email'])){
          echo 'style="display:none;"';
        }
        
        ?>>
          <a href="./login.php"><button type="button" class="btn btn-outline-success">Login</button></a>
          <a href="./register.php"><button type="button" class="btn btn-outline-primary">Register</button></a>
        </div>
<a href="./userDashboard.php" <?php
if(!isset($_SESSION['email'])){
          echo 'style="display:none;"';
        }
?>><i class="fa-solid fa-user"></i></a>
    </nav>
    <!-- End of navbar -->

    

    <form method="post">
        <h3>Request For Blood</h3>

        <label for="group">Patient name:</label>
        <input type="text" placeholder="Name of patient" name="patientName">

        <label for="group">Blood Group:</label>
        <select id="cars" name="bloodType" value=<?php echo $bloodType; ?>>
           <option value="AB+">AB+</option>
           <option value="AB-">AB-</option>
           <option value="A+">A+</option>
           <option value="A-">A-</option>
           <option value="B+">B+</option>
           <option value="B-">B-</option>
           <option value="O+">O+</option>
           <option value="O-">O-</option>
        </select>

        <label for="status">Patient disease and current condition:</label>
        <input type="text" placeholder="Patient condition" name="patientcondition">
        
        
        <label for="date">When is the blood needed?</label>
        <input type="date" placeholder="Blood group" name="needdate">

    
        <button type="submit" name="submit">Submit Request</button>
    
    
    </form>
    



    <!-- Bootstrat js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>
</html>