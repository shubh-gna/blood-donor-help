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
                  <form action="change-password-submit.php" method="post" >
                    <label for="">Curerent Password</label>
                      <input class="username" type="password" placeholder="Current Password" name = 'password' required>
                      <label for="">New Password</label>

                      <input class="password" type="Password" placeholder="New Password" name = 'npassword' required>

                      <label for="">Confirm Password</label>

                      <input class="password" type="Password" placeholder="ConfirmPassword" name = 'cpassword' required>

                      <!-- <a href="#">Forget Password ?</a><br> -->
                      <div class="reg-group">
                          <button style="background-color: darkred;">Submit</button>

                      </div>
                  </form>
          </div>
      </section>
      <!-- Login End -->
  <?php include "footer.php" ;?>
  </body>

  </html>
<?php
} ?>
