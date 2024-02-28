<?php
include 'connect.php';

$id=$_GET['updateid'];
$sql="Select * from `bloodreqtable` where id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$username=$row['username'];
$email=$row['email'];	
$mobile=$row['mobile'];	
$patientname=$row['patientname'];	
$bloodtype=$row['bloodtype'];	
$patientcondition=$row['patientcondition'];	
$quantity=$row['quantity'];	
$needdate=$row['needdate'];


if(isset($_POST['submit'])){
    $username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$patientname=$_POST['patientname'];	
$bloodtype=$_POST['bloodtype'];	
$patientcondition=$_POST['patientcondition'];	
$quantity=$_POST['quantity'];	
$needdate=$_POST['needdate'];

$sql="update `bloodreqtable` set id=$id,username='$username',email='$email',mobile='$mobile',patientname='$patientname',bloodtype='$bloodtype',patientcondition='$patientcondition',quantity='$quantity',needdate='$needdate' where id=$id";
$result=mysqli_query($con,$sql);
if($result){
    header('location:bloodrequestsadmin.php');
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
    <link rel="stylesheet" href="donationrequestadminupdatestyle.php">

    <title>Document</title>
</head>

<body>


    <div class="adminButtons d-flex justify-content-around">
        <a href="admin.php" class="btn btn-danger my_button">Admin Panel</a>
        <a href="index.php" class="btn btn-danger my_button">Admin Logout</a>
    </div>



    <form method="post">
        <h3>Donate Blood</h3>


        <label for="username">Username:</label>
        <input type="text" name="username" value=<?php echo $username; ?>>

        <label for="email">Email:</label>
        <input type="email" name="email" value=<?php echo $email; ?>>

        <label for="mobile">Mobile:</label>
        <input type="text"  name="mobile" value=<?php echo $mobile; ?>>

        <label for="patientname">Patient Name:</label>
        <input type="text" name="patientname" value=<?php echo $patientname; ?>>

        <label for="bloodtype">Blood Type:</label>
        <select id="cars" name="bloodtype">
           <option value="AB+" <?php if($bloodtype=="AB+"){echo "selected";} ?>>AB+</option>
           <option value="AB-" <?php if($bloodtype=="AB-"){echo "selected";} ?>>AB-</option>
           <option value="A+" <?php if($bloodtype=="A+"){echo "selected";} ?>>A+</option>
           <option value="A-" <?php if($bloodtype=="A-"){echo "selected";} ?>>A-</option>
           <option value="B+" <?php if($bloodtype=="B+"){echo "selected";} ?>>B+</option>
           <option value="B-" <?php if($bloodtype=="B-"){echo "selected";} ?>>B-</option>
           <option value="O+" <?php if($bloodtype=="O+"){echo "selected";} ?>>O+</option>
           <option value="O-" <?php if($bloodtype=="O-"){echo "selected";} ?>>O-</option>
        </select>

        <label for="patientcondition">Patient Condition:</label>
        <input type="text" name="patientcondition" value=<?php echo $patientcondition; ?>>

        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" value=<?php echo $quantity; ?>>
        
        <label for="needdate">Need Date:</label>
        <input type="date" name="needdate" value=<?php echo $needdate; ?>>


        <button type="submit" name="submit">Submit</button>


    </form>




    <!-- Bootstrat js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>

</html>