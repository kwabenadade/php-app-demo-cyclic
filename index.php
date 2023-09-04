<?php
// Reads the variable sent via Post from gate way
$sessionId = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text = $_POST["text"];

if ($text == ""){
    $response = "CON What would you want to check \n";
    $response .= "1. My Account No \n";
    $response .= "2. My phone number\n";
} else if ($text == "1" ){
    //logic

    $response = "CON choose account information you want to view \n";
    $response .= "1. Account Number \n";
    $response .= "2. Account Balance";
} else if ($text == "2"){
    //bussiness logic for next level
    $response = "END your phone number is ". $phoneNumber;

}else if ($text == "1*1"){
    //this is a second level response where the user selected 1 in he first instance
    $accountNumber = "ACC1001"

    //this is terminal request. Note how we start with End
    $response = "END your account Number is ".$accountNumber;

}else if ($text = "1*2"){
    // this is a second level response where the user selected 1 in the first instance
    $balance = "GHS 500";
    $response "END your account balance is ".$balance



}
header('content -type; text/plain');
echo $response;






?>