<?php
require('./instamojo.php');
include('./dbcon/conn.php');
const API_KEY ="c7c8d5b0ec38374c1b1adaf33b4e3446";
const AUTH_TOKEN = "992402246d5e01758eaed29169acb005";


    $api = new Instamojo\Instamojo(API_KEY, AUTH_TOKEN,'https://www.instamojo.com/api/1.1/');
    
    try {
        $response = $api->paymentRequestCreate(array(
             "purpose" => 'HSICON 2021 Registration',
            "buyer_name" => $_POST['name'],
            "amount" => $_POST['payment'],
            "send_email" => true,
            "email" => $_POST['email'],
            "redirect_url" => "http://localhost/instamojopayment/success.html"
            ));
        header('Location:'. $response['longurl']);
        if(isset($_POST['submit'])&& isset($_POST['payment']))
    {
     echo $name=$_POST['name'];
      $_SESSION['name']=$name;
      echo $email=$_POST['email'];
      $_SESSION['email']=$email;
      echo $package=$_POST['package'];
      $_SESSION['pack']=$package;
      echo $subpackage=$_POST['subpack'];
      $_SESSION['subpack']=$subpackage;
      echo $mobile=$_SESSION['contact'];
      echo $alt_mo=$_SESSION['alt_mo'];
      echo $m_r_s=$_SESSION['m_r_s'];
      echo $institude=$_SESSION['institude'];
      echo $designation=$_POST['designation'];
      echo $speciality=$_SESSION['speciality'];
      echo $dgender=$_SESSION['dgender'];
      echo $state= $_SESSION['state'];
      echo $pincode=$_SESSION['pincode'];
      echo $country=$_SESSION['country'];
      echo $city=$_SESSION['city'];
      echo $a_person=$_SESSION['acomy_person'];
      echo $a_person_age=$_SESSION['acomy_person_age'];
      $query="INSERT INTO `registration1`( `pack`, `subpack`, `Name`, `email`, `mobile`, `alt_mob`, `m_r_s_No`, `institude`, `designation`, `speciality`, `gender`, `state`, `pincode`, `country`, `city`,`Acompany_name`, `Acompany_age`) VALUES ('$package','$subpackage','$name','$email','$mobile','$alt_mo','$m_r_s','$institude','$designation','$speciality','$dgender','$state','$pincode','$country','$city','$a_person','$a_person_age')";
      $data = mysqli_query($conn,$query);
      if($data)
      {
        echo "ok";
      }else
      {
        echo "not ok";
      }

  }
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
?>