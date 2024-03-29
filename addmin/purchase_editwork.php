<?php
include("config.php");
$id = $_POST["id"];
$username = $_POST["username"];
$address = $_POST["Address"];
$Phone = $_POST["contact"];


$edit_query = "UPDATE `purchase` SET `username`='$username',`address`='$address',`contact`='$contact' WHERE `id` ='$id'";
// $edit_result = mysqli_query($conn,$edit_query);
$edit_result = mysqli_query($conn,$edit_query);

if($edit_result){
    echo "value update";
    header("Location: purchase_table.php");
}
else {
    echo "not update";
    
}
?>