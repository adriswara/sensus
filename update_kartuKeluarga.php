<?php

if (isset($_POST['save'])) {
    include "connection.php";



    $query = "UPDATE keluarga SET 
          nik_keluarga = '$_POST[nik_keluarga]', 
          jumlah_ibu_melahirkan_keluarga = '$_POST[jumlah_ibu_melahirkan_keluarga]', 
          jumlah_anak_lahir_laki_hidup = '$_POST[jumlah_anak_lahir_laki_hidup]',
          jumlah_anak_lahir_perempuan_hidup = '$_POST[jumlah_anak_lahir_perempuan_hidup]', 
          jumlah_anak_laki_hidup = '$_POST[jumlah_anak_laki_hidup]', 
          jumlah_anak_perempuan_hidup = '$_POST[jumlah_anak_perempuan_hidup]', 
          jumlah_anak_diinginkan = '$_POST[jumlah_anak_diinginkan]', 
          status_ibadah_rutin_keluarga = '$_POST[status_ibadah_rutin_keluarga]', 
          kepemilikan_akte_nikah_keluarga = '$_POST[kepemilikan_akte_nikah_keluarga]', 
          status_konflik_keluarga = '$_POST[status_konflik_keluarga]', 
          status_sumber_penghasilan_keluarga = '$_POST[status_sumber_penghasilan_keluarga]', 
          status_kelayakan_makanan_keluarga = '$_POST[status_kelayakan_makanan_keluarga]', 
          status_tabungan_keluarga = '$_POST[status_tabungan_keluarga]', 
          status_sakit_disabilitas_keluarga = '$_POST[status_sakit_disabilitas_keluarga]', 
          status_penggunaan_sosial_media_keluarga = '$_POST[status_penggunaan_sosial_media_keluarga]', 
          status_waktu_interaksi_keluarga = '$_POST[status_waktu_interaksi_keluarga]', 
          status_interaksi_pasutri = '$_POST[status_interaksi_pasutri]', 
          status_berkreasi_luarrumah_keluarga = '$_POST[status_berkreasi_luarrumah_keluarga]', 
          status_ikut_gotongroyong_rt_keluarga = '$_POST[status_ikut_gotongroyong_rt_keluarga]', 
          status_balita_ikut_posyandu_keluarga = '$_POST[status_balita_ikut_posyandu_keluarga]',
          status_balita_ikut_binkel_keluarga = '$_POST[status_balita_ikut_binkel_keluarga]', 
          status_remaja_ikut_binkel_keluarga = '$_POST[status_remaja_ikut_binkel_keluarga]', 
          status_remaja_ikut_pusatinformasi_konseling_keluarga = '$_POST[status_remaja_ikut_pusatinformasi_konseling_keluarga]', 
          status_lansia_ikut_binkel_keluarga = '$_POST[status_lansia_ikut_binkel_keluarga]', 
          status_keluarga_ikut_usaha_ekonomi_keluarga = '$_POST[status_keluarga_ikut_usaha_ekonomi_keluarga]', 
          jenis_atap_rumah_keluarga = '$_POST[jenis_atap_rumah_keluarga]', 
          jenis_dinding_keluarga = '$_POST[jenis_dinding_keluarga]', 
          jenis_lantai_keluarga = '$_POST[jenis_lantai_keluarga]', 
          sumber_penerangan_keluarga = '$_POST[sumber_penerangan_keluarga]', 
          sumber_air_keluarga = '$_POST[sumber_air_keluarga]', 
          status_fasilitas_bab_keluarga = '$_POST[status_fasilitas_bab_keluarga]', 
          luas_rumah_mPersegi_keluarga = '$_POST[luas_rumah_mPersegi_keluarga]', 
          total_orang_menetap_dirumah_keluarga = '$_POST[total_orang_menetap_dirumah_keluarga]', 
          bahan_bakar_utama_memasak_keluarga = '$_POST[bahan_bakar_utama_memasak_keluarga]', 
          kepemilikan_rumah_keluarga = '$_POST[kepemilikan_rumah_keluarga]', 
          status_perolehan_info_kb_keluarga = '$_POST[status_perolehan_info_kb_keluarga]', 
          asal_perolehan_info_kb_keluarga = '$_POST[asal_perolehan_info_kb_keluarga]', 
          status_petugas_asal_informasi_kb_keluarga = '$_POST[status_petugas_asal_informasi_kb_keluarga]', 
          asal_petugas_perolehan_info_kb_keluarga = '$_POST[asal_petugas_perolehan_info_kb_keluarga]'
          WHERE nik_keluarga = '$_POST[nik_keluarga]';
          ";


    $update = mysqli_query($db_connection, $query);

    if ($update) {
        // echo "<p>Pet update succesfully !</p>";
        echo "<script> alert('artikel update succesfuly !'); </script>";
    } else {
        // echo "<p>Anggota update failed !</p>";
        echo "<script> alert('artikel update failed!'); </script>";
    }
}
?>
<!-- <p><a href="read_pet_220088.php">BACK TO PETS LIST</a></p> -->
<script>
    window.location.replace("read_kartuKeluarga.php");
</script>