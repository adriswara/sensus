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
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Umur</th>
      <th scope="col">Kelamin</th>
      <th scope="col">Nomor Induk Kartu Keluarga</th>
      <th scope="col">Alamat</th>
      <th scope="col">RT</th>
      <th scope="col">RW</th>
      <th scope="col">Tanggal Lahir Warga</th>
      <th scope="col">Tempat Lahir Warga</th>
      <th scope="col">Agama</th>
      <th scope="col">Status Perkawinan</th>
      <th scope="col">Hubungan Keluarga</th>
      <th scope="col">Pekerjaan Keluarga</th>
      <th scope="col">Pendidikan</th>
      <th scope="col">Kepemilikan Rumah</th>
      <th>nomor anggota</th>
      <th>keberadaan anggota keluarga</th>
      <th>kepemilikan akte kelahiran</th>
      <th>kepesertaan jkn warga</th>
      <th colspan="2" scope="col">Action</th>
    </tr>
  </thead>

  <?php
  include "connection.php";
  $query = "SELECT * FROM warga where nik_kartuKeluarga_warga = '$_GET[nik_keluarga]' ";
  $warga = mysqli_query($db_connection, $query);


  $i = 1;
  foreach ($warga as $data):
    ?>

    <tbody>
      <tr>
        <!--  -->
        <th scope="row"><?php echo $i++; ?></th>
        <td><?php echo $data['nama_warga'] ?></td>
        <td><?php echo $data['umur_warga'] ?></td>
        <td><?php echo ($data['kelamin_warga']) == 1? 'Laki-Laki' : 'Perempuan' ?></td>
        <td><?php echo $data['nik_kartuKeluarga_warga'] ?></td>
        <td><?php echo $data['alamat_warga'] ?></td>
        <td><?php echo $data['rt_warga'] ?></td>
        <td><?php echo $data['rw_warga'] ?></td>
        <td><?php echo $data['tglLahir_warga'] ?></td>
        <td><?php echo $data['tempatLahir_warga'] ?></td>
        <td><?php echo $data['agama_warga'] ?></td>
        <td><?php echo ($data['statusPerkawinan_warga']) == 0 ? 'Tidak' : 'Iya' ?></td>
        <td><?php echo $data['hubunganKeluarga_warga'] ?></td>
        <td><?php echo $data['pekerjaanKeluarga_warga'] ?></td>
        <td><?php echo $data['pendidikan_warga'] ?></td>
        <td><?php echo ($data['kepemilikanRumah_warga']) == 0 ? 'Tidak' : 'Iya' ?></td>
        <td><?php echo $data['hubunganKeluarga_warga'] ?></td>
        <td><?php echo ($data['keberadaan_anggota_keluarga_warga']) == 0 ? 'Tidak' : 'Iya' ?></td>
        <td><?php echo ($data['kepemilikan_akta_kelahiran_warga']) == 0 ? 'Tidak' : 'Iya' ?></td>
        <td><?php echo ($data['kepesertaan_jkn_warga']) == 0 ? 'Tidak' : 'Iya' ?></td>
        <!--  -->
        <td><a href="edit_sensus.php?id_warga=<?= $data['id_warga'] ?>"><button
              class="btn btn-outline-primary">Edit</button></a></td>
        <td><a href="delete_sensus.php?id_warga=<?= $data['id_warga'] ?>"><button
              class="btn btn-outline-danger">Delete</button></a></td>
      </tr>
    </tbody>
  <?php endforeach ?>
</table>
<!-- table -->
<td><a href="read_kartuKeluarga.php"><button class="btn btn-outline-warning">Back</button></a></td>
</body>
<br>
<br>
<?php include "template/footer.php" ?>

</html>