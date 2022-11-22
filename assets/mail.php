<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$phone= $_POST['phone'];

$to = "kirtirajthakor064@mail.com";

$subject = "Mail From portfolio";
$txt ="Name = ". $name . "\r\nEmail = " . $email . "\r\n Message =" . $message . "\r\n phone = " . $phone;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:assets/thankyou.html");
?>