<?php
if(!isset($_SESSION))
{
    session_start();
}
if(!isset($_SESSION['email']))
{

include "config.php";
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "select * from register where email = '$email' and password = '$password'";
$query = mysqli_query($con, $sql);
if(mysqli_num_rows($query)>0){
$_SESSION['email'] = $email;
header("location: profile.php");
}
else{
  echo '<script>alert("Username or password not matched")
 window.location.href = "login.php";
 </script>';
}
}
else{
  header("location:profile.php");
}
 ?>
