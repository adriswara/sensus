<?php 

if (isset($_POST['save'])) {
    include "connection.php";



$query = "UPDATE admin SET 
          username = '$_POST[username]', 
          password = '$_POST[password]', 
          admin_type = '$_POST[admin_type]'
          WHERE id_admin = '$_POST[id_admin]';
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
window.location.replace("read_admin.php");
</script>