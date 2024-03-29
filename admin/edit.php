<?php
    include("header.php");
    include("config.php");
    $id = $_GET["id"];
    $edit_query = "SELECT * FROM users where user_id = '$id'";
    $edit_result = mysqli_query($conn,$edit_query);
    $row = mysqli_fetch_assoc($edit_result);

    
?>
     
            <form method="post" action="editwork.php">
              
                <div class="col-md-12 form-group">
                <input type="hidden" value ="<?php echo $row["user_id"] ?>" name="id">
                  <input type="text" name="user_name" class="form-control" value ="<?php echo $row["user_name"] ?>"  id="name" placeholder="Enter Username" required>
                </div>

                <br>
                <br>
                
                 <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="email" value ="<?php echo $row["email"] ?>" class="form-control" name="email"  placeholder="Enter Email" >
                </div>
                <br>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                  <input type="password" value ="<?php echo $row["passwordd"] ?>" class="form-control" name="password" id="email" placeholder="Enter Password" required>
                </div>
                <br>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                    <input type="text"value ="<?php echo $row["address"] ?>" class="form-control" name="address"  placeholder=" Address" required>
                </div>
                <br>
                <br>
                <div class="col-md-12 form-group mt-3 mt-md-0">
                    <input type="tel" value ="<?php echo $row["Phone"] ?>" class="form-control" name="Phone"  placeholder=" Phone " required>
                </div>
                <br>
                <br>
             

              
             <input type="submit" value="update" class="btn btn-primary w-50">
              
            </form>
   

