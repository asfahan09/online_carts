<?php
include("config.php");
$id = $_GET["id"];
$delete_query = "DELETE  FROM contact_us where id ='$id'";
$delete_result = mysqli_query($conn,$delete_query);

if ($delete_result) {
    echo "ok delete";
    header("Location: contactus_table.php");

}
else {
    echo "not delete";
}
?>