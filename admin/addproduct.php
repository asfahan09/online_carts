<?php
    include("config.php");


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

    $query = "INSERT INTO `products` (`prodname`,`prodprice`, `prodimage`,`prod_desc`,`prod_category`)
    VALUES ('$prodname','$prodprice', '$mypath','$Prod_Desc','$Prod_Category')";
    


 $result = mysqli_query($conn , $query); 
 
 if ($result) {
    echo "<div class='alert alert-primary w-75 mt-5 mx-auto' role='alert'>
    Product Added in your Database
  </div>";
 }
 else{
    echo " error record";
 }

 ?>