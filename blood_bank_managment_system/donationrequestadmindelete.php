<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

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