<?php
    include("header.php");
    include("config.php");
    $id = $_GET["id"];
    $edit_query = "SELECT * FROM purchase where id = '$id'";
    $edit_result = mysqli_query($conn,$edit_query);
    $row = mysqli_fetch_assoc($edit_result);
?>
     <br><br>
<form method="post" action="purchase_editwork.php">
 <div class="container text-center  mt-5">
   <h1 class="text-primary">Edit your detail</h1>
 </div>
         <center>
         <div class="col-md-12 form-group mt-5">
         <input type="hidden" value ="<?php echo $row["id"] ?>" name="id">
           <input type="text" name="username" class="form-control w-50" value ="<?php echo $row["username"] ?>"  placeholder="Enter Username" required>
         </div>
         
         
         
         <div class="col-md-12 form-group mt-3">
           <input type="text" name="Address" class="form-control w-50" value ="<?php echo $row["address"] ?>"  placeholder="Enter address" required>
         </div>
         <br>
         
         
         <div class="col-md-12 form-group mt-3 mt-md-0">
             <input type="tel" value ="<?php echo $row["contact"] ?>" class="form-control w-50" name="contact"  placeholder=" Phone " required>
         </div>


         </center>
         <br>
         <br>
       <center>
       <input type="submit" value="edit" class="btn btn-primary w-50 ">
       </center>
     </form>










<?php

include ("footer.php");

?>



     