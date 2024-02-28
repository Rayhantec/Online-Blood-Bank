<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <script src="https://kit.fontawesome.com/9570d70b41.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.php">
    <title>Document</title>
</head>
<body>

    <!-- This the navbar -->
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Blood Bank Managment System</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
  

      <!-- This is the header image -->
     <div class="header__image-container">
         <h1 class="centered responsive__image">Blood Bank Managment System</h1>
         <img class="header__image" src="./assets/carausel_img-1.jpg" alt="">
     </div>
     <!-- end of the header image -->

     <!-- blood cell compatibility table -->
     <div class="compatibility">
         <h2 class="compatibility__text">Red blood cell compatibility table</h2>
         <img class="compatibility__table" src="./assets/compatibility_table.jpg" alt="compatibility table">
     </div>

     <div class="">
         <h2 class="compatibility__text">Why blood Donation?</h2>
         <!-- Bootstrap info cards -->
         <div class="card mb-3 my__card" style="max-width: 1500px; height: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./assets/img-1.jpg" class="img-fluid rounded-start card__image" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Why is blood important?</h5>
                  <p class="card-text">Blood brings oxygen and nutrients to all the parts of the body so they can keep working. Blood carries carbon dioxide and other waste materials to the lungs, kidneys, and digestive system to be removed from the body. Blood also fights infections and carries hormones around the body.</p>
                  
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-3 my__card" style="max-width: 1500px; height: 500px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="./assets/img-2.jpg" class="img-fluid rounded-start card__image" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Why Cancer Patients Need Blood</h5>
                  <p class="card-text">For cancer patients, blood transfusions can act as a resource to implement platelets back into the body after heavy treatments such as chemo or radiation therapy. For cancer patients, blood cells that are made in the bone marrow are often at risk. This lack of blood cell production can cause chronic diseases over time which may affect organs such as the kidneys, spleen and liver.</p>
                  
                </div>
              </div>
            </div>
          </div>
     </div>



     <div class="navigate__buttons d-flex">

      <a href="./donationPage.php" class="my__button"><button type="button" class="btn btn-danger my__button">Donate Now :)</button></a>
        
        <a href="./bloodReq.php" class="my__button"><button type="button" class="btn btn-success my__button">Request Blood</button></a>
        
        <a href="" class="my__button"><button type="button" class="btn btn-warning my__button">About Us</button></a>

     </div>


     <!-- Footer -->
     <footer>
       
        <h2>Blood Bank Managment System</h2>
        <p>This project is done by Labib Hasan Rayhan</p>

        <p><p>©Labib Hasan Rayhan</p></p>
    </footer>
    










    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>