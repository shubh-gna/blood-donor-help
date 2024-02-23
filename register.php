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
                <div class="path-directio" style="color: grey; display:inline-block;"> / Register</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <!-- Sign Up Start -->
    <section id="sign-up">
        <div class="container">
                <img src="imgs/logo.png" alt="" style="max-width:200px;">
                <form action="register-submit.php" method="post">
                  <label for="">Name<span>*</span></label>
                    <input type="name" name="name" required placeholder="Name" required>
                    <label for="">Email<span>*</span></label>
                    <input type="email" name="email" required placeholder="Email" required>
                    <label for="">Date of Birth<span>*</span></label>
                    <input type="date" name="bday"required  placeholder="Birth date">
                    <label for="">Gender<span>*</span></label>

                    <table style="    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 71%;">
                      <tr>
                        <td style="width:40%">
                          <label for="male">Male</label>
                            <label for="female">Female</label>
                        </td>
                        <td>

                          <input type="radio" id="male" name="gender" value="Male" required style="     margin: 1px 12px 19px 12px;">
                          <input type="radio" id="female" name="gender" value="Female" required style="     margin: 12px 12px 4px 12px;">
                        </td>
                      </tr>
                    </table>





                    <label for="">Blood Type<span>*</span></label>
                    <select name="type" id="type" required>
                        <option value=" " >Select Blood Type</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                    <table style="    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 75%;">
                      <tr>
                        <td>
                          <label for="">Country Code<span>*</span></label>
                          <input type="text" name="c_code" required placeholder="Code" required="">
                        </td>
                        <td style="    width: 64%;">
                          <label for="">Phone<span>*</span></label>
                        <input type="Phone" name="phone" required placeholder="Phone Number" required=""></td>
                      </tr>
                    </table>

                    <label for="">City<span>*</span></label>
                    <input type="text" name="city" required placeholder="City" required="">
                    <label for="">State<span>*</span></label>
                    <input type="text" name="state" required placeholder="State" required="">
                    <label for="">Country<span>*</span></label>
                    <input type="text" name="country" required placeholder="Country" required="">
                    <label for="">Pin Code<span>*</span></label>
                    <input type="text" name="pin" required placeholder="Pin Code" required="">
                    <label for="">Password<span>*</span></label>
                    <input type="password" name="pass" required placeholder="Password" required="">
                    <label for="">Confirm Password<span>*</span></label>
                    <input type="password" name="cpass" required placeholder="Confirm Password" required="">
                        
                        
                            <table style=" display: block;
    margin-left: auto;
    margin-right: auto;
    width: 70%;">
                      <tr>
                        <th><input type="checkbox"  id="understand" name="understand" value="yes" style="width:100%" required></th>
                        <th class="text-justify"> <label for="understand" style="margin-left:16px;">I understand that Selling or donating blood in exchange for money is illegal under the National Blood Transfusion Services Act 2007 and those found convicted may face a prison sentence of up to three months with fine.</label> </th>
                      </tr>

                      <tr>
                        <th><input type="checkbox"  id="understand1" name="understand1" value="yes" style="width:100%" required></th>
                        <th class="text-justify"> <label for="understand1" style="margin-left:16px;">I shall never ask for money in exchange of blood to anyone</label> </th>
                      </tr>
                    </table>
                        
                    <div class="reg-group">
                        <button class="submit" type="submit" style="background-color: rgb(51, 58, 65);">Submit</button>
                    </div>
                </form>
        </div>
    </section>
    <!-- Sign Up End -->
<?php include "footer.php"; ?>
</body>
</html>
