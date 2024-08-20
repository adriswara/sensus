<?php include "template/header.php" ?>

<?php
if (!isset($_SESSION['login'])) {
  // echo $_SESSION['login'];
  echo "<script>alert('Please login first :');window.location.replace('login.php');</script>";
}
?>
<p class="mt-10"><a href="add_artikel.php"><button class="btn btn-success">Add Artikel</button></a></p>

<!-- table -->
<div class="table-responsive">
  <table class="table table-sm mt-10 mb-80">
    <thead>
      <tr class="table-success d-flex ">
        <th class="col-1" scope="col">#</th>
        <th class="col-1" scope="col">Judul </th>
        <th class="col-1" scope="col">Topik</th>
        <th class="col-10" scope="col">Isi</th>
        <th class="col-1" scope="col">Tanggal</th>
        <th class="col-1" scope="col">Foto Artikel</th>


        <th class="col-1" scope="col">Action</th>
        <th class="col-1" scope="col">Action</th>

      </tr>
    </thead>

    <?php
    include "connection.php";
    $query = "SELECT * FROM artikel where is_delete = 0";
    $artikel = mysqli_query($db_connection, $query);

    $i = 1;
    foreach ($artikel as $data):
      ?>

      <tbody>
        <tr class="table-light d-flex">
          <th class="col-1" scope="row"><?php echo $i++; ?></th>
          <td class="col-1"><?php echo $data['judul_artikel'] ?></td>
          <td class="col-1"><?php echo $data['topik_artikel'] ?></td>
          <td class="col-10"><?php echo $data['isi_artikel'] ?></td>
          <td class="col-1"><?php echo $data['tanggal_artikel'] ?></td>

          <!--  -->
          <td class="col-1"><img src="img/<?= $data['display_artikel']; ?>" width="50" height="50" alt=""><br>
            <a href="display_artikel.php?id=<?= $data['id_artikel'] ?>">Change Photo</a>
          </td>
          <!--  -->
          <td class="col-1"><a href="edit_artikel.php?id_artikel=<?= $data['id_artikel'] ?>"><button
                class="btn btn-outline-primary">Edit</button></a></td>
          <td class="col-1"><a href="delete_artikel.php?id_artikel=<?= $data['id_artikel'] ?>"><button
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