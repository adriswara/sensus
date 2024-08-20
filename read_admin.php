<?php include "template/header.php" ?>

<?php 
if (!isset($_SESSION['login'])) {
    // echo $_SESSION['login'];
    echo "<script>alert('Please login first :');window.location.replace('login.php');</script>";
}
?>
<p><a href="add_admin.php"> <button class="btn btn-success">Add admin</button></a></p> 

<!-- table -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Password</th>
      <th colspan="2" scope="col">Action</th>
    </tr>
  </thead>

  <?php
    include "connection.php";
    $query = "SELECT * FROM admin where is_delete = 0";
    $admin = mysqli_query($db_connection, $query);

    $i= 1;
    foreach ($admin as $data)  :
  ?>

  <tbody>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php echo $data['username']?></td>
      <td><?php echo $data['password']?></td>
      <td><?php echo ($data['admin_type'] == 2) ? 'Super Admin' : (($data['admin_type'] == 1) ? 'Web Admin' : 'Sensus Admin');?></td>
      <td><a href="edit_admin.php?id_admin=<?=$data['id_admin']?>"><button class="btn btn-outline-primary">Edit</button></a></td>
      <td><a href="delete_admin.php?id_admin=<?=$data['id_admin']?>"><button class="btn btn-outline-danger">Delete</button></a></td>
    </tr>
  </tbody>
  <?php endforeach ?>


</table>
<!-- table -->