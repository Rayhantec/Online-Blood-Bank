<?php

include 'connect.php';
$id=$_GET['id'];
$urlbloodtype=$_GET['bloodtype'];
$quantity=$_GET['quantity'];

if($urlbloodtype=="AB_pos"){
$bloodtype="AB+";
}else if($urlbloodtype=="AB_neg"){
$bloodtype="AB-";
}
else if($urlbloodtype=="A_pos"){
$bloodtype="A+";
}
else if($urlbloodtype=="A_neg"){
$bloodtype="A-";
}
else if($urlbloodtype=="B_pos"){
$bloodtype="B+";
}
else if($urlbloodtype=="B_neg"){
$bloodtype="B-";
}
else if($urlbloodtype=="O_pos"){
$bloodtype="O+";
}
else if($urlbloodtype=="O_neg"){
$bloodtype="O-";
}


$sql="Select * from `bank`";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $bankid=$row['id'];
        $bankbloodtype=$row['bloodtype'];
        $email=$row['email'];
        

  
            if($bankbloodtype==$bloodtype){
            $sql2="delete from `bank` where id=$bankid";
            $sql2result=mysqli_query($con,$sql2);
            $sql3="delete from `bloodreqtable` where id=$id";
            $sql3result=mysqli_query($con,$sql3);


            // Sending confirmation mail to the people who donated blood

$to_email = $email;
$subject = "Blood request confirmation";
$body = "We have confirmed your request. Please collect the blood from our bank.";
$headers = "From: labib123456654321@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

            header ('location:bloodrequestsadmin.php');

           }
    
            
        }
        
}
header ('location:bloodrequestsadmin.php');


?>