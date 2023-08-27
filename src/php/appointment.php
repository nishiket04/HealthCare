<?php
include 'dbconnect.php';
if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $phone=$_POST['phone'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $time = $_POST['time'];


$area=$_POST['area'];
$city=$_POST['city'];
$state=$_POST['state'];
$post_code=$_POST['post_code'];

//main addres
$address="$area, $city, $state, $post_code";


    
  
    $sql = "INSERT INTO `appointement_details`(`name`, `phone`, `email` , `date` , `time` ,`address`) VALUES ('$name','$phone' ,'$email' , '$date' , '$time' , '$address')";
  
  
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
}

?>