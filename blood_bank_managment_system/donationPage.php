<?php
$num=0;
session_start();
include 'connect.php';
if(!isset($_SESSION['email'])){
          echo '<div class="alert alert-danger" role="alert">
 You have to log in before donating blood.
</div>';
        }
else{
        
        if(isset($_POST['submit'])){
$userName = $_SESSION['name'];
  $email = $_SESSION['email'];
  $mobile = $_SESSION['mobile'];
  $bloodtype = $_SESSION['bloodType'];
  $illness=$_POST['illness'];
  $medication=$_POST['medication'];
  $donationdate=$_POST['donationdate'];

  $sql="Select * from `donationtable` where email='$email'";
  $result=mysqli_query($con,$sql);
  if($result){
    $num=mysqli_num_rows($result);
  }

  //Calculating last donation time to see if the user is eligible to donate blood
  $sql = "Select * from `usertable` where email='$email'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);


$lastdonationdate = strtotime($row['lastDonationDate']);
$nextdonationdate = strtotime($donationdate);

// Formulate the Difference between two dates
$diff = abs($nextdonationdate - $lastdonationdate);

// To get the year divide the resultant date into
// total seconds in a year (365*60*60*24)
$years = floor($diff / (365*60*60*24));

// To get the month, subtract it with years and
// divide the resultant date into
// total seconds in a month (30*60*60*24)
$months = floor(($diff - $years * 365*60*60*24)
								/ (30*60*60*24));

// To get the day, subtract it with years and
// months and divide the resultant date into
// total seconds in a days (60*60*24)
$days = floor(($diff - $years * 365*60*60*24 -
			$months*30*60*60*24)/ (60*60*24));

            if($months>=4 || $years>1){
  if($num<=10){
    $sql = "insert into `donationtable` (username,email,mobile,bloodtype,illness,medication,donationdate)
values('$userName','$email','$mobile','$bloodtype','$illness','$medication','$donationdate')";

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
  else{
    echo '<div class="alert alert-danger" role="alert">
  You will be eligible to donate after 4 months of your previous donation.</div>';
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
    <link rel="stylesheet" href="donationPageStyle.php">

    <title>Document</title>
</head>

<body>


    <!-- This the navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Blood Bank Managment System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
        <h3>Donate Blood</h3>


        <label for="illness">If you have any kind of illness:</label>
        <input type="text" placeholder="Current illness" name="illness">

        <label for="medication">Current medication if any:</label>
        <input type="text" placeholder="Current medication" name="medication">

        <label for="date">Date of Donation</label>
        <input type="date" placeholder="Blood group" name="donationdate">


        <button type="submit" name="submit">Submit Request</button>


    </form>




    <!-- Bootstrat js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>

</html>