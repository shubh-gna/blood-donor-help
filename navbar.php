<?php include_once "config.php"; ?>
<?php
if(!isset($_SESSION))
{
    session_start();
}
  ?>
    <!-- Navbar 1 Start -->
    <section id="Nav1">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
                <div class="navbar-collapse  w-100">
                    <ul class="navbar-nav mr-auto" style="flex-direction: row;">

                        </li>
                    </ul>
                </div>
                <div class="mx-auto order-0 navbar-brand mx-auto">


                </div>
                <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">

                        </li>
                        <li class="nav-item">

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <section id="Nav2">




        <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <img src="imgs/logo.png" style="width:6%"></img>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="who-we-are.php">Who We Are</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Blood</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="find-blood.php">Find Blood</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="faq.php">FAQ</a>
                </li>

                


            </ul>
            <?php
            if(!isset($_SESSION['email']))
            {
               ?>
            <a href="login.php"><button type="button" name="button" class="btn btn-danger">Login</button></a>
          <?php }else{
            ?>
            <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" href="change-password.php">Change Password</a>
              </li>
            </ul>
            <a href="logout.php"><button type="button" name="button" class="btn btn-danger">Log Out</button></a>

            <?php
          } ?>
          </div>
        </nav>


    </section>
    <!-- Navbar 2 End -->
