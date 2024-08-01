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
    <h3>Form Edit Sensus</h3>
    <form method="POST" action="update_sensus.php">
        <?php 
              include "connection.php";
              $querry = "SELECT * FROM warga WHERE id_warga='$_GET[id_warga]'";
              $pet=mysqli_query($db_connection,$querry);
              $data=mysqli_fetch_assoc($pet);
          ?>


        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama_warga" value="<?= $data['nama_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur_warga" value="<?= $data['umur_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="number" name="kelamin_warga" value="<?= $data['kelamin_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>Nomor Induk Kartu Keluarga</td>
                <td><input type="text" name="kartuKeluarga_warga" value="<?= $data['kartuKeluarga_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat_warga" value="<?= $data['alamat_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>RT</td>
                <td><input type="number" name="rt_warga" value="<?= $data['rt_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>RW</td>
                <td><input type="number" name="rw_warga" value="<?= $data['rw_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>NIK</td>
                <td><input type="text" name="nik_warga" value="<?= $data['nik_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tglLahir_warga" value="<?= $data['tglLahir_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="tempatLahir_warga" value="<?= $data['tempatLahir_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>Agama</td>
                <td><input type="text" name="agama_warga" value="<?= $data['agama_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>Status Perkawinan</td>
                <td><input type="number" name="statusPerkawinan_warga" value="<?= $data['statusPerkawinan_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>Hubungan Keluarga</td>
                <td><input type="text" name="hubunganKeluarga_warga" value="<?= $data['hubunganKeluarga_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>Pekerjaan Keluarga</td>
                <td><input type="text" name="pekerjaanKeluarga_warga" value="<?= $data['pekerjaanKeluarga_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td><input type="text" name="pendidikan_warga" value="<?= $data['pendidikan_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>Kepemilikan Rumah</td>
                <td><input type="number" name="kepemilikanRumah_warga" value="<?= $data['kepemilikanRumah_warga']; ?>" required></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan_warga" value="<?= $data['keterangan_warga']; ?>" required></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="id_warga" value="<?=$data['id_warga']?>">
                </td>
            </tr>
        </table>
    </form>
    <p><a href="read_sensus.php">CANCEL</a></p>
</body>

</html>