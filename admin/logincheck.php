<?php
    include('config.php');
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * from users where email = '$email' AND password = '$password'";

    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0){
        header("Location:index.php");
    }
    else{
        
        header("Location:login.php");
    }
    
?>