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
 $sql = "select * from register where email = '$email'";
  $query = mysqli_query($con, $sql);
  $row = mysqli_fetch_array($query);
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
                  <div class="path-directio" style="color: grey; display:inline-block;"> / Profile</div>
              </div>

          </div>
      </section>
      <!-- Navigator End -->

      <!-- Sign Up Start -->
      <section id="sign-up">
          <div class="container">
                  <img src="imgs/logo.png" alt="" style="max-width:200px;">
                  <form action="register-update.php" method="post">
                    <label for="">Name<span>*</span></label>
                      <input disabled type="name" name="name" required placeholder="Name" value="<?=$row['name']?>" required>
                      <label for="">Email<span>*</span></label>
                      <input disabled type="email" name="email" required placeholder="Email" value="<?=$row['email']?>"  required>
                      <label for="">Date of Birth<span>*</span></label>
                      <input disabled type="date" name="bday"required  placeholder="Birth date" value="<?=$row['dob']?>" >
                      <label for="">Gender<span>*</span></label>
                      <input disabled type="text" name="gender"required   value="<?=$row['gender']?>" >

                      <label for="">Blood Type<span>*</span></label>
                      <input disabled type="text" name="type"required   value="<?=$row['type']?>" >

                      <table style="    display: block;
      margin-left: auto;
      margin-right: auto;
      width: 75%;">
                        <tr>
                          <td>
                            <label for="">Country Code<span>*</span></label>
                            <input type="text" name="c_code" required placeholder="Code" required="" value="<?=$row['country_code']?>"  >
                          </td>
                          <td style="    width: 64%;">
                            <label for="">Phone<span>*</span></label>
                          <input type="Phone" name="phone" required placeholder="Phone Number" value="<?=$row['phone']?>"  required=""></td>
                        </tr>
                      </table>

                      <label for="">City<span>*</span></label>
                      <input type="text" name="city" required placeholder="City" required="" value="<?=$row['city']?>" >
                      <label for="">State<span>*</span></label>
                      <input type="text" name="state" required placeholder="State" required="" value="<?=$row['state']?>" >
                      <label for="">Country<span>*</span></label>
                      <input type="text" name="country" required placeholder="Country" required="" value="<?=$row['country']?>" >
                      <label for="">Pin Code<span>*</span></label>
                      <input type="text" name="pin" required placeholder="Pin Code" required="" value="<?=$row['pin']?>" >


                      <label for="">Last Donated(if any)<span></span></label>
                      <input type="text" name="last_donate" required placeholder="Last Donated" value="<?=$row['last_donated']?>" >


                      <label for="">Regular Medication(if any)<span></span></label>
                      <input type="text" name="medication" required placeholder="Regular Medication" value="<?=$row['medication']?>" >

                      <label for="">Any Disease<span></span></label>
                      <input type="text" name="disease" required placeholder="Any Disease"  value="<?=$row['disease']?>" >

                      <div class="reg-group">
                          <button class="submit" type="submit" style="background-color: rgb(51, 58, 65);">Update</button>
                      </div>
                  </form>
          </div>
      </section>
      <!-- Sign Up End -->
  <?php include "footer.php"; ?>
  </body>
  </html>
  <?php
}
