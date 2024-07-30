<?php 

echo $_POST['nama_warga'];

if (isset($_POST['save'])) {
    include "connection.php";



$query = "INSERT INTO warga (nama_warga, umur_warga, kelamin_warga, kartuKeluarga_warga, alamat_warga, rt_warga, rw_warga, nik_warga, tglLahir_warga, tempatLahir_warga, agama_warga, statusPerkawinan_warga, hubunganKeluarga_warga, pekerjaanKeluarga_warga, pendidikan_warga, kepemilikanRumah_warga, keterangan_warga ) VALUES ('$_POST[nama_warga]','$_POST[umur_warga]','$_POST[kelamin_warga]','$_POST[kartuKeluarga_warga]','$_POST[alamat_warga]','$_POST[rt_warga]','$_POST[rw_warga]','$_POST[nik_warga]','$_POST[tglLahir_warga]','$_POST[tempatLahir_warga]','$_POST[agama_warga]','$_POST[statusPerkawinan_warga]','$_POST[hubunganKeluarga_warga]','$_POST[pekerjaanKeluarga_warga]','$_POST[pendidikan_warga]','$_POST[kepemilikanRumah_warga]','$_POST[keterangan_warga]')";
$create = mysqli_query($db_connection ,$query);

if ($create) {
    // echo "<p>Pet added succesfully !</p>";
    echo "<script> alert('warga added succesfuly !'); </script>";
}
else{
    // echo "<p>Pet add failed !</p>";
echo "<script> alert('warga add failed!'); </script>";
}
}

?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
window.location.replace("read_sensus.php");
</script>