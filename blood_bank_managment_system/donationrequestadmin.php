<?php
include 'connect.php';

$todaydate=date('Y-m-d');

if(isset($_POST['submit'])){
    $id=$_POST['approvalid'];
    $fridge=$_POST['fridge'];

    

    $sql="Select * from `donationtable` where id='$id'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$username=$row['username'];
$email=$row['email'];
$mobile=$row['mobile'];
$bloodtype=$row['bloodtype'];
$illness=$row['illness'];
$medication=$row['medication'];
$donationdate=$row['donationdate'];

// Sending confirmation mail to the people who donated blood

$to_email = $email;
$subject = "Donation confirmation";
$body = "We have successfully confirmed your blood donation. Thank you for donationg blood to our bank and for helping other people fight with their illnesses";
$headers = "From: labib123456654321@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

$sql = "update `usertable` set lastDonationDate='$donationdate' where email='$email'";
$result=mysqli_query($con,$sql);


$sql = "insert into `bank` (username,email,mobile,bloodtype,illness,medication,fridgenumber)
values('$username','$email','$mobile','$bloodtype','$illness','$medication','$fridge')";
$result=mysqli_query($con,$sql);

$sql="delete from `donationtable` where id=$id";
    $result=mysqli_query($con, $sql);
    if($result){
        header ('location:donationrequestadmin.php');
    }
    else{
        die(mysqli_error($con));
    }
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="donationrequestadminstyle.css">
    <title>Document</title>
</head>

<body>

    <div class="adminButtons d-flex justify-content-around">
        <a href="admin.php" class="btn btn-danger my_button">Admin Panel</a>
        <a href="index.php" class="btn btn-danger my_button">Admin Logout</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Blood type</th>
                <th scope="col">Illness</th>
                <th scope="col">Medication</th>
                <th scope="col">Donation date</th>
                <th scope="col">Operations</th>
                <th scope="col">Fridge No.</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql="Select * from `donationtable`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $username=$row['username'];
                    $email=$row['email'];
                    $mobile=$row['mobile'];
                    $bloodtype=$row['bloodtype'];
                    $illness=$row['illness'];
                    $medication=$row['medication'];
                    $donationdate=$row['donationdate'];

                    if($donationdate>=$todaydate){
                    echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$username.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>'.$bloodtype.'</td>
                <td>'.$illness.'</td>
                <td>'.$medication.'</td>
                <td>'.$donationdate.'</td>
                

                <td>
                    <button class="btn btn-primary"><a class="text-light"
                            href="donationrequestadminupdate.php?updateid='.$id.'">Update</a></button>
                    <button class="btn btn-danger"><a href="donationrequestadmindelete.php?deleteid='.$id.'"
                            class="text-light">Delete</a></button>
                </td>

                <td>
                    <form method="post">

                        <input type="text" placeholder="Fridge No." name="approvalid" value='.$id.' style="display: none;">
                
                        <input type="text" placeholder="Fridge No." name="fridge">
                    
                    
                        <button type="submit" class="btn btn-primary" name="submit" >Confirm Donation</button>
                    
                    
                    </form>
                </td>


            </tr>';
            }
                }
            }
            ?>

            
        </tbody>
    </table>



    <!-- Bootstrat js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>