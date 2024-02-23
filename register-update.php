<?php
if(!isset($_SESSION))
{
    session_start();
}
if(!isset($_SESSION['email']))
{
  header("location:login.php");
}
else{
  include "config.php";
  $email = $_SESSION['email'];
  $phone = $_POST['phone'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $pin = $_POST['pin'];
  $country = $_POST['country'];
  $c_code = $_POST['c_code'];
  $last_donate = $_POST['last_donate'];
  $medication = $_POST['medication'];
  $disease = $_POST['disease'];
  if( $country !='' and $c_code != '' and $phone != '' and $city != '' and $state != ''and $pin != '' ){

    $sql = "UPDATE `register` SET `phone`='$phone',`city`='$city',`state`='$state',`pin`='$pin',
    `disease`='$disease',`medication`='$medication',`last_donated`='$last_donate',`country`='$country',
    `country_code`='$c_code' WHERE email = '$email'";
    $query = mysqli_query($con, $sql);
    if($query){
      echo '<script>alert("Data Updated Successfully")
     window.location.href = "profile.php";
     </script>';
    }
    else{
      echo "error";
    }
  }
}
