<?php

$user=0;
$success=0;

include 'connect.php';
if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
                   $bloodType = $_POST['bloodType'];
  $dateOfBirth = $_POST['dateOfBirth'];
  $gender = $_POST['gender'];
  $address = $_POST['address'];
  $lastDonationDate = $_POST['lastDonationDate'];
  $disease = $_POST['disease'];
  $medication = $_POST['medication'];

$sql = "Select * from `usertable` where email='$email'";
$result = mysqli_query($con,$sql);
if($result){
  $num=mysqli_num_rows($result);
  if($num>0){
    $user=1;
  }else{
    $sql = "insert into `usertable` (name,email,mobile,password,bloodType,dateOfBirth,gender,address,lastDonationDate,disease,medication)
values('$name','$email','$mobile','$password','$bloodType','$dateOfBirth','$gender','$address','$lastDonationDate','$disease','$medication')";
$result = mysqli_query($con,$sql);


if($result){
  $success=1;
  session_start();
  $_SESSION['name']=$name;
  $_SESSION['email']=$email;
  $_SESSION['mobile']=$mobile;
  $_SESSION['bloodType']=$bloodType;
  $_SESSION['dateOfBirth']=$dateOfBirth;
  $_SESSION['gender']=$gender;
  $_SESSION['address']=$address;
  $_SESSION['lastDonationDate']=$lastDonationDate;
  $_SESSION['disease']=$disease;
  $_SESSION['medication']=$medication;

  header('location:index.php');
}
else{
  die(mysqli_error($con));
}
  }
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Register</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <script src="https://kit.fontawesome.com/9570d70b41.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="registerStyle.php">
    
    <!--Stylesheet-->
   
</head>
<body>

<?php
if($user){
        echo '<div class="alert alert-danger" role="alert">
  User alredy exist
</div>';
    }
?>

<?php
if($success){
        echo '<div class="alert alert-success" role="alert">
  You are successfully signed in
</div>';
    }
    ?>

 <!-- This the navbar -->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Blood Bank Managment System</a>
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

 
</nav>


    <form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
</div>
  
<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
</div>
<div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off">
</div>
<div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
</div>
<div class="mb-3">
    <label class="form-label">Blood Type</label>
    <select id="cars" name="bloodType">
           <option value="AB+">AB+</option>
           <option value="AB-">AB-</option>
           <option value="A+">A+</option>
           <option value="A-">A-</option>
           <option value="B+">B+</option>
           <option value="B-">B-</option>
           <option value="O+">O+</option>
           <option value="O-">O-</option>
        </select>
</div>
<div class="mb-3">
    <label class="form-label">Date of birth</label>
    <input type="date" class="form-control" placeholder="Enter your Date of Birth" name="dateOfBirth" autocomplete="off">
</div>
<div class="mb-3">
    <label class="form-label">Gender</label>
    <input type="text" class="form-control" placeholder="Enter your Gender" name="gender" autocomplete="off">
</div>
<div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" class="form-control" placeholder="Enter your Address" name="address" autocomplete="off">
</div>
<div class="mb-3">
    <label class="form-label">Last donation date</label>
    <input type="date" class="form-control" placeholder="Enter your last date of blood donation" name="lastDonationDate" autocomplete="off">
</div>
<div class="mb-3">
    <label class="form-label">Disease</label>
    <input type="text" class="form-control" placeholder="Do you have any terminal disease" name="disease" autocomplete="off">
</div>
<div class="mb-3">
    <label class="form-label">Medication</label>
    <input type="text" class="form-control" placeholder="Do you have any current medication. If yes then what?" name="medication" autocomplete="off">
</div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
