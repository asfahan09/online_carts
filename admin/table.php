<?php
include("header.php");
include("config.php");
$query = "SELECT * FROM users";
$result = mysqli_query($conn,$query);
?>


    <table class = "table table-bordered p-2 w-75 mx-auto mt-5 ">
        <thead>
            <tr>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th>address</th>
                <th>phone</th>
                <th>edit</th>
                <th>delete</th> 
                
            </tr>
        </thead>
        <tbody>
            <?php
            while($data = mysqli_fetch_assoc($result)){
                ?>
                <tr >
                <td><?php echo $data ["user_name"]; ?></td>
                <td><?php echo $data ["email"]; ?></td>
                <td><?php echo $data ["passwordd"]; ?></td>
                <td><?php echo $data ["address"]; ?></td>
                <td><?php echo $data ["Phone"]; ?></td>
                
                <td><a  onclick="return confirm('are you sure data edit')" href="edit.php?id=<?php echo $data["user_id"]; ?>" >edit</a></td>
                <td><a  onclick="return confirm('are you sure delete data')"  href="delete.php?id=<?php echo $data["user_id"]; ?>" >delete</a></td>
    
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