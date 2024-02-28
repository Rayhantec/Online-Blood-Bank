<?php
include 'connect.php';
$todaydate=date('Y-m-d');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="bloodrequestadminstyles.css">
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
                <th scope="col">Patient name</th>
                <th scope="col">Blood type</th>
                <th scope="col">Condition</th>
                <th scope="col">Quantity</th>
                <th scope="col">Need date</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql="Select * from `bloodreqtable`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];	
                    $username=$row['username'];	
                    $email=$row['email'];	
                    $mobile=$row['mobile'];	
                    $patientname=$row['patientname'];	
                    $bloodtype=$row['bloodtype'];	

                if($bloodtype=="AB+"){
                $convertedtype="AB_pos";
                }else if($bloodtype=="AB-"){
                $convertedtype="AB_neg";
                }
                else if($bloodtype=="A+"){
                $convertedtype="A_pos";
                }
                else if($bloodtype=="A-"){
                $convertedtype="A_neg";
                }
                else if($bloodtype=="B+"){
                $convertedtype="B_pos";
                }
                else if($bloodtype=="B-"){
                $convertedtype="B_neg";
                }
                else if($bloodtype=="O+"){
                $convertedtype="O_pos";
                }

                    $patientcondition=$row['patientcondition'];	
                    $quantity=$row['quantity'];	
                    $needdate=$row['needdate'];	
                   
                    if($needdate>=$todaydate){
                    echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$username.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>'.$patientname.'</td>
                <td>'.$bloodtype.'</td>
                <td>'.$patientcondition.'</td>
                <td>'.$quantity.'</td>
                <td>'.$needdate.'</td>
                <td>
                    <button class="btn btn-primary"><a class="text-light"
                            href="bloodrequestadminupdate.php?updateid='.$id.'">Update</a></button>
                    <button class="btn btn-danger"><a href="bloodrequestadmindelete.php?deleteid='.$id.'"
                            class="text-light">Delete</a></button>
                    <button type="submit" class="btn btn-primary" name="submit"><a class="text-light" href="bloodrequestadminapproval.php?id='.$id.'&bloodtype='.$convertedtype.'&quantity='.$quantity.'">Approve</a></button>

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