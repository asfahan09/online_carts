<?php
include ("config.php");

if(isset($_POST["purchase"])){
   $username = $_POST['username'];
   $address = $_POST['Address'];
   $contact = $_POST['contact'];
   
   
   $query = "INSERT INTO `purchase`(`username`, `address`, `contact`)
    values ('$username','$address','$contact')";

   $result = mysqli_query($conn, $query);
   echo "<script>
   alert(' Successfully'); 
   window.location.href = 'index.php';</script>";
   }
?>