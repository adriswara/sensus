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
        <th class="col-1">nomor anggota</th>
        <th class="col-1">keberadaan anggota keluarga</th>
        <th class="col-1">kepemilikan akte kelahiran</th>
        <th class="col-1">kepesertaan jkn warga</th>
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
          <td class="col-1"><?php echo $data['agama_warga'] ?></td>
          <td class="col-1"><?php echo ($data['statusPerkawinan_warga']) == 0 ? 'Tidak' : 'Iya' ?></td>
          <td class="col-1"><?php echo $data['hubunganKeluarga_warga'] ?></td>
          <td class="col-1"><?php echo $data['pekerjaanKeluarga_warga'] ?></td>
          <td class="col-1"><?php echo $data['pendidikan_warga'] ?></td>
          <td class="col-1"><?php echo ($data['kepemilikanRumah_warga']) == 0 ? 'Tidak' : 'Iya' ?></td>
          <td class="col-1"><?php echo $data['hubunganKeluarga_warga'] ?></td>
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