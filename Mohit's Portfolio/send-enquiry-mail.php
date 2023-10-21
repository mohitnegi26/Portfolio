<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
 

/** 
* This example shows sending a message using PHP's mail() function.
*/



$messHTML = '<p><strong>Name: </strong>'.$name.'</p>';
$messHTML .= '<p><strong>Email: </strong>'.$email.'</p>';
$messHTML .= '<p><strong>Subject: </strong>'.$subject.'</p>';
$messHTML .= '<p><strong>Message: </strong>'.$message.'</p>';
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
mail("prabhat@dhanrashi.in,mohitnegi26dec2002@gmail.com","Mohit Portfolio",$messHTML,$headers);
echo "mail sent";

}


?>