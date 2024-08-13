<?php include "template/header.php" ?>

<?php
if (!isset($_SESSION['login'])) {
  // echo $_SESSION['login'];
  echo "<script>alert('Please login first :');window.location.replace('login.php');</script>";
}
?>
<p><a href="add_artikel.php"><button class="btn btn-success">Add Artikel</button></a></p>

<!-- table -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Judul </th>
      <th scope="col">Topik</th>
      <th scope="col">Isi</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Foto Artikel</th>


      <th colspan="2" scope="col">Action</th>
    </tr>
  </thead>

  <?php
  include "connection.php";
  $query = "SELECT * FROM artikel";
  $artikel = mysqli_query($db_connection, $query);

  $i = 1;
  foreach ($artikel as $data):
    ?>

    <tbody>
      <tr>
        <th scope="row"><?php echo $i++; ?></th>
        <td><?php echo $data['judul_artikel'] ?></td>
        <td><?php echo $data['topik_artikel'] ?></td>
        <td><?php echo $data['isi_artikel'] ?></td>
        <td><?php echo $data['tanggal_artikel'] ?></td>

        <!--  -->
        <td ><img src="img/<?= $data['display_artikel']; ?>" width="50" height="50" alt=""><br>
          <a href="display_artikel.php?id=<?= $data['id_artikel'] ?>">Change Photo</a>
        </td>
        <!--  -->
        <td><a href="edit_artikel.php?id_artikel=<?= $data['id_artikel'] ?>"><button class="btn btn-outline-primary">Edit</button></a></td>
        <td><a href="delete_artikel.php?id_artikel=<?= $data['id_artikel'] ?>"><button class="btn btn-outline-danger">Delete</button></a></td>
      </tr>
    </tbody>
  <?php endforeach ?>


</table>
<!-- table -->
</body>

</html>