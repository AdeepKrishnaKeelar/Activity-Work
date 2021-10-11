<?php
//get data from form  
$name = $_POST['Name'];
$email= $_POST['Email-Address'];
$message= $_POST['Message'];
$to = "eippeekeelar@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:../html files/home-index.html");
?>