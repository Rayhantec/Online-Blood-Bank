<?php
include 'connect.php';

$id=$_GET['updateid'];
$sql="Select * from `usertable` where id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$mobile = $row['mobile'];
$email = $row['email'];
$bloodType = $row['bloodType'];
$dateOfBirth = $row['dateOfBirth'];
$gender = $row['gender'];
$address = $row['address'];
$lastDonationDate = $row['lastDonationDate'];
$disease = $row['disease'];
$medication = $row['medication'];
$password = $row['password']; 

if(isset($_POST['submit'])){
    $name=$_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$bloodType = $_POST['bloodType'];
$dateOfBirth = $_POST['dateOfBirth'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$lastDonationDate = $_POST['lastDonationDate'];
$disease = $_POST['disease'];
$medication = $_POST['medication'];
$password = $_POST['password']; 

$sql="update `usertable` set id=$id,name='$name',mobile='$mobile',email='$email',bloodtype='$bloodType',dateOfBirth='$dateOfBirth',gender='$gender',address='$address',lastDonationDate='$lastDonationDate',disease='$disease',medication='$medication',password='$password' where id=$id";
$result=mysqli_query($con,$sql);
if($result){
    header('location:useradmin.php');
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


    <div class="adminButtons d-flex justify-content-around">
        <a href="admin.php" class="btn btn-danger my_button">Admin Panel</a>
        <a href="index.php" class="btn btn-danger my_button">Admin Logout</a>
    </div>

    <form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name; ?>>
</div>
  
<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email; ?>>
</div>
<div class="mb-3">
    <label class="form-label">Mobile</label>
    <input type="text" class="form-control" placeholder="Enter your mobile" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
</div>
<div class="mb-3">
    <label class="form-label">Password</label>
    <input type="text" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password; ?>>
</div>
<div class="mb-3">
    <label class="form-label">Blood Type</label>
    <select id="cars" name="bloodType">
           <option value="AB+" <?php if($bloodType=="AB+"){echo "selected";} ?>>AB+</option>
           <option value="AB-" <?php if($bloodType=="AB-"){echo "selected";} ?>>AB-</option>
           <option value="A+" <?php if($bloodType=="A+"){echo "selected";} ?>>A+</option>
           <option value="A-" <?php if($bloodType=="A-"){echo "selected";} ?>>A-</option>
           <option value="B+" <?php if($bloodType=="B+"){echo "selected";} ?>>B+</option>
           <option value="B-" <?php if($bloodType=="B-"){echo "selected";} ?>>B-</option>
           <option value="O+" <?php if($bloodType=="O+"){echo "selected";} ?>>O+</option>
           <option value="O-" <?php if($bloodType=="O-"){echo "selected";} ?>>O-</option>
        </select>
</div>
<div class="mb-3">
    <label class="form-label">Date of birth</label>
    <input type="date" class="form-control" placeholder="Enter your Date of Birth" name="dateOfBirth" autocomplete="off" value=<?php echo $dateOfBirth; ?>>
</div>
<div class="mb-3">
    <label class="form-label">Gender</label>
    <input type="text" class="form-control" placeholder="Enter your Gender" name="gender" autocomplete="off" value=<?php echo $gender; ?>>
</div>
<div class="mb-3">
    <label class="form-label">Address</label>
    <input type="text" class="form-control" placeholder="Enter your Address" name="address" autocomplete="off" value=<?php echo $address; ?>>
</div>
<div class="mb-3">
    <label class="form-label">Last donation date</label>
    <input type="date" class="form-control" placeholder="Enter your last date of blood donation" name="lastDonationDate" autocomplete="off" value=<?php echo $lastDonationDate; ?>>
</div>
<div class="mb-3">
    <label class="form-label">Disease</label>
    <input type="text" class="form-control" placeholder="Do you have any terminal disease" name="disease" autocomplete="off" value=<?php echo $disease; ?>>
</div>
<div class="mb-3">
    <label class="form-label">Medication</label>
    <input type="text" class="form-control" placeholder="Do you have any current medication. If yes then what?" name="medication" autocomplete="off" value=<?php echo $medication; ?>>
</div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
