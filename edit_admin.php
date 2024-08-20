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
    <h1>SIPEKA</h1>
    <h3>Form Edit Admin</h3>
    <form method="POST" action="update_admin.php">
        <?php
        include "connection.php";
        $querry = "SELECT * FROM admin WHERE id_admin='$_GET[id_admin]'";
        $pet = mysqli_query($db_connection, $querry);
        $data = mysqli_fetch_assoc($pet);
        ?>


        <table>
            <tr>
                <td>username</td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="username" value="<?= $data['username']; ?>"
                        required></td>
            </tr>
            <tr>
                <!-- <td>Isi</td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="area" name="isi_artikel" value="" required></td> -->
                <br>
                <td>
                    <p><label>Password</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="password" value="<?= $data['password']; ?>"
                        required></td>
                <br>
            </tr>
            <tr>
                <td>Admin Type</td>
                <td>
                    <select name="admin_type">
                        <option value="0" <?= ($data['admin_type'] == '0') ? 'selected' : ''; ?> >Admin Sensus
                        </option>
                        <option value="1" <?= ($data['admin_type'] == '1') ? 'selected' : ''; ?>>Admin Situs
                        </option>
                        <option value="2" <?= ($data['admin_type'] == '2') ? 'selected' : ''; ?>>Super Admin
                        </option>
                    </select>
                </td>
            </tr>


            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="id_admin" value="<?= $data['id_admin'] ?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_admin.php">CANCEL</a></p>
</body>
<?php include "template/footer.php"  ?>
</html>