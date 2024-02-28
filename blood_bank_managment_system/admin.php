<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="adminstyle.php">
    <title>Admin page</title>
</head>
<body>

    <div class="adminButtons d-flex justify-content-end">
        
        <a href="index.php" class="btn btn-danger my_button2">Logout</a>
    </div>

    <div class="container text-center align-self-center my_container">
        <div class="row">
            <div class="col">
                <a href="bloodrequestsadmin.php" class="btn btn-outline-dark my_button">Blood requests</a>
            </div>
            <div class="col">
                <a href="donationrequestadmin.php" class="btn btn-outline-dark my_button">Donation Requests</a>
            </div>
            <div class="col">
                <a href="useradmin.php" class="btn btn-outline-dark my_button">Users</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <a href="bloodinventoryadmin.php" class="btn btn-outline-dark my_button">Blood Inventory</a>
            </div>
            
        </div>
    </div>













    <!-- Bootstrat js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>