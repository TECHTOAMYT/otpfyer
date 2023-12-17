<?php
session_start();
$phone=$_POST['phone'];
$otp=rand(0000,9999);

&API="6b98b88ec4d0849a71362a59895e3cc";
$PHONE=$phone;
$OTP=$otp;
$REQUEST_URI=https://sms.renflair.in/V1.php?";
$URL="https://sms.renlair.in/V1.php?API=$API&PHONE&OTP=&OTP";
$curl_curl_init($URL);
$curl_setopt($curl,CURLOPT_URL,$URL);
$curl_setopt($curl,CURLOPT_RETURNTRANSFER,true);
$resp=curl_exec($curl);
curl_close($curl);
$data=json_decode($resp);
$status=$data->status;
$massage=$data->message;
if($status=="SUCCESS"){
    header("location:submit-otp.php");
}

?>


