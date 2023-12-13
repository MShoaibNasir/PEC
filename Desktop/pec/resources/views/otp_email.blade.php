
<?php
$randomNumber = random_int(100000, 999999);
Session::put('otp', $randomNumber);

$dt = new DateTime("now", new \DateTimeZone('Asia/Karachi'));
$minutes_to_add = 15;
$dt->add(new DateInterval('PT' . $minutes_to_add . 'M'));
$expired_at =  $dt->format('Y-m-d H:i:s');

Session::put('expired_at_'.$randomNumber, $expired_at);

?>
<!-- <h3>Hi MR/MRS </h3> -->
<h1>Your OTP Code is <?php  echo $randomNumber ?></h1>
