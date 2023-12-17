<?php
session_start();

$OTP=$_SESSION['OTP'];
if(isset($_POST['otp'])){
    $submittedotp=$_POST['otp'];
    if($OTP==$submittedotp){
        echo "OTP VERIFIED";
    }else{
        echo "PLEASE ENTER A VALID OTP";
    }
}

?>

<form method="post" action="submit-otp.php">
<input type="number" name="otp" placeholder=ENTER YOUR OTP">
<button type="submit">VALIDATE</button>
</form>
