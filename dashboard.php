<?php include "template/header.php" ?>

<?php
if (!isset($_SESSION['login'])) {
  // echo $_SESSION['login'];
  echo "<script>alert('Please login first :');window.location.replace('login.php');</script>";
}
?>
<?php
include "connection.php";
$admin = "SELECT * FROM `admin` where username = '$_SESSION[username]'";
$dataAdmin = mysqli_query($db_connection, $admin);
foreach ($dataAdmin as $data):
  ?>
  <!-- Welcome -->
  <h1 class="mt-5 mb-5"> Welome MR <?php echo $_SESSION['username'] ?>   <?php echo $data['username'] ?> </h1>
<?php endforeach ?>
<!-- Welcome -->
<!-- Dashboard -->

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">

  <?php
  if (($data['admin_type'] != 0)) {
    echo "
  <div class='col'>
    <div class='card shadow-sm'>
      <a href='read_artikel.php'> <img class='bd-placeholder-img card-img-top' width='100%' height='225'
          src='img/article.png' preserveAspectRatio='xMidYMid slice' focusable='false'>
        <rect width='100%' height='100%' fill='#55595c' /></img>
      </a>
      <div class='card-body'>
        <p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content.
          This content is a little bit longer.</p>
        <div class='d-flex justify-content-between align-items-center'>
          <div class='btn-group'>
            <a href='read_artikel.php'><button type='button' class='btn btn-sm btn-outline-secondary'>Artikel
                List</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>";
  }
  ?>

  <?php
  if (($data['admin_type'] != 1)) {
    echo " <div class='col'>
    <div class='card shadow-sm'>
      <a href='read_kartuKeluarga.php'> <img class='bd-placeholder-img card-img-top' width='100%' height='225'
          src='img/citizen.png' preserveAspectRatio='xMidYMid slice' focusable='false'>
        <rect width='100%' height='100%' fill='#55595c' /></img>
      </a>
      <div class='card-body'>
        <p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content.
          This content is a little bit longer.</p>
        <div class='d-flex justify-content-between align-items-center'>
          <div class='btn-group'>
            <a href='read_kartuKeluarga.php'><button type='button' class='btn btn-sm btn-outline-secondary'>Sensus
                List</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>";
  }
  ?>



  <?php
  if (($data['admin_type'] == 2)) {
    echo "<div class='col'>
    <div class='card shadow-sm'>
      <a href='read_admin.php'><img class='bd-placeholder-img card-img-top' width='100%' height='225'
          src='img/admin2.png' role='img' aria-label='Placeholder: ' preserveAspectRatio='xMidYMid slice'
          focusable='false'>
        <rect width='100%' height='100%' fill='#55595c' /></img>
      </a>
      <div class='card-body'>
        <p class='card-text'>This is a wider card with supporting text below as a natural lead-in to additional content.
          This content is a little bit longer.</p>
        <div class='d-flex justify-content-between align-items-center'>
          <div class='btn-group'>
            <a href='read_admin.php'><button type='button' class='btn btn-sm btn-outline-secondary'>Admin
                Setting</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>";
  }
  ?>

</div>

<!-- Dashboard -->

<nav class="bg-gray-800">

  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <!-- leave it blank -->
    </div>
  </div>

</nav>
<?php include "template/footer.php" ?>
</body>

</html>