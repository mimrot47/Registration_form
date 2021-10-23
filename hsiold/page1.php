<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "hsicon";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
include('dbcon/conn.php');
error_reporting(0);

if (isset($_POST['next1'])) {

    $subpackage = '0';

    $package = $_POST['package'];

    $package == "2" ? $subpackage = '3' : $subpackage = $_POST['subpackage'];
}


$sql2 = "SELECT * FROM occupancy LIMIT 2";
$result2 = $conn->query($sql2);

$hidden = "hidden";
$visible = "visible";



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HSICON - 2021</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://meghannleisha.ru/">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5 ">
            <div class="col-sm-6 col-sm-offset-3 form-box">
                      <div class="form-group">
                      <img src="assets/img/hsilogo1.png" style="height:100px;">
                      <h5>
                    Online Registrations Started for HSICON2021 For more details please call Ms Veena Shaga - 9130090434</h5>
                      </div>
                  </div>
            <?php echo $package; ?>
            =>
            <?php echo $subpackage; ?>
            <div class="col-md-12">
                <form action="page2.php" method="POST">
                    <div class="form-group mt-3" id="sdiv" style="visibility: <?php if ($subpackage == '1') {
                                                                                    echo $visible;
                                                                                } else {
                                                                                    echo $hidden;
                                                                                } ?>;">
                        <h6>Select your Occupancy</h6>
                        <select class="form-control" id="packid" name="occupancy">
                            <option value="">Select Your Package</option>
                            <?php
                            if ($result2->num_rows > 0) {
                                // output data of each row
                                while ($row = $result2->fetch_assoc()) {
                            ?>
                                    <option value="<?php echo $row["id"] ?>"><?php echo $row["name"] ?></option>

                            <?php
                                }
                            }

                            ?>
                        </select>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <!-- <label class="" for="name">Your Name</label> -->
                        <input type="text" name="name" placeholder="Your Name" class="form-control" required title="NAME REQUIRED">
                      <p>which required on certificate</p>
                    </div>
                    <div class="form-group">
                        <!-- <label class="" for="email">Email</label> -->
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" required title="EMAIL REQUIRED">
                        <span id="availability"></span>
                    </div>
                    <div class="form-group">
                        <!-- <label class="" for="mobile">Mobile</label> -->
                        <input type="text" name="mobile" pattern="[5-9]{1}[0-9]{9}" title="10 Digit number required" placeholder="Mobile Number" class="form-control" required title="MOBILE NUMBER REQUIRED">
                    </div>
                    <div class="form-group">
                        <input type="text" name="Alternate" placeholder="Alternate Mobile Number" class="form-control" >
                    </div>
                    <div class="form-group">
                        <input type="text" name="MMC_RES_NO" placeholder="MMC Registration Number
                        " class="form-control" required title="ENTER YOUR INSTITUTE" required="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="institute" placeholder="Institute / Hospital" class="form-control" required title="ENTER YOUR INSTITUTE" re>
                    </div>
                    <div class="form-group">
                          <input type="text" name="designation" placeholder="Designation" class="form-control" required title="ENTER YOUR DESIGNAION">
                    </div>
                    <div class="form-group">
                          <input type="text" name="speciality" placeholder="Speciality" class="form-control" required title="ENTER YOUR DESIGNAION">
                    </div>

                    <div class="form-group">
                      
                        <div class="rs-select2 js-select-simple select--no-search">
                            <select name="dgender" class="form-control" required="">
                                <option disabled="disabled" selected="selected">Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <div class="select-dropdown"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="text" name="city" placeholder="City" class="form-control" required title="ENTER YOUR CITY">
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="state" placeholder="State" class="form-control" required title="ENTER YOUR STATE">
                    </div>
                    <div class="form-group">
                        <input type="text" name="pincode" placeholder="Pincode" class="form-control" required title="ENTER YOUR CITY">
                    </div>
                    <div class="form-group">
                        <input type="text" name="country" placeholder="Country" class="form-control" required title="ENTER YOUR COUNTRY">
                    </div>
                    
                    <div style="display:none; visibility: hidden;">
                        <input type="text" name="pack" id="" value="<?php echo $package; ?>">
                        <input type="text" name="subpack" id="" value="<?php echo $subpackage; ?>">
                    </div>
                    <br>
                    <input type="submit" name="next2" class="btn btn-primary" value="submit">
                </form>



            </div>



        </div>
    </div>

</body>

</html>