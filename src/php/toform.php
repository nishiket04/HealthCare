<?php 
if (isset($_POST['submit'])) {

    $box=$_POST['box'];
    if($box=="doc"){
   header("Location: ../../form_doc.php");
   }
   else if($box=="pat"){
    header("Location: ../../form.php");
   }
   else{
    header("Location: ../../form_nur.php");
   }
}
?>