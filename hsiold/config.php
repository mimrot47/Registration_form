<?php

// require('../connect.php');
// error_reporting(0);
// $queryad=mysqli_query($connect,'SELECT * FROM admin_login ');
// if(mysqli_num_rows($queryad)>>0){
// $rowad=mysqli_fetch_array($queryad);

// $keyId = $rowad['admin_rz_pay'];
// $keySecret = $rowad['admin_rz_pay2'];
// }else {

$keyId = 'rzp_live_t0cPvw34Hfa1Ec';
$keySecret = 'DsdzoSzKTLO9aXoiak50Q6Ji';
//}
$displayCurrency = 'INR';


//These should be commented out in production
// This is for error reporting
// Add it to config.php to report any errors
error_reporting(0);
ini_set('display_errors', 0);

?>
<style>

input[type=submit]{

	position: relative;
    border: 0px;
    padding: 10px;
    background: #8BC34A;
    color: white;
    left: 50%;
    transform: translate(-50%, 100px);


}
</style>
