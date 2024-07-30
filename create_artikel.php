<?php 

echo $_POST['judul_artikel'];

if (isset($_POST['save'])) {
    include "connection.php";



$query = "INSERT INTO artikel (judul_artikel, topik_artikel, isi_artikel) VALUES ('$_POST[judul_artikel]','$_POST[topik_artikel]','$_POST[isi_artikel]')";
$create = mysqli_query($db_connection ,$query);

if ($create) {
    // echo "<p>Pet added succesfully !</p>";
    echo "<script> alert('artikel added succesfuly !'); </script>";
}
else{
    // echo "<p>Pet add failed !</p>";
echo "<script> alert('artikel add failed!'); </script>";
}
}

?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_artikel.php");
</script>