<?php
    include("config.php");
    $query = "SELECT * FROM products;";
    $result = mysqli_query($conn, $query);
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Product Table</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <table class="table table-border">
            <thead>
                <tr>
                    <th>Product_ID</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Image</th>
                    <th>Product Description</th>
                    <th>Product Category</th>
                    
              

                </tr>
            </thead>
            <tbody>
                <?php
                while($data = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $data["prod_id"]?></td>
                        <td><?php echo $data["prodname"]?></td>
                        <td><?php echo $data["prodprice"]?></td>
                        <td><?php echo $data["prodimage"]?></td>
                        <td><?php echo $data ["Prod_Desc"]?></td>
                        <td><?php echo $data["Prod_Category"]?></td>
                        

                        <?php
                }
                
                ?>
                </tr>
            </tbody>
        </table>
    </body>
    </html>