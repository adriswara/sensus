<?php 

if (isset($_POST['save'])) {
    include "connection.php";



$query = "UPDATE artikel SET 
          judul_artikel = '$_POST[judul_artikel]', 
          topik_artikel = '$_POST[topik_artikel]', 
          isi_artikel = '$_POST[isi_artikel]'
          WHERE id_artikel = '$_POST[id_artikel]';
          ";


$update = mysqli_query($db_connection ,$query);

    if ($update) {
    // echo "<p>Pet update succesfully !</p>";
    echo "<script> alert('artikel update succesfuly !'); </script>";
    }
    else{
    // echo "<p>Anggota update failed !</p>";
    echo "<script> alert('artikel update failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_artikel.php");
</script>