<?php include "header.php";

$user_role = 2;
// $user_id = 2;
$user_name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$cell = $_POST['cell'];
$dob = $_POST['dob'];
$password = $_POST['password'];

$query = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password' ";
$result = mysqli_query($conn, $query) ;

if(mysqli_num_rows($result) > 0) {
   echo "<script> alert('user already exist!') </script>";
} else {
    // $user_id=mysqli_insert_id($conn);
    $query = "INSERT INTO users (user_role, user_name, user_image, email, address, password, phone, cell, dob) 
    VALUES ('$user_role', '$user_name', NULL, '$email', '$address', '$password', '$phone', '$cell', '$dob')";

    $result = mysqli_query($conn, $query);
}

if ($result) {
    header('location:login.php');
} else {
    echo mysqli_error($conn);
}

?>