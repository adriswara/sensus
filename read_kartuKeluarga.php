<?php include "template/header.php" ?>

<?php
if (!isset($_SESSION['login'])) {
  // echo $_SESSION['login'];
  echo "<script>alert('Please login first :');window.location.replace('login.php');</script>";
}
?>
<br>
<td><a href="add_kartuKeluarga.php"><button class="btn btn-success">Add Sensus</button></a></td>

<!-- table -->
<div class="table-responsive">
  <table class="table table-sm table-bordered">
    <thead>
      <tr class="table-success d-flex">
        <th class="col-1" scope="col">#</th>
        <th class="col-1" scope="col">NIK</th>
        <th class="col-1" scope="col">Jumlah Lahir dari ibu</th>
        <th class="col-1" scope="col">Junlah anak lahir laki laki masih hidup</th>
        <th class="col-1" scope="col">Junlah anak lahir perempuan masih hidup</th>
        <th class="col-1" scope="col">Jumlah anak laki laki masih hidup</th>
        <th class="col-1" scope="col">Jumlah anak perempuan masih hidup</th>
        <th class="col-1" scope="col">Jumlah anak yang diinginkan</th>
        <th class="col-1" scope="col">Status Ibadah Rutin Keluarga</th>
        <th class="col-1" scope="col">Status Kepemilikan Akte Nikah Keluarga</th>
        <th class="col-1" scope="col">Status konflik keluarga</th>
        <th class="col-1" scope="col">Status sumber penghasilan keluarga</th>
        <th class="col-1" scope="col">Status kelayakan makanan keluarga</th>
        <th class="col-1" scope="col">Status tabungan keluarga</th>
        <th class="col-1" scope="col">Status keluarga yang sakit atau disabilitas</th>
        <th class="col-1" scope="col">Status Penggunaan Sosial media</th>
        <th class="col-1" scope="col">Status waktu interaksi keluarga</th>
        <th class="col-1" scope="col">Status waktu interaksi pasutri</th>
        <th class="col-1" scope="col">Status berekreasi keluar rumah</th>
        <th class="col-1" scope="col">Status keikutsertaan gotong royong pada lingkungan RT</th>
        <th class="col-1" scope="col">Status balita ikut posyandu</th>
        <th class="col-1" scope="col">Status balita ikut bimbingan keluarga</th>
        <th class="col-1" scope="col">status_remaja_ikut_binkel_keluarga</th>
        <th class="col-1" scope="col">status_remaja_ikut_pusatinformasi_konseling_keluarga</th>
        <th class="col-1" scope="col">status_lansia_ikut_binkel_keluarga</th>
        <th class="col-1" scope="col">jenis_atap_rumah_keluarga</th>
        <th class="col-1" scope="col">jenis_dinding_keluarga</th>
        <th class="col-1" scope="col">jenis_lantai_keluarga</th>
        <th class="col-1" scope="col">sumber_penerangan_keluarga</th>
        <th class="col-1" scope="col">sumber_air_keluarga</th>
        <th class="col-1" scope="col">status_fasilitas_bab_keluarga</th>
        <th class="col-1" scope="col">luas_rumah_mPersegi_keluarga</th>
        <th class="col-1" scope="col">total_orang_menetap_dirumah_keluarga</th>
        <th class="col-1" scope="col">bahan_bakar_utama_memasak_keluarga</th>
        <th class="col-1" scope="col">kepemilikan_rumah_keluarga</th>
        <th class="col-1" scope="col">status_perolehan_info_kb_keluarga</th>
        <th class="col-1" scope="col">asal_perolehan_info_kb_keluarga</th>
        <th class="col-1" scope="col">status_petugas_asal_informasi_kb_keluarga</th>
        <th class="col-1" scope="col">asal_petugas_perolehan_info_kb_keluarga</th>
        <th class="col-1" scope="col"></th>
        <th class="col-1" scope="col"></th>
        <th class="col-1" scope="col"></th>


      </tr>
    </thead>

    <?php
    include "connection.php";
    $query = "SELECT * FROM keluarga";
    $keluarga = mysqli_query($db_connection, $query);


    $i = 1;
    foreach ($keluarga as $data):
      ?>

      <tbody>
        <tr class="table-light d-flex">
          <!--  -->
          <th class="col-1" scope="row"><?php echo $i++; ?></th>
          <td class="col-1"><?php echo $data['nik_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['jumlah_ibu_melahirkan_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['jumlah_anak_lahir_laki_hidup'] ?></td>
          <td class="col-1"><?php echo $data['jumlah_anak_lahir_perempuan_hidup'] ?></td>
          <td class="col-1"><?php echo $data['jumlah_anak_laki_hidup'] ?></td>
          <td class="col-1"><?php echo $data['jumlah_anak_perempuan_hidup'] ?></td>
          <td class="col-1"><?php echo $data['jumlah_anak_diinginkan'] ?></td>
          <td class="col-1"><?php echo $data['status_ibadah_rutin_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['kepemilikan_akte_nikah_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_konflik_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_sumber_penghasilan_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_kelayakan_makanan_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_tabungan_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_sakit_disabilitas_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_penggunaan_sosial_media_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_waktu_interaksi_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_interaksi_pasutri'] ?></td>
          <td class="col-1"><?php echo $data['status_berkreasi_luarrumah_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_ikut_gotongroyong_rt_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_balita_ikut_posyandu_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_balita_ikut_binkel_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_remaja_ikut_binkel_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_remaja_ikut_pusatinformasi_konseling_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_lansia_ikut_binkel_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['jenis_atap_rumah_keluarga'] == 1) ? 'Beton' : (($data['jenis_atap_rumah_keluarga'] == 2) ? 'Genteng' : (($data['jenis_atap_rumah_keluarga'] == 3) ? 'Asbes' : ((($data['jenis_atap_rumah_keluarga'] == 4) ? 'Kayu/Sirap' : ((($data['jenis_atap_rumah_keluarga'] == 5) ? 'Bambu' : ((($data['jenis_atap_rumah_keluarga'] == 6) ? 'Jerami/Ijuk/Daun-daunan' : ((($data['jenis_atap_rumah_keluarga'] == 7) ? 'Lainnya' : 'Data Error'))))))))));?></td>
          <td class="col-1"><?php echo $data['jenis_dinding_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['jenis_lantai_keluarga'] == 1) ? 'Keramik/Marmer/Ubin/Tegel' : (($data['jenis_lantai_keluarga'] == 2) ? 'Semen' : (($data['jenis_lantai_keluarga'] == 3) ? 'Kayu/Papan' : ((($data['jenis_lantai_keluarga'] == 4) ? 'Bambu' : ((($data['jenis_lantai_keluarga'] == 5) ? 'Tanah' : ((($data['jenis_lantai_keluarga'] == 6) ? 'Lainnya' : 'Data Error'))))))));?></td>
          <td class="col-1"><?php echo $data['sumber_penerangan_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['sumber_air_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_fasilitas_bab_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['luas_rumah_mPersegi_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['total_orang_menetap_dirumah_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['bahan_bakar_utama_memasak_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['kepemilikan_rumah_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_perolehan_info_kb_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['asal_perolehan_info_kb_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['status_petugas_asal_informasi_kb_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['asal_petugas_perolehan_info_kb_keluarga'] ?></td>




          <!--  -->
          <td class="col-1"><a href="read_sensus.php?nik_keluarga=<?= $data['nik_keluarga'] ?>"><button
                class="btn btn-outline-primary">Tambah Anggota</button></a></td>
          <td class="col-1"><a href="edit_kartuKeluarga.php?nik_keluarga=<?= $data['nik_keluarga'] ?>"><button
                class="btn btn-outline-primary">Edit</button></a></td>
          <td class="col-1"><a href="delete_kartuKeluarga.php?nik_keluarga=<?= $data['nik_keluarga'] ?>"><button
                class="btn btn-outline-danger">Delete</button></a></td>
        </tr>
      </tbody>
    <?php endforeach ?>


  </table>
</div>
<!-- table -->
</body>

<?php include "template/footer.php" ?>

</html>