<?php
include("config.php");
if(isset($_POST["submit"])){
    $username = $_POST['username'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    

    $query = "INSERT INTO `contact_us`(`firstname`, `lastname`, `email`,  `Phone`)
     values ('$username','$lastname','$email','$phone')";

    $result = mysqli_query($conn, $query);
    echo "<script>
    alert('successfull'); 
    window.location.href = 'index.php';</script>";
  }

?>



