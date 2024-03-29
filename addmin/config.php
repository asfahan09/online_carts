<?php
$conn = mysqli_connect("localhost","root" ,"","online_carts");
   if($conn){
      // echo "Data base connect";
   }
   else{
      echo  "not connected";
   }
   ?>