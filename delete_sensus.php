<?php 

if (isset($_GET['id_warga'])) {
    include "connection.php";



$query = "UPDATE warga SET is_delete = 1 WHERE id_warga = '$_GET[id_warga]'";


$delete = mysqli_query($db_connection ,$query);

    if ($delete) {
    // echo "<p>Pet added succesfully !</p>";
    echo "<script> alert('warga delete succesfuly !'); </script>";
    }
    else{
    // echo "<p>Pet add failed !</p>";
    echo "<script> alert('warga delete failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_kartuKeluarga.php");
</script>