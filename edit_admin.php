<?php include "template/header.php" ?>

<?php
if (!isset($_SESSION['login'])) {
    // echo $_SESSION['login'];
    echo "<script>alert('Please login first :');window.location.replace('login.php');</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIPEKA</title>
</head>
<!-- <?php
//     session_start();
//     if(!isset($_SESSION['login'])) {
// 	    echo "<script>alert('Please Login First !');window.location.replace('index.php');</script>";
// }
?> -->


<body>
    <div class="ml-52 mr-96 mt-32 mb-60">
        <h1 class="mb-4">Form Edit Admin</h1>
        <form class="form-group" method="POST" action="update_admin.php">
            <?php
            include "connection.php";
            $querry = "SELECT * FROM admin WHERE id_admin='$_GET[id_admin]'";
            $pet = mysqli_query($db_connection, $querry);
            $data = mysqli_fetch_assoc($pet);
            ?>


            <label class="mb-3" for="username">Username</label>
            <input id="username" class="form-control" style="border-width: 1px; border-color: black;" type="text"
                name="username" value="<?= $data['username']; ?>" required>


            <!-- Isi
                <input class="" style="border-width: 1px; border-color: black;" type="area" name="isi_artikel" value="" required> -->
            <br>

            <label class="mb-3" for="password">Password</label>

            <input id="password" class="form-control" style="border-width: 1px; border-color: black;" type="text"
                name="password" value="<?= $data['password']; ?>" required>
            <br>


            <label class="mr-5" for="admin_type">Admin Type</label>

            <select id="admin_type" name="admin_type">
                <option value="0" <?= ($data['admin_type'] == '0') ? 'selected' : ''; ?>>Admin Sensus
                </option>
                <option value="1" <?= ($data['admin_type'] == '1') ? 'selected' : ''; ?>>Admin Situs
                </option>
                <option value="2" <?= ($data['admin_type'] == '2') ? 'selected' : ''; ?>>Super Admin
                </option>
            </select>

            <br>
            <input class="ml-96" type="submit" name="save" value="SAVE">
            <input class="ml-10" type="reset" name="reset" value="RESET">
            <input type="hidden" name="id_admin" value="<?= $data['id_admin'] ?>">



        </form>
        <p><a href="read_admin.php">CANCEL</a></p>
    </div>

    <nav class="bg-gray-800">

        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-1 items-center justify-between">
                <!-- leave it blank -->
            </div>
        </div>

    </nav>

</body>
<?php include "template/footer.php" ?>

</html>