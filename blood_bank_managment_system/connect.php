<?php

$confirmRequestMail=0;
$notconfirmed=1;

$con=new mysqli('localhost', 'root', '', 'bloodbank');

if(!$con){
    die(mysqli_error($con));
}


?>