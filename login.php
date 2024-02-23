<?php
if(!isset($_SESSION))
{
    session_start();
}
if(!isset($_SESSION['email']))
{
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
                <div class="path-directio" style="color: grey; display:inline-block;"> / Login</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <!-- Login Start -->
    <section id="login">
        <div class="container">
                <img src="imgs/logo.png" alt="" style="max-width:200px;">
                <form action="login-submit.php" method="post" >
                  <label for="">Email</label>
                    <input class="username" type="email" placeholder="Email" name = 'email' required>
                    <label for="">Password</label>

                    <input class="password" type="Password" placeholder="Password" name = 'password' required>

                    <!-- <a href="#">Forget Password ?</a><br> -->
                    <div class="reg-group">
                        <button style="background-color: darkred;">Login</button>
                        <br>
                      <a href="register.php">  <button style="background-color: rgb(51, 58, 65);">Register</button></a>
                    </div>
                </form>
        </div>
    </section>
    <!-- Login End -->
<?php include "footer.php" ;?>
</body>

</html>
<?php }
else{
  header("location:profile.php");
} ?>
