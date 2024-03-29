<?php
include("header.php");
?>

 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    .card img{
        width:200px;
        height:200px;
    }
</style> 
</head>
<body>
    <div class="container  ">
        <div class="row ">
            <?php
        require("config.php");
        $qry="select * from products";
        $result= mysqli_query($conn,$qry);
        
        while($row= mysqli_fetch_assoc($result)){
            ?>
            <!-- cards -->

            <div class="card col-md-4 mt-2 mb-5 g-3" style="width: 18rem; ">
  <img src="<?php echo $row["prodimage"]?>" class="card-img-top" alt="..."> 
  <div class="card-body">
    <h5 class="card-title"><?php echo $row["productname"]?></h5>
    <p class="card-text"><?php echo $row["prodprice"]?><p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> 


<?php
        }
            ?>
        </div>
    </div>
</body>
</html>