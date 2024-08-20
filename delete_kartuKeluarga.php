<?php 

if (isset($_GET['nik_keluarga'])) {
    include "connection.php";



$query = "UPDATE keluarga SET is_delete = 1 WHERE nik_keluarga = '$_GET[nik_keluarga]'";


$delete = mysqli_query($db_connection ,$query);

    if ($delete) {
    // echo "<p>Pet added succesfully !</p>";
    echo "<script> alert('keluarga delete succesfuly !'); </script>";
    }
    else{
    // echo "<p>Pet add failed !</p>";
    echo "<script> alert('keluarga delete failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_kartuKeluarga.php");
</script>