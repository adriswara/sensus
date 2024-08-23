<?php include "template/header.php" ?>

<?php
if (!isset($_SESSION['login'])) {
  // echo $_SESSION['login'];
  echo "<script>alert('Please login first :');window.location.replace('login.php');</script>";
}
?>
<br>

<td><a href="add_sensus.php?nik_keluarga=<?= $_GET['nik_keluarga'] ?>"><button class="btn btn-success">Add
      Sensus</button></a></td>

<!-- table -->
<div class="table-responsive">
  <table class="table table-sm mt-10 mb-80">
    <thead>
      <tr class="table-success d-flex">
        <th class="col-1" scope="col">#</th>
        <th class="col-1" scope="col">Nama</th>
        <th class="col-1" scope="col">Umur</th>
        <th class="col-1" scope="col">Kelamin</th>
        <th class="col-1" scope="col">Nomor Induk Kartu Keluarga</th>
        <th class="col-1" scope="col">Alamat</th>
        <th class="col-1" scope="col">RT</th>
        <th class="col-1" scope="col">RW</th>
        <th class="col-1" scope="col">Tanggal Lahir Warga</th>
        <th class="col-1" scope="col">Tempat Lahir Warga</th>
        <th class="col-1" scope="col">Agama</th>
        <th class="col-1" scope="col">Status Perkawinan</th>
        <th class="col-1" scope="col">Hubungan Keluarga</th>
        <th class="col-1" scope="col">Pekerjaan Keluarga</th>
        <th class="col-1" scope="col">Pendidikan</th>
        <th class="col-1" scope="col">Kepemilikan Rumah</th>
        <th class="col-1" scope="col">keberadaan anggota keluarga</th>
        <th class="col-1" scope="col">kepemilikan akte kelahiran</th>
        <th class="col-1" scope="col">kepesertaan jkn warga</th>
        <th class="col-1" scope="col"></th>
        <th class="col-1" scope="col"></th>

      </tr>
    </thead>

    <?php
    include "connection.php";
    $query = "SELECT * FROM warga where nik_kartuKeluarga_warga = '$_GET[nik_keluarga]' AND is_delete = 0 ";
    $warga = mysqli_query($db_connection, $query);


    $i = 1;
    foreach ($warga as $data):
      ?>

      <tbody>
        <tr class="table-light d-flex">
          <!--  -->
          <th class="col-1" scope="row"><?php echo $i++; ?></th>
          <td class="col-1"><?php echo $data['nama_warga'] ?></td>
          <td class="col-1"><?php echo $data['umur_warga'] ?></td>
          <td class="col-1"><?php echo ($data['kelamin_warga']) == 1 ? 'Laki-Laki' : 'Perempuan' ?></td>
          <td class="col-1"><?php echo $data['nik_kartuKeluarga_warga'] ?></td>
          <td class="col-1"><?php echo $data['alamat_warga'] ?></td>
          <td class="col-1"><?php echo $data['rt_warga'] ?></td>
          <td class="col-1"><?php echo $data['rw_warga'] ?></td>
          <td class="col-1"><?php echo $data['tglLahir_warga'] ?></td>
          <td class="col-1"><?php echo $data['tempatLahir_warga'] ?></td>
          <td class="col-1"><?php echo ($data['agama_warga'] == 1) ? 'Islam' : (($data['agama_warga'] == 2) ? 'Kristen' : (($data['agama_warga'] == 3) ? 'Katholik' : ((($data['agama_warga'] == 4) ? 'Hindu' : ((($data['agama_warga'] == 5) ? 'Budha' : ((($data['agama_warga'] == 6) ? 'Khonghucu' : ((($data['agama_warga'] == 7) ? 'Penghayat Kepercayaan' : 'Data Error'))))))))));?></td>
          <td class="col-1"><?php echo ($data['statusPerkawinan_warga']) == 0 ? 'Tidak' : 'Iya' ?></td>
          <td class="col-1"><?php echo ($data['hubunganKeluarga_warga'] == 1) ? 'Kepala Keluarga' : (($data['hubunganKeluarga_warga'] == 2) ? 'Istri' : (($data['hubunganKeluarga_warga'] == 3) ? 'Anak' : ((($data['hubunganKeluarga_warga'] == 4) ? 'Lainnya' : 'Data Error')))); ?></td>
          <td class="col-1"><?php echo ($data['pekerjaanKeluarga_warga'] == 1) ? 'Tidak/Belum Bekerja' : (($data['pekerjaanKeluarga_warga'] == 2) ? 'Petani' : (($data['pekerjaanKeluarga_warga'] == 3) ? 'Nelayan' : ((($data['pekerjaanKeluarga_warga'] == 4) ? 'Pedagang' : ((($data['pekerjaanKeluarga_warga'] == 5) ? 'Pejabat Negara' : ((($data['pekerjaanKeluarga_warga'] == 6) ? 'PNS/TNI/POLRI' : ((($data['pekerjaanKeluarga_warga'] == 7) ? 'Pegawai Swasta' : (($data['pekerjaanKeluarga_warga'] == 8) ? 'Wiraswasta' : (($data['pekerjaanKeluarga_warga'] == 9) ? 'Pensiunan': (($data['pekerjaanKeluarga_warga'] == 10) ? 'Pekerja Lepas' : 'Data Error'))))))))))))); ?></td>
          <td class="col-1"><?php echo ($data['pendidikan_warga'] == 1) ? 'Tidak/Belum Sekolah' : (($data['pendidikan_warga'] == 2) ? 'Tdk Tamat SD/Sederajat' : (($data['pendidikan_warga'] == 3) ? 'Masih SD/Sederajat' : ((($data['pendidikan_warga'] == 4) ? 'Tamat SD/Sederajat' : ((($data['pendidikan_warga'] == 5) ? 'Masih SLTP/Sederajat' : ((($data['pendidikan_warga'] == 6) ? 'Tamat SLTP/Sederajat' : ((($data['pendidikan_warga'] == 7) ? 'Masih SLTA/Sederajat' : (($data['pendidikan_warga'] == 8) ? 'Tamat SLTA/Sederajat' : (($data['pendidikan_warga'] == 9) ? 'Masih PT/Sederajat': (($data['pendidikan_warga'] == 10) ? 'Tamat PT/Sederajat' : 'Data Error'))))))))))))); ?></td>
          <td class="col-1"><?php echo ($data['kepemilikanRumah_warga']) == 0 ? 'Tidak' : 'Iya' ?></td>
          <td class="col-1"><?php echo ($data['keberadaan_anggota_keluarga_warga']) == 0 ? 'Tidak' : 'Iya' ?></td>
          <td class="col-1"><?php echo ($data['kepemilikan_akta_kelahiran_warga']) == 0 ? 'Tidak' : 'Iya' ?></td>
          <td class="col-1"><?php echo ($data['kepesertaan_jkn_warga']) == 0 ? 'Tidak' : 'Iya' ?></td>
          <!--  -->
          <td class="col-1"><a href="edit_sensus.php?id_warga=<?= $data['id_warga'] ?>"><button
                class="btn btn-outline-primary">Edit</button></a></td>
          <td class="col-1"><a href="delete_sensus.php?id_warga=<?= $data['id_warga'] ?>"><button
                class="btn btn-outline-danger">Delete</button></a></td>
        </tr>
      </tbody>
    <?php endforeach ?>
  </table>
</div>
<!-- table -->
<td><a href="read_kartuKeluarga.php"><button class="btn btn-outline-warning">Back</button></a></td>
</body>
<br>
<br>
<?php include "template/footer.php" ?>

</html>