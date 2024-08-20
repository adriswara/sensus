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
    <h3>Form Edit Artikel</h3>
    <form method="POST" action="update_artikel.php">
        <?php
        include "connection.php";
        $querry = "SELECT * FROM artikel WHERE id_artikel='$_GET[id_artikel]'";
        $pet = mysqli_query($db_connection, $querry);
        $data = mysqli_fetch_assoc($pet);
        ?>


        <table>
            <tr>
                <td>Judul</td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="judul_artikel"
                        value="<?= $data['judul_artikel']; ?>" required></td>
            </tr>
            <tr>
                <td>Topik</td>
                <td>
                    <select name="topik_artikel">
                        <option value="Panduan" <?= ($data['topik_artikel'] == 'Panduan') ? 'selected' : ''; ?>>Panduan
                        </option>
                        <option value="Berita" <?= ($data['topik_artikel'] == 'Berita') ? 'selected' : ''; ?>>Berita
                        </option>
                        <option value="Profil" <?= ($data['topik_artikel'] == 'Profil') ? 'selected' : ''; ?>>Profil
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <!-- <td>Isi</td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="area" name="isi_artikel" value="" required></td> -->
                <br>
                <td>
                    <p><label>Isi Artikel</label></p>
                </td>
                <td><textarea style="border-width: 1px; border-color: black;" name="isi_artikel" rows="4" cols="50"
                        value="<?= $data['isi_artikel']; ?>"> <?= $data['isi_artikel']; ?> </textarea></td>
                <br>
            </tr>


            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="id_artikel" value="<?= $data['id_artikel'] ?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_artikel.php">CANCEL</a></p>
</body>
<?php include "template/footer.php"  ?>
</html>