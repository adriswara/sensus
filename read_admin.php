<?php include "template/header.php" ?>

<?php
if (!isset($_SESSION['login'])) {
  // echo $_SESSION['login'];
  echo "<script>alert('Please login first :');window.location.replace('login.php');</script>";
}
?>
<p class="mt-10"><a href="add_admin.php"> <button class="btn btn-success">Add admin</button></a></p>

<!-- table -->
<div class="table-responsive">

  <table class="table table-sm mt-10 mb-80">
    <thead>
      <tr class="table-success ">
        <th class="col-1" scope="col">#</th>
        <th class="col-1" scope="col">Nama</th>
        <th class="col-1" scope="col">Password</th>
        <th class="col-1" scope="col">Admin Type</th>
        <th class="col-1" scope="col"></th>
        <th class="col-1" scope="col"></th>


      </tr>
    </thead>

    <?php
    include "connection.php";
    $query = "SELECT * FROM admin where is_delete = 0";
    $admin = mysqli_query($db_connection, $query);

    $i = 1;
    foreach ($admin as $data):
      ?>

      <tbody>
        <tr class="table-light ">
          <th class="col-1" scope="row"><?php echo $i++; ?></th>
          <td class="col-1"><?php echo $data['username'] ?></td>
          <td class="col-1"><?php echo $data['password'] ?></td>
          <td class="col-1">
            <?php echo ($data['admin_type'] == 2) ? 'Super Admin' : (($data['admin_type'] == 1) ? 'Web Admin' : 'Sensus Admin'); ?>
          </td>
          <td class="col-1"><a href="edit_admin.php?id_admin=<?= $data['id_admin'] ?>"><button
                class="btn btn-outline-primary">Edit</button></a></td>
          <td class="col-1"><a href="delete_admin.php?id_admin=<?= $data['id_admin'] ?>"><button
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