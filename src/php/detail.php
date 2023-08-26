<?php
include('dbconnect.php');
//data base entry
if (isset($_POST['submit'])) {
    

    

//reg date variable
$reg_day=$_POST['reg_day'];
$reg_month=$_POST['reg_month'];
$reg_year=$_POST['reg_year'];

// final date formate
$reg_date="$reg_day/$reg_month/$reg_year";

// aayushmaan number which is primary key
$aayushmaan_no=$_POST['aayushmaan_no'];

//cliant name
$fname=$_POST['fname'];
$lname=$_POST['lname'];

// final full name
$name="$fname $lname";

//gender
$sex=$_POST['sex'];

// dob input
$dob_month=$_POST['dob_month'];
$dob_day=$_POST['dob_day'];
$dob_year=$_POST['dob_year'];

//final dob in dd/mm/yyyy
$dob="$dob_day/$dob_month/$dob_year";

//mobile number
$mobile=$_POST['mobile'];

//mail
$mail=$_POST['mail'];

//addres variablr
$add1=$_POST['add1'];
$add2=$_POST['add2'];
$add_city=$_POST['add_city'];
$add_state=$_POST['add_state'];
$add_pin=$_POST['add_pin'];

//main addres
$address="$add1, $add2, $add_city, $add_state, $add_pin";

//merital statue
$marital_status=$_POST['merital'];

//18+ check
$age=$_POST['age'];

// parent detail if needed
$p_fname=$_POST['p_fname'];
$p_lname=$_POST['p_lname'];
$p_number=$_POST['p_number'];

//final parent name
$p_name="$p_fname $p_lname";

// emergency detail
$emergency_contact_fname=$_POST['emergency_Contact_fname'];
$emergency_contact_lname=$_POST['emergency_Contact_lname'];
$emergency_contact="$emergency_contact_fname $emergency_contact_fname";
$relationship=$_POST['relationship'];
$contact_Number=$_POST['contact_Number'];

//health history
$health_hestory=$_POST['health_history'];
$additional_notes=$_POST['additional_notes'];

//perement illness
$perement_illness=$_POST['perement_illness'];

//discription illness
$discription_illness=$_POST['discription_illness'];

$sql = "INSERT INTO `patient_dti`(`reg_date`, `aayushmaan_no`, `name`, `sex`, `dob`, `mobile`, `mail`, `address`, `marital_status`, `age`, `parent_name`, `p_number`, `emergency_contact`, `relationship`, `contact_number`, `health_hestory`, `additional_notes`, `perement_illness`, `discription_illness`) VALUES ('$reg_date', '$aayushmaan_no', '$name', '$sex', '$dob', '$mobile', '$mail', '$address', '$marital_status', '$age', '$p_name', '$p_number', '$emergency_contact', '$relationship', '$contact_Number', '$health_hestory', '$additional_notes', '$perement_illness', '$discription_illness')";
  
  
    $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($query==1){
        echo "100%";
    }
    else{
        echo "fail";
    }
  }


?>