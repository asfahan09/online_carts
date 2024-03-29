<?php
include("config.php");
$id = $_POST["id"];
$user_name = $_POST["user_name"];
$email = $_POST["email"];
$password = $_POST["password"];
$address = $_POST["address"];
$Phone = $_POST["Phone"];


$edit_query = "UPDATE `users` SET `user_name`='$user_name',`email`='$email',`passwordd`='$password',`address`='$address',`Phone`='$Phone' WHERE `user_id` ='$id'";
// $edit_result = mysqli_query($conn,$edit_query);
$edit_result = mysqli_query($conn,$edit_query);

if($edit_result){
    echo "value update";
    header("Location: table.php");
}
else {
    echo "not update";
    
}
?>