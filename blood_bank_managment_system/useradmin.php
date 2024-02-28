<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="useradminstyle.css">
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
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Mobile</th>
            <th scope="col">Password</th>
            <th scope="col">Blood type</th>
            <th scope="col">Gender</th>
            <th scope="col">Date of birth</th>
            <th scope="col">Address</th>
            <th scope="col">Last Donation</th>
            <th scope="col">Disease</th>
            <th scope="col">Medication</th>
            <th scope="col">Operation</th>
        </tr>
    </thead>
    <tbody>
        <tr>

        <?php
        $sql="Select * from `usertable`";
        $result=mysqli_query($con,$sql);
        if($result){
            while($row=mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name = $row['name'];
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

                echo '
                <tr>
                <th scope="row">'.$id.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$mobile.'</td>
            <td>'.$password.'</td>
            <td>'.$bloodType.'</td>
            <td>'.$gender.'</td>
            <td>'.$dateOfBirth.'</td>
            <td>'.$address.'</td>
            <td>'.$lastDonationDate.'</td>
            <td>'.$disease.'</td>
            <td>'.$medication.'</td>

            <td>
            <button class="btn btn-primary"><a class="text-light" href="useradminupdate.php?updateid='.$id.'">Update</a></button>
            <button class="btn btn-danger"><a href="useradmindelete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
            </td>
            </tr>
                ';
            }
        }
        ?>

            


        </tr>
    </tbody>
</table>



    <!-- Bootstrat js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>