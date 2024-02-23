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
                <div class="path-main" style="color: darkred; display:inline-block;">/ Donations</div>
                <div class="path-directio" style="color: grey; display:inline-block;"> / Donor Details</div>
            </div>

        </div>
    </section>
    <!-- Navigator End -->

<?php
$id = $_GET['id'];
$sql = "select * from register where id = '$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

 $BirthDay = new DateTime($row['dob']);
$Recent_Today = new Datetime(date('y.m.d'));
$differnce = $Recent_Today->diff($BirthDay);
// printf(' Your age till date : %d years, %d month, %d days', $differnce->y, $differnce->m, $differnce->d);
// printf("\n");

 ?>

 <style media="screen">
   #donator td{
     word-wrap: break-word;
     word-break: break-all;
   }
 </style>
    <!-- donator Start -->
    <section id="donator">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered">
                        <tr>
                            <th>Name:</th>
                            <td><?=$row['name'];?></td>
                        </tr>
                        <tr>
                            <th>Age:</th>
                            <td><?php printf('%d years, %d month(s)', $differnce->y, $differnce->m); ?></td>
                        </tr>
                        <tr>
                            <th>Address:</th>
                            <td><?=$row['city'].', '.$row['state'].', '.$row['pin'].', '.$row['country']; ?></td>
                        </tr>
                        <tr>
                            <th>Gender:</th>
                            <td><?=$row['gender']; ?></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-6">
                <table class="table table-bordered">
                    <tr>
                        <th>Blood Type:</th>
                        <td><?=$row['type']?></td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td><?=$row['email']?></td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td><?=$row['country_code'].'-'.$row['phone']?></td>
                    </tr>
                    <tr>
                        <th>Last Donated:</th>
                        <td><?=$row['last_donated']?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Regular Medication:</th>
                        <td><?=$row['medication']?></td>
                    </tr>
                </table>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Disease:</th>
                        <td><?=$row['disease']?></td>
                    </tr>
                </table>
            </div>
            </div>


        </div>
    </section>
    <!-- Who End -->
<?php include "footer.php"; ?>
</body>

</html>
