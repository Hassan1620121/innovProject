<?php
include_once('connect.php');
if(isset($_POST['login']))
{

$email = mysqli_escape_string($connect,$_POST['email']);
$password = mysqli_escape_string($connect,$_POST['password']);
$query = "SELECT * FROM login where email='$email' AND password='$password'";
$res = $connect->query($query);
if(!$res)
{
  echo $connect->error;
}
else if(mysqli_num_rows($res)==1)
{
  session_start();
  $_SESSION['email']=$email;
  header('location:index.php');
}
else
{
  echo 'Invalid Credentials';
}
}

   
       

?>

