<?php
session_start();
include 'connect.php';
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

    <link rel="stylesheet" href="userDashboardStyle.php">
    <title>Document</title>
</head>
<body>

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

    <div class="container">
        
     
            <div class="user">
                <!-- User Logo -->
                <i class="fa-solid fa-user userIcon"></i>
                <div class="userInfo">
                    <h1>Name of user: <?php echo $_SESSION['name']?></h1>
                    <h3>Date of birth: <?php echo $_SESSION['dateOfBirth']?></h3>
                    <h3>Blood type: <?php echo $_SESSION['bloodType']?></h3>
                    <h3>Address: <?php echo $_SESSION['address']?></h3>
                    <h3>Mobile: <?php echo $_SESSION['mobile']?></h3>
                    <h3>Last donation date: <?php
                    $email = $_SESSION['email'];
        $sql="Select * from `usertable` where email='$email'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
echo $row['lastDonationDate'];
 ?></h3>
                    

                </div>
                
            </div>
            
            
       
        

    </div>


    <div class="navigate__buttons d-flex">

      <a href="./donationPage.php" class="my__button"><button type="button" class="btn btn-success my__button">Donate Now :)</button></a>
        
      <a href="./logout.php" class="my__button"><button type="button" class="btn btn-danger my__button">Logout</button></a> 

     </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>
</html>