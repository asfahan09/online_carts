<?php
    include("config.php");
    $id = $_POST["id"];
    $prodname = $_POST["prodname"];
    $prodprice = $_POST["prodprice"];
    $Prod_Desc =$_POST["Prod_Desc"];
    $Prod_Category = $_POST["cat"];
    $img= $_FILES["prodimage"];

   //  image SEt Working=================================
// print_r($img);


$imgname= $img['name'];
$temppath = $img['tmp_name'];
$mypath= "img/".$imgname;

move_uploaded_file($temppath,$mypath);

   
   $query = "UPDATE `products` SET `prodname`='$prodname',`prodprice`='$prodprice',`prodimage`='$mypath',`Prod_Desc`='$Prod_Desc',`Prod_Category`='$Prod_Category' WHERE `prod_id` ='$id'";


 $result = mysqli_query($conn , $query); 
 
 if ($result) {
    header('location:product_table.php');
 }
 else{
    echo " error record";
 }

 ?>