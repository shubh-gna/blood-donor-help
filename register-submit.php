<?php
include "config.php";
$name = $_POST['name'];
$email = $_POST['email'];
$bday = $_POST['bday'];
$type = $_POST['type'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$c_code = $_POST['c_code'];
if($country == 'India' || $country == 'india'){
    $c_code = '+91';
}
if(isset($_POST['understand']) and isset($_POST['understand1'])){
if($gender != ''and $type !='' and $country !='' and $c_code != '' and $name != '' and $email !='' and $bday != '' and $type != '' and $phone != '' and $city != '' and $state != ''and $pin != '' and $pass != '' and $cpass != '')
{
  if($pass == $cpass){
    $sqlc = "select * from register where email = '$email'";
    $queryc = mysqli_query($con, $sqlc);
    if(mysqli_num_rows($queryc)>0){
      echo '<script>alert("email already registered")
     window.location.href = "register.php";
     </script>';
    }
    else{
    $sql = "INSERT INTO `register`(gender, country, country_code, `name`, `email`, `dob`, `type`, `phone`, `city`, `state`, `pin`, `password`)
     VALUES ('$gender','$country','$c_code','$name','$email','$bday','$type','$phone','$city','$state','$pin','$pass')";
     $query = mysqli_query($con, $sql);
     if($query){
      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
          <?php include "head.php"; ?>
      </head>
      <body class="body">
      <?php include "navbar.php"; ?>
          <!-- Navigator Start -->
          <section id="navigator">
              <div class="container">
                  <div class="path">
                      <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                      <div class="path-directio" style="color: grey; display:inline-block;"> / Thanks</div>
                  </div>
              </div>
          </section>
          <!-- Navigator End -->
          <!-- Who Start -->
          <section id="who">
              <div class="container">
                      <img src="imgs/logo.png" alt="" style="max-width:200px">

                      <p class="text-center" style="    font-size: 2.5rem;">Thank you for registering.
                        <br>
Once a blood donor, always a lifesaver</p>
              </div>
          </section>
          <!-- Who End -->
      <?php include "footer.php"; ?>
      </body>
      </html>
      <?php
     }
     else{
       echo '<script>alert("something goes wrong, Kindly try after sometime or contact admin")
      window.location.href = "register.php";
      </script>';
     }
  }
}
  else{
    echo '<script>alert("confirm password not matched")
   window.location.href = "register.php";
   </script>';
  }
}
else{
  echo '<script>alert("Kindly fill all the required fields")
 window.location.href = "register.php";
 </script>';
}
}
else{
    echo '<script>alert("Kindly fill all the required fields")
 window.location.href = "register.php";
 </script>';
}
 ?>
