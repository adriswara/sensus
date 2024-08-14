<?php

if (isset($_POST['save'])) {
    include "connection.php";



    $query = "UPDATE warga SET 
          nama_warga = '$_POST[nama_warga]', 
          umur_warga = '$_POST[umur_warga]', 
          kelamin_warga = '$_POST[kelamin_warga]',
          alamat_warga = '$_POST[alamat_warga]',
          rt_warga = '$_POST[rt_warga]',
          rw_warga = '$_POST[rw_warga]',
          tglLahir_warga = '$_POST[tglLahir_warga]',
          tempatLahir_warga = '$_POST[tempatLahir_warga]',
          agama_warga = '$_POST[agama_warga]',
          statusPerkawinan_warga = '$_POST[statusPerkawinan_warga]',
          hubunganKeluarga_warga = '$_POST[hubunganKeluarga_warga]',
          pekerjaanKeluarga_warga = '$_POST[pekerjaanKeluarga_warga]',
          pendidikan_warga = '$_POST[pendidikan_warga]',
          kepemilikanRumah_warga = '$_POST[kepemilikanRumah_warga]',
          nomor_anggota_keluarga_warga  = '$_POST[nomor_anggota_keluarga_warga]',
          keberadaan_anggota_keluarga_warga  = '$_POST[keberadaan_anggota_keluarga_warga]',
          kepemilikan_akta_kelahiran_warga  = '$_POST[kepemilikan_akta_kelahiran_warga]',
          kepesertaan_jkn_warga  = '$_POST[kepesertaan_jkn_warga]'

          WHERE id_warga = '$_POST[id_warga]';
          ";


    $update = mysqli_query($db_connection, $query);

    if ($update) {
        // echo "<p>Pet update succesfully !</p>";
        echo "<script> alert('sensus update succesfuly !'); </script>";
    } else {
        // echo "<p>Anggota update failed !</p>";
        echo "<script> alert('sensus update failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
    window.location.replace("read_kartuKeluarga.php");
</script>