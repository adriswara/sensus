<?php include "template/header.php" ?>

<?php
if (!isset($_SESSION['login'])) {
  // echo $_SESSION['login'];
  echo "<script>alert('Please login first :');window.location.replace('login.php');</script>";
}
?>
<br>
<td class="mt-10"><a href="add_kartuKeluarga.php"><button class="btn btn-success">Add Sensus</button></a></td>

<!-- table -->
<div class="table-responsive">
  <table class="table table-sm mt-10 mb-80">
    <thead>
      <tr class="table-success d-flex">
        <th class="col-1" scope="col">#</th>
        <th class="col-1" scope="col">NIK Kartu Keluarga</th>
        <th class="col-1" scope="col">Jumlah Lahir dari ibu</th>
        <th class="col-1" scope="col">Junlah anak lahir laki laki masih hidup</th>
        <th class="col-1" scope="col">Junlah anak lahir perempuan masih hidup</th>
        <th class="col-1" scope="col">Jumlah anak laki laki masih hidup</th>
        <th class="col-1" scope="col">Jumlah anak perempuan masih hidup</th>
        <th class="col-1" scope="col">Jumlah anak yang diinginkan</th>
        <th class="col-1" scope="col">Keluarga melakukan ibadah secara rutin?</th>
        <th class="col-1" scope="col">Kepala keluarga memiliki akte nikah?</th>
        <th class="col-1" scope="col">Keluarga mengalami konfik akhir akhir ini?</th>
        <th class="col-1" scope="col">Keluarga memiliki sumber penghasilan utama?</th>
        <th class="col-1" scope="col">Keluarga memiliki akses makanan 4 sehat 5 sempurna selama 6 bulan terakhir ?</th>
        <th class="col-1" scope="col">Keluarga Memiliki tabungan atau asset lain nya seperti (Hasil kebun, hasil ternak, atau asset tabungan lainnya)</th>
        <th class="col-1" scope="col">Keluarga memiliki anggota yang sakit atau disabilitas dalam 6 bulan terakhir?</th>
        <th class="col-1" scope="col">Keluarga memiliki akses internet dan media sosial?</th>
        <th class="col-1" scope="col">Keluarga memiliki waktu untuk berinteraksi dalam 6 bulan terakhir?</th>
        <th class="col-1" scope="col">Selama 6 bulan terakhir pengasuhan bersama dilakukan bersama antara suami dan istri?</th>
        <th class="col-1" scope="col">Selama 6 bulan terakhir keluarga pernah berekreasi bersama di luar rumah?</th>
        <th class="col-1" scope="col">Selama 6 bulan terakhir, keluarga ikut serta dalam kegiatan sosial/gotong royong di lingkungan RT?</th>
        <th class="col-1" scope="col">Keluarga memiliki balita ikut kegiatan Posyandu</th>
        <th class="col-1" scope="col">Keluarga memiliki balita dan anak (0-6 tahun) ikut kegiatan Bina Keluarga Balita</th>
        <th class="col-1" scope="col">Keluarga Memiliki remaja (10-24 tahun) ikut kegiatan Bina Keluarga Remaja</th>
        <th class="col-1" scope="col">Ada anggota keluarga masih remaja (10-24 thn) ikut Pusat Informasi Dan Konseling Remaja / Mahasiswa (PIK-R/M)</th>
        <th class="col-1" scope="col">Keluarga yang memiliki lansia (umur >= 60 tahun) ikut kegiatan Bina Keluarga Lansia</th>
        <th class="col-1" scope="col">Keluarga mengikuti kegiatan usaha ekonomi melalui</th>
        <th class="col-1" scope="col">Jenis atap rumah keluarga</th>
        <th class="col-1" scope="col">Jenis dinding rumah keluarga</th>
        <th class="col-1" scope="col">Jenis lantai rumah keluarga</th>
        <th class="col-1" scope="col">Jumber penerangan utama rumah keluarga</th>
        <th class="col-1" scope="col">Sumber air utama rumah keluarga</th>
        <th class="col-1" scope="col">Status fasilitas bab rumah keluarga</th>
        <th class="col-1" scope="col">Luas rumah keluarga m(2)</th>
        <th class="col-1" scope="col">Total orang menetap dirumah keluarga</th>
        <th class="col-1" scope="col">Bahan bakar utama untuk memasak di rumah keluarga</th>
        <th class="col-1" scope="col">Kepemilikan rumah/bangunan tempat tinggal</th>
        <th class="col-1" scope="col">Keluarga pernah memperoleh/mendenger/melihat pesan/informasi program kependudukan, Keluarga Berencana dan Pembangunan Keluarga dari media?</th>
        <th class="col-1" scope="col">Jika , dari mana informasi tersebut diperoleh?</th>
        <th class="col-1" scope="col">Apakah keluarga pernah memperoleh/mendengar/melihat/informasi program kependudukan, Keluarga Berencana dan Pembangunan Keluarga dari petugas?</th>
        <th class="col-1" scope="col">Jika ya, darimana keluarga menerima informasi tersebut?</th>
        <th class="col-1" scope="col"></th>
        <th class="col-1" scope="col"></th>
        <th class="col-1" scope="col"></th>


      </tr>
    </thead>

    <?php
    include "connection.php";
    $query = "SELECT * FROM keluarga where is_Delete = 0";
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
          <td class="col-1"><?php echo ($data['status_ibadah_rutin_keluarga'] == 1) ? 'Ya' : (($data['status_ibadah_rutin_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_ibadah_rutin_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['kepemilikan_akte_nikah_keluarga'] == 1) ? 'Ya' : (($data['kepemilikan_akte_nikah_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['kepemilikan_akte_nikah_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_konflik_keluarga'] == 1) ? 'Ya' : (($data['status_konflik_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_konflik_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_sumber_penghasilan_keluarga'] == 1) ? 'Ya' : (($data['status_sumber_penghasilan_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_sumber_penghasilan_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_kelayakan_makanan_keluarga'] == 1) ? 'Ya' : (($data['status_kelayakan_makanan_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_kelayakan_makanan_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_tabungan_keluarga'] == 1) ? 'Ya' : (($data['status_tabungan_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_tabungan_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_sakit_disabilitas_keluarga'] == 1) ? 'Ya' : (($data['status_sakit_disabilitas_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_sakit_disabilitas_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_penggunaan_sosial_media_keluarga'] == 1) ? 'Ya' : (($data['status_penggunaan_sosial_media_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_penggunaan_sosial_media_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_waktu_interaksi_keluarga'] == 1) ? 'Ya' : (($data['status_waktu_interaksi_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_waktu_interaksi_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_interaksi_pasutri'] == 1) ? 'Ya' : (($data['status_interaksi_pasutri'] == 0) ? 'Tidak' : 'Data Error'); $data['status_interaksi_pasutri'] ?></td>
          <td class="col-1"><?php echo ($data['status_berkreasi_luarrumah_keluarga'] == 1) ? 'Ya' : (($data['status_berkreasi_luarrumah_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_berkreasi_luarrumah_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_ikut_gotongroyong_rt_keluarga'] == 1) ? 'Ya' : (($data['status_ikut_gotongroyong_rt_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_ikut_gotongroyong_rt_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_balita_ikut_posyandu_keluarga'] == 1) ? 'Ya' : (($data['status_balita_ikut_posyandu_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_balita_ikut_posyandu_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_balita_ikut_binkel_keluarga'] == 1) ? 'Ya' : (($data['status_balita_ikut_binkel_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_balita_ikut_binkel_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_remaja_ikut_binkel_keluarga'] == 1) ? 'Ya' : (($data['status_remaja_ikut_binkel_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_remaja_ikut_binkel_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_remaja_ikut_pusatinformasi_konseling_keluarga'] == 1) ? 'Ya' : (($data['status_remaja_ikut_pusatinformasi_konseling_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_remaja_ikut_pusatinformasi_konseling_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_lansia_ikut_binkel_keluarga'] == 1) ? 'Ya' : (($data['status_lansia_ikut_binkel_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_lansia_ikut_binkel_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['status_keluarga_ikut_usaha_ekonomi_keluarga'] == 1) ? 'Beton' : (($data['status_keluarga_ikut_usaha_ekonomi_keluarga'] == 2) ? 'Genteng' : (($data['status_keluarga_ikut_usaha_ekonomi_keluarga'] == 3) ? 'Asbes' : ((($data['status_keluarga_ikut_usaha_ekonomi_keluarga'] == 4) ? 'Kayu/Sirap' : "Data Error"))));?></td>
          <td class="col-1"><?php echo ($data['jenis_atap_rumah_keluarga'] == 1) ? 'Beton' : (($data['jenis_atap_rumah_keluarga'] == 2) ? 'Genteng' : (($data['jenis_atap_rumah_keluarga'] == 3) ? 'Asbes' : ((($data['jenis_atap_rumah_keluarga'] == 4) ? 'Kayu/Sirap' : ((($data['jenis_atap_rumah_keluarga'] == 5) ? 'Bambu' : ((($data['jenis_atap_rumah_keluarga'] == 6) ? 'Jerami/Ijuk/Daun-daunan' : ((($data['jenis_atap_rumah_keluarga'] == 7) ? 'Lainnya' : 'Data Error'))))))))));?></td>
          <td class="col-1"><?php echo ($data['jenis_dinding_keluarga'] == 1) ? 'Tembok' : (($data['jenis_dinding_keluarga'] == 2) ? 'Kayu/Papan' : (($data['jenis_dinding_keluarga'] == 3) ? 'Seng' : ((($data['jenis_dinding_keluarga'] == 4) ? 'Bambu' : ((($data['jenis_dinding_keluarga'] == 5) ? 'Lainnya' : 'Data Error')))))); ?></td>
          <td class="col-1"><?php echo ($data['jenis_lantai_keluarga'] == 1) ? 'Keramik/Marmer/Ubin/Tegel' : (($data['jenis_lantai_keluarga'] == 2) ? 'Semen' : (($data['jenis_lantai_keluarga'] == 3) ? 'Kayu/Papan' : ((($data['jenis_lantai_keluarga'] == 4) ? 'Bambu' : ((($data['jenis_lantai_keluarga'] == 5) ? 'Tanah' : ((($data['jenis_lantai_keluarga'] == 6) ? 'Lainnya' : 'Data Error'))))))));?></td>
          <td class="col-1"><?php echo ($data['sumber_penerangan_keluarga'] == 1) ? 'Pribadi <= 900 Watt ' : (($data['sumber_penerangan_keluarga'] == 2) ? 'Pribadi > 900 Watt' : (($data['sumber_penerangan_keluarga'] == 3) ? 'Genset' : ((($data['sumber_penerangan_keluarga'] == 4) ? 'Listrik Bersama' : ((($data['sumber_penerangan_keluarga'] == 5) ? 'Non Listrik' : 'Data Error')))))); ?></td>
          <td class="col-1"><?php echo ($data['sumber_air_keluarga'] == 1) ? 'Air Kemasan/Isi Ulang' : (($data['sumber_air_keluarga'] == 2) ? 'Ledeng/Pam' : (($data['sumber_air_keluarga'] == 3) ? 'Sumur Bor' : ((($data['sumber_air_keluarga'] == 4) ? 'Sumur Terlindung' : ((($data['sumber_air_keluarga'] == 5) ? 'Sumur Tidak Terlindung' : ((($data['sumber_air_keluarga'] == 6) ? 'Air Permukaan (Sungai, Danau, DLL)' : ((($data['sumber_air_keluarga'] == 7) ? 'Air Hujan' : (($data['sumber_air_keluarga'] == 8 ) ? 'Lainnya' : 'Data Error' )))))))))));?></td>
          <td class="col-1"><?php echo ($data['status_fasilitas_bab_keluarga'] == 1) ? 'Ya' : (($data['status_fasilitas_bab_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_fasilitas_bab_keluarga'] ?></td>
          <td class="col-1"><?php echo $data['luas_rumah_mPersegi_keluarga'] ?> m2 </td>
          <td class="col-1"><?php echo $data['total_orang_menetap_dirumah_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['bahan_bakar_utama_memasak_keluarga'] == 1) ? 'listrik/Gas' : (($data['bahan_bakar_utama_memasak_keluarga'] == 2) ? 'Minyak Tanah' : (($data['bahan_bakar_utama_memasak_keluarga'] == 3) ? 'Arang/Kayu' : ((($data['bahan_bakar_utama_memasak_keluarga'] == 4) ? 'Lainnya' : 'Data Error')))); ?></td>
          <td class="col-1"><?php echo ($data['kepemilikan_rumah_keluarga'] == 1) ? 'Milik Sendiri' : (($data['kepemilikan_rumah_keluarga'] == 2) ? 'Kontrak/Sewa' : (($data['kepemilikan_rumah_keluarga'] == 3) ? 'Bebas Sewa' : ((($data['kepemilikan_rumah_keluarga'] == 4) ? 'Menumpang' : ((($data['kepemilikan_rumah_keluarga'] == 5) ? 'Dinas' : ((($data['kepemilikan_rumah_keluarga'] == 6) ? 'Lainnya' : 'Data Error')))))))); ?></td>
          <td class="col-1"><?php echo ($data['status_perolehan_info_kb_keluarga'] == 1) ? 'Ya' : (($data['status_perolehan_info_kb_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_perolehan_info_kb_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['asal_perolehan_info_kb_keluarga'] == 1) ? 'Koran/Majalah/Tabloid' : (($data['asal_perolehan_info_kb_keluarga'] == 2) ? 'Televisi/Radio/Videotron' : (($data['asal_perolehan_info_kb_keluarga'] == 3) ? 'Facebook/Instagram/Twitter/Whatsapp/Youtube/dll' : ((($data['asal_perolehan_info_kb_keluarga'] == 4) ? 'Seminar/Workshop/Pertemuan/Kanseling/Pameran' : ((($data['asal_perolehan_info_kb_keluarga'] == 5) ? 'Poster/Spanduk/Konser/Billboard/Baliho' : ((($data['asal_perolehan_info_kb_keluarga'] == 6) ? 'Telefon' : 'Data Error')))))))); ?></td>
          <td class="col-1"><?php echo ($data['status_petugas_asal_informasi_kb_keluarga'] == 1) ? 'Ya' : (($data['status_petugas_asal_informasi_kb_keluarga'] == 0) ? 'Tidak' : 'Data Error'); $data['status_petugas_asal_informasi_kb_keluarga'] ?></td>
          <td class="col-1"><?php echo ($data['asal_petugas_perolehan_info_kb_keluarga'] == 1) ? 'Pejabat Pemerintah' : (($data['asal_petugas_perolehan_info_kb_keluarga'] == 2) ? 'Petugas Keluarga Berencana' : (($data['asal_petugas_perolehan_info_kb_keluarga'] == 3) ? 'Guru/Temen' : ((($data['asal_petugas_perolehan_info_kb_keluarga'] == 4) ? 'Tokoh Agama' : ((($data['asal_petugas_perolehan_info_kb_keluarga'] == 5) ? 'Tokoh Masyarakat' : ((($data['asal_petugas_perolehan_info_kb_keluarga'] == 6) ? 'Dokter' : ((($data['asal_petugas_perolehan_info_kb_keluarga'] == 7) ? 'Bidan/Perawat' : (($data['asal_petugas_perolehan_info_kb_keluarga'] == 8) ? 'Perangkat Desa/Kelurahan' : (($data['asal_petugas_perolehan_info_kb_keluarga'] == 9) ? 'Kader' : (($data['asal_petugas_perolehan_info_kb_keluarga'] == 10) ? 'Lainnya' : 'Data Error')))))))))))));  ?></td>




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