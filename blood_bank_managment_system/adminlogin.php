<?php
$login=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $email=$_POST['email'];
    $password=$_POST['password'];

    
    if($email=="admin@gmail.com" && $password=="1234"){
        header('location:admin.php');
    }
    


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Login</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <script src="https://kit.fontawesome.com/9570d70b41.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="adminloginstyle.php">
    <!--Stylesheet-->
   
</head>
<body>

<?php
    if($login){
        echo '<div class="alert alert-success" role="alert">
  You are successfully logged in
</div>';
    }
    ?>
    <?php
    if($invalid){
        echo '<div class="alert alert-danger" role="alert">
  Invalid data
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
        <h3>Admin Login Here</h3>

        <label for="email">email</label>
        <input type="email" placeholder="Email or Phone" name="email">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" name="password">

        <button type="submit" name="submit">Log In</button>

   
    </form>



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
