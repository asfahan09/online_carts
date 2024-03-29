<?php include("header.php") ;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <div class="row">

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card text-center">
                        <img src="images/8.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">Price 200</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="product_1"/>
                            <input type="hidden" name="Price" value="200"/>
                        </div>


                    </div>
                </form>
            </div>
 <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card text-center">
                        <img src="images/1.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">Price 300</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="product_2"/>
                            <input type="hidden" name="Price" value="300"/>
                        </div>


                    </div>
              </form>
            </div>
            
             <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card text-center">
                        <img src="images/2.jpeg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">Price 600</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="product_3"/>
                            <input type="hidden" name="Price" value="600"/>
                        </div>


                    </div>
                </form>
            </div>
             <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card text-center">
                        <img src="images/4.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Product 4</h5>
                            <p class="card-text">Price 400</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="product_4"/>
                            <input type="hidden" name="Price" value="400"/>
                        </div>


                    </div>
                </form>
            </div>
             <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card text-center">
                        <img src="images/5.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Product 5</h5>
                            <p class="card-text">Price 500</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="product_5"/>
                            <input type="hidden" name="Price" value="500"/>
                        </div>


                    </div>
                </form>
            </div>
             <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card text-center">
                        <img src="images/7.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Product 6</h5>
                            <p class="card-text">Price 700</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="product_6"/>
                            <input type="hidden" name="Price" value="700"/>
                        </div>


                    </div>
                </form>
            </div>
             <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card text-center">
                        <img src="images/8.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Product 7</h5>
                            <p class="card-text">Price 800</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="product_7"/>
                            <input type="hidden" name="Price" value="200"/>
                        </div>


                    </div>
                </form>
            </div>
             <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card text-center">
                        <img src="images/9.jpg" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Product 8</h5>
                            <p class="card-text">Price 1200</p>
                            <button name="Add_To_Cart" type="submit" class="btn btn-info">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="product_8"/>
                            <input type="hidden" name="Price" value="1200"/>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>