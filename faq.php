<!DOCTYPE html>
<html lang="en">
<head>
<?php include "head.php"; ?>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
<style media="screen">

.main-content {
  padding-top: 100px;
  padding-bottom: 100px;
}

.flex-center {
  align-items: center;
}
.accordion-button{
  margin-bottom: 10px;
  width:100%;
}
.accordion-button span{
  text-align: left;
}
.accordion-body {
  margin-top: 15px;
  padding: 25px;
  background: #fff;
  border-radius: 5px;
  box-shadow: 0 2px 25px -3px rgba(0, 0, 0, 0.1);
  margin-bottom: 10px;
}

.circle-icon {
  height: 50px;
  width: 50px;
  border-radius: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  background: darkred;
    border: 5px solid #b40909;
  color: #fff;
  margin-left: -20px;
  margin-right: 10px;
  transform: scale(1.2);
}
.accordion-item{
  border: 0px!important;
}
.accordion-button:not(.collapsed){
  border: 0px!important;
  color: darkred;
    background-color: #ffffff;
    box-shadow: inset 0 0px 0 rgb(0 0 0 / 13%);

}
.accordion button{
  box-shadow: inset 0 0 22px #b42419, 0 0 6px #510301!important;
}
</style>
</head>
<body class="body">
  <?php include "navbar.php";
  ?>
<section class="main-content">
  <div class="container">
    <h1 class="text-center text-uppercase mb-5">Frequently Asked Questions</h1>
    <br>
    <br>
    <div class="row flex-center">
      <div class="col-md-10 offset-md-1">
        <div class="accordion" id="accordionExample">

          <?php $sql = "select * from faq";
          $query = mysqli_query($con, $sql);
          while($row= mysqli_fetch_array($query)){ ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?=$row['id']?>">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?=$row['id']?>" aria-expanded="true" aria-controls="collapse<?=$row['id']?>">
              <div class="circle-icon"> <i class="fa fa-question"></i> </div>
              <span><?=$row['question']?></span> </button>
            </h2>
            <div id="collapse<?=$row['id']?>" class="accordion-collapse collapse" aria-labelledby="heading<?=$row['id']?>" data-bs-parent="#accordionExample">
              <div class="accordion-body" style="text-align:justify; font-weight:300"> <strong><?=$row['answer']?></div>
            </div>
          </div>
        <?php } ?>




        </div>
      </div>
    </div>
  </div>
</section>
<?php include "footer.php"; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
