<?php
if(!isset($_SESSION)){
   session_start();
}
if(isset($_SESSION['user'])){
	header("Location: list.php");
}
else
{
$email = $_POST['username'];
$password = $_POST['password'];
 if($email == 'admin' and $password == 'pass'){
 	$_SESSION['user'] = $email;
 	echo "success";
  header("Location: list.php");
 }
 else{
    echo "incorrect username / password";
      }
}
?>