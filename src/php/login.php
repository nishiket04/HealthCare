<?php
// session_start();
if (isset($_POST['submit'])) {
  $conn = mysqli_connect('localhost', 'root', '', 'hmis');
  if ($conn) {
    echo "<script>alert('error in database connection);</script>";
  }
  $email = $_POST['email'];
  $password = $_POST['password'];
  // $enroll=$row['enrollment'];
  // echo $enroll;

  $query = "SELECT * from regform WHERE email like ('$email') and password like ('$password')";

  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $count = mysqli_num_rows($result);
  // echo $count; 
  if ($count >= 1) {
    $_SESSION['email'] = $email;
    $_SESSION['logindatabase'] = 'true';
    header("Location: ../../doctor.php");
    ?>
    <script>
      alert('Login Successfully');
    //   window.location.href = './company.php';
    </script>
  <?php
  } else {
    echo "worng username or password";
  }
}
?>