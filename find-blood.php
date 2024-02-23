<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php"; ?>
<style media="screen">
  .serviceBox{
    border:1px solid #ddd;
    padding:20px;
    background: #dddddd36;
    margin:20px;
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
                <div class="path-directio" style="color: grey; display:inline-block;"> / Find-Blood</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

    <!-- Requests Start -->
    <section id="requests">
        <div class="title">
            <h2>Find Blood</h2>
            <hr class="line">
        </div>
        <div class="container" style="
    box-shadow: inset 0 0 22px #b42419, 0 0 6px #510301;">
    <form class="" action="" method="post">
            <div class="row">


                <div class="col-md-5">
                    <select name="type" id="" required class="form-control">
                      <option value="" >Select Blood Type</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                    </select>
                </div>
                <div class="col-md-5">
                    <select name="city" id="" required class="form-control">
                        <option value="">Select City</option>

                      <?php $sql = "select distinct city from register order by city asc";
                      $query = mysqli_query($con, $sql);
                      while($row = mysqli_fetch_array($query)){ ?>
                        <option value="<?=$row['city']?>"><?=$row['city']?></option>

                      <?php } ?>
                    </select>
                </div>
                <div class="col-md-2">
                  <input type="submit" name="" value="Search" class="btn btn-warning" style="    width: 80%;
    height: 35px;
    /* margin-left: 100px; */
    margin-top: 50px;">
                </div>
            </div>
          </form>

          <?php if(isset($_POST['city']) and isset($_POST['type'])){ ?>
            <div class="row">
              <?php

               $city = $_POST['city'];
              $type = $_POST['type'];
               $sql = "select * from register where type = '$type' and city = '$city'";
              $query = mysqli_query($con, $sql);
            while($row = mysqli_fetch_array($query)){
                ?>

                <div class="col-md-3">
                  <div class="serviceBox">
                        <div class="service-icon">
                          <span>
                            <div class="type1">
                       <h2 style="border: 1px solid darkred;border-radius: 50%;height: 64px;width: 64px;    padding-top: 11px;text-align: center;margin-left: 34%;">
                         <?=$row['type']?></h2>
                   </div>
                 </span>
               </div>
               <?php
                $BirthDay = new DateTime($row['dob']);
               $Recent_Today = new Datetime(date('y.m.d'));
               $differnce = $Recent_Today->diff($BirthDay);
               // printf(' Your age till date : %d years, %d month, %d days', $differnce->y, $differnce->m, $differnce->d);
               // printf("\n");
                ?>
               <h3 class="title"><?=$row['name']?></h3>
               <p class="description">City: <?=$row['city']?></p>
               <p class="description">Age: <?php printf(' %d years, %d month(s)', $differnce->y, $differnce->m);?></p>


                 <a href="donator.php?id=<?=$row['id'];?>"><button >Details</button></a>
           </div>
                </div>
              <?php } ?>






        </div>

      <?php } ?>
    </section>
    <!-- Requests End -->

  <?php include "footer.php"; ?>
</body>

</html>
