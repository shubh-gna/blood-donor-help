<?php
if(!isset($_SESSION))
{
    session_start();
}
if(!isset($_SESSION['email']))
{
 header('location:login.php');
}
else{
  include "config.php";
  $email = $_SESSION['email'];
  $password = $_POST['password'];
  $npassword = $_POST['npassword'];
  $cpassword = $_POST['cpassword'];
   $sql = "select * from  register where email = '$email'";
  $query = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($query);
  if($row['password'] == $password){
      if($npassword == $cpassword){
          $sql = "UPDATE `register` SET `password`='$npassword' WHERE email = '$email'";
          $query = mysqli_query($con, $sql);
          if($query){
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <?php include "head.php"; ?>
    <style media="screen">
    label{
      display: block;
  margin-left: auto;
  margin-right: auto;
  width: 70%;
    }
    label span{
      color:red;
    }
    </style>
  </head>
  <body class="body">
  <?php include "navbar.php"; ?>
      <!-- Navigator Start -->
      <section id="navigator">
          <div class="container">
              <div class="path">
                  <div class="path-main" style="color: darkred; display:inline-block;">Home</div>
                  <div class="path-directio" style="color: grey; display:inline-block;"> / Change Password</div>
              </div>

          </div>
      </section>
      <!-- Navigator End -->

      <!-- Login Start -->
      <section id="login">
          <div class="container">
                  <img src="imgs/logo.png" alt="" style="max-width:200px;">
                  <h3 class="text-center">Password Updated Successfully</h3>
          </div>
      </section>
      <!-- Login End -->
  <?php include "footer.php" ;?>
  </body>
  </html>
<?php
}
}
else{
echo '<script>alert("new password and confirm password not matched")
window.location.href = "change-password.php";
</script>';
}

}
else{
echo '<script>alert("incorrect password")
window.location.href = "change-password.php";
</script>';
}
} ?>
