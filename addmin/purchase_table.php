<?php
include("header.php");
include("config.php");
$query = "SELECT * FROM purchase";
$result = mysqli_query($conn,$query);
?>


    <table class = "table table-bordered p-2 w-75 mx-auto mt-5 table-hover ">
        <thead>
            <tr>
                <br>
                <th>name</th>
                
                <th>address</th>
                <th>contact</th>
                <th>edit</th>
                <th>delete</th> 
                
            </tr>
        </thead>
        <tbody>
            <?php
            while($data = mysqli_fetch_assoc($result)){
                ?>
                <tr >
                <td><?php echo $data ["username"]; ?></td>
                <td><?php echo $data ["address"]; ?></td>
                <td><?php echo $data ["contact"]; ?></td>
                
                <td><button class="btn btn-primary "><a class="text-light"  onclick="return confirm('are you sure data edit')" href="purchase_edit.php?id=<?php echo $data["id"]; ?>" >edit</a></button></td>
               
                <td><button class="btn btn-danger "><a class="text-light"  onclick="return confirm('are you sure data delete')" href="purchase_delete.php?id=<?php echo $data["id"]; ?>" >delete</a></button></td>
    
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
    

</body>
<?php
include("footer.php");
?>
</html>