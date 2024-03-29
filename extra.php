<?php
include 'header.php';
?>

<br><br> <br><br><br> 
<div class="container">
                  <div class="row row-cols-1 row-cols-md-3 g-4">
<?php
                $con = mysqli_connect("localhost","root","", "online_carts");
                $prod_id= $_GET['id'];

                $query= "SELECT * FROM `products` where prod_Category = $prod_id";

                $result= mysqli_query($con, $query);

                while($opt= mysqli_fetch_assoc($result)){
      
                 
                 ?> 
<br>
                 <!-- cards -->
              
                    <div class="col-lg-3">
                 <div class="card">
  <img src="admin/<?php echo $opt["prodimage"]?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $opt["prodname"]?></h5>
    <p class="card-text"><?php echo $opt["Prod_Desc"]?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<?php } ?>
</div>
</div>
<?php
include 'footer.php';
?>