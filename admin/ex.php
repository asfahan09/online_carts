<?php
include("header.php");
include("config.php");
$query = "SELECT * FROM users";
$result = mysqli_query($conn,$query);
?>
<div style="overflow-x:auto">
<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col">name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <?php
            while($data = mysqli_fetch_assoc($result)){
                ?>
  <tbody>
                <tr >
                <td><?php echo $data ["user_name"]; ?></td>
                <td><?php echo $data ["email"]; ?></td>
                <td><?php echo $data ["passwordd"]; ?></td>
                <td><?php echo $data ["address"]; ?></td>
                <td><?php echo $data ["Phone"]; ?></td>
                
                <td><a  onclick="return confirm('are you sure data edit')" href="edit.php?id=<?php echo $data["user_id"]; ?>" >edit</a></td>
                <td><a  onclick="return confirm('are you sure delete data')"  href="delete.php?id=<?php echo $data["user_id"]; ?>" >delete</a></td>
    
                </tr>
    
  </tbody>
                <?php
            }
            ?>
</table>
</div>
</div>

<?php
include("footer.php");
?>