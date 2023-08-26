<?php
session_start();

include 'dbconnect.php';

if (isset($_POST['submit'])) {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  

  $sql = "INSERT INTO `regform`(`name`, `email`, `password`) VALUES ($name,$email ,$password)";


  $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  $_SESSION['email'] = $email;
  $_SESSION['email'] = $email;
}
?>
