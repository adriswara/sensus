<?php 

if (isset($_GET['id_artikel'])) {
    include "connection.php";



$query = "UPDATE artikel SET is_delete = 1 WHERE id_artikel = '$_GET[id_artikel]'";


$delete = mysqli_query($db_connection ,$query);

    if ($delete) {
    // echo "<p>Pet added succesfully !</p>";
    echo "<script> alert('artikel delete succesfuly !'); </script>";
    }
    else{
    // echo "<p>Pet add failed !</p>";
    echo "<script> alert('artikel delete failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_artikel.php");
</script>