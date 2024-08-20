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
        $pet = mysqli_query($db_connection, $querry);
        $data = mysqli_fetch_assoc($pet);
        ?>


        <table>
            <tr>
                <td>Nama</td>
                <td><input style="border-width: 1px; border-color: black;" type="text" name="nama_warga"
                        value="<?= $data['nama_warga'] ?>" required></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input style="border-width: 1px; border-color: black;" type="number" name="umur_warga"
                        value="<?= $data['umur_warga'] ?>" required>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="kelamin_warga">
                        <option value="1" <?= ($data['kelamin_warga'] == '1') ? 'selected' : ''; ?>>Laki Laki
                        </option>
                        <option value="2" <?= ($data['kelamin_warga'] == '2') ? 'selected' : ''; ?>>Perempuan
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nomor Induk Kartu Keluarga</td>
                <td><input style="border-width: 1px; border-color: black;" type="text" name="nik_kartuKeluarga_warga"
                        value="<?= $data['nik_kartuKeluarga_warga'] ?>" readonly="readonly" required><?php ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input style="border-width: 1px; border-color: black;" type="text" name="alamat_warga"
                        value="<?= $data['alamat_warga'] ?>" required>
                </td>
            </tr>
            <tr>
                <td>RT</td>
                <td><input style="border-width: 1px; border-color: black;" type="number" name="rt_warga"
                        value="<?= $data['rt_warga'] ?>" required></td>
            </tr>
            <tr>
                <td>RW</td>
                <td><input style="border-width: 1px; border-color: black;" type="number" name="rw_warga"
                        value="<?= $data['rw_warga'] ?>" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input style="border-width: 1px; border-color: black;" type="date" name="tglLahir_warga"
                        value="<?= $data['tglLahir_warga'] ?>" required>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input style="border-width: 1px; border-color: black;" type="text" name="tempatLahir_warga"
                        value="<?= $data['tempatLahir_warga'] ?>" required></td>
            </tr>
            <tr>
                <td>Status Perkawinan Warga</td>
                <td>
                    <select name="statusPerkawinan_warga">
                        <option value="1" <?= ($data['statusPerkawinan_warga'] == '1') ? 'selected' : ''; ?>>Belum Kawin
                        </option>
                        <option value="2" <?= ($data['statusPerkawinan_warga'] == '2') ? 'selected' : ''; ?>>Kawin
                        </option>
                        <option value="3" <?= ($data['statusPerkawinan_warga'] == '3') ? 'selected' : ''; ?>>Cerai Hidup
                        </option>
                        <option value="4" <?= ($data['statusPerkawinan_warga'] == '4') ? 'selected' : ''; ?>>Cerai Mati
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kepemilikan Akta Kelahiran Warga</td>
                <td>
                    <select name="kepemilikan_akta_kelahiran_warga">
                        <option value="1" <?= ($data['kepemilikan_akta_kelahiran_warga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="2" <?= ($data['kepemilikan_akta_kelahiran_warga'] == '2') ? 'selected' : ''; ?>>Tidak
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hubungan Dengan Kepala Keluarga</td>
                <td>
                    <select name="hubunganKeluarga_warga">
                        <option value="1" <?= ($data['hubunganKeluarga_warga'] == '1') ? 'selected' : ''; ?>>Kepala Keluarga
                        </option>
                        <option value="2" <?= ($data['hubunganKeluarga_warga'] == '2') ? 'selected' : ''; ?>>Istri
                        </option>
                        <option value="3" <?= ($data['hubunganKeluarga_warga'] == '3') ? 'selected' : ''; ?>>Anak
                        </option>
                        <option value="4" <?= ($data['hubunganKeluarga_warga'] == '4') ? 'selected' : ''; ?>>Lainnya
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <select name="agama_warga">
                        <option value="1" <?= ($data['agama_warga'] == '1') ? 'selected' : ''; ?>>Islam
                        </option>
                        <option value="2" <?= ($data['agama_warga'] == '2') ? 'selected' : ''; ?>>Kristen
                        </option>
                        <option value="3" <?= ($data['agama_warga'] == '3') ? 'selected' : ''; ?>>Katholik
                        </option>
                        <option value="4" <?= ($data['agama_warga'] == '4') ? 'selected' : ''; ?>>Hindu
                        </option>
                        <option value="5" <?= ($data['agama_warga'] == '5') ? 'selected' : ''; ?>>Budha
                        </option>
                        <option value="6" <?= ($data['agama_warga'] == '6') ? 'selected' : ''; ?>>Khonghucu
                        </option>
                        <option value="7" <?= ($data['agama_warga'] == '7') ? 'selected' : ''; ?>>Penghayat Kepercayaan
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pekerjaan Keluarga</td>
                <td>
                    <select name="pekerjaanKeluarga_warga">
                        <option value="1" <?= ($data['pekerjaanKeluarga_warga'] == '1') ? 'selected' : ''; ?>>Tidak / Belum Bekerja
                        </option>
                        <option value="2" <?= ($data['pekerjaanKeluarga_warga'] == '2') ? 'selected' : ''; ?>>Petani
                        </option>
                        <option value="3" <?= ($data['pekerjaanKeluarga_warga'] == '3') ? 'selected' : ''; ?>>Nemayan
                        </option>
                        <option value="4" <?= ($data['pekerjaanKeluarga_warga'] == '4') ? 'selected' : ''; ?>>Pedagang
                        </option>
                        <option value="5" <?= ($data['pekerjaanKeluarga_warga'] == '5') ? 'selected' : ''; ?>>Pejabat Negara
                        </option>
                        <option value="6" <?= ($data['pekerjaanKeluarga_warga'] == '6') ? 'selected' : ''; ?>>PNS/TNI/POLRI
                        </option>
                        <option value="7" <?= ($data['pekerjaanKeluarga_warga'] == '7') ? 'selected' : ''; ?>>Pegawai Swasta
                        </option>
                        <option value="8" <?= ($data['pekerjaanKeluarga_warga'] == '8') ? 'selected' : ''; ?>>Wiraswasta
                        </option>
                        <option value="9" <?= ($data['pekerjaanKeluarga_warga'] == '9') ? 'selected' : ''; ?>>Pensiunan
                        </option>
                        <option value="10" <?= ($data['pekerjaanKeluarga_warga'] == '10') ? 'selected' : ''; ?>>Pekerja Lepas
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>
                    <select name="pendidikan_warga">
                        <option value="1" <?= ($data['pendidikan_warga'] == '1') ? 'selected' : ''; ?>>Tidak/Belum Sekolah
                        </option>
                        <option value="2" <?= ($data['pendidikan_warga'] == '2') ? 'selected' : ''; ?>>Tdk Tamat SD/Sederajat
                        </option>
                        <option value="3" <?= ($data['pendidikan_warga'] == '3') ? 'selected' : ''; ?>>Masih SD/Sederajat
                        </option>
                        <option value="4" <?= ($data['pendidikan_warga'] == '4') ? 'selected' : ''; ?>>Tamat SD/Sederajat
                        </option>
                        <option value="5" <?= ($data['pendidikan_warga'] == '5') ? 'selected' : ''; ?>>Masih SLTP/Sederajat
                        </option>
                        <option value="6" <?= ($data['pendidikan_warga'] == '6') ? 'selected' : ''; ?>>Tamat SLTP/Sederajat
                        </option>
                        <option value="7" <?= ($data['pendidikan_warga'] == '7') ? 'selected' : ''; ?>>Masih SLTA/Sederajat
                        </option>
                        <option value="8" <?= ($data['pendidikan_warga'] == '8') ? 'selected' : ''; ?>>Tamat SLTA/Sederajat
                        </option>
                        <option value="9" <?= ($data['pendidikan_warga'] == '9') ? 'selected' : ''; ?>>Masih PT/Sederajat
                        </option>
                        <option value="10" <?= ($data['pendidikan_warga'] == '10') ? 'selected' : ''; ?>>Tamat PT/Sederajat
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kepesertaan Jkn / Asuransi Kesehatan</td>
                <td>
                    <select name="kepesertaan_jkn_warga">
                        <option value="1" <?= ($data['kepesertaan_jkn_warga'] == '1') ? 'selected' : ''; ?>>BPJS-PBI/Jamkesmas/Jamkesda
                        </option>
                        <option value="2" <?= ($data['kepesertaan_jkn_warga'] == '2') ? 'selected' : ''; ?>>BPJS-Non PBI
                        </option>
                        <option value="3" <?= ($data['kepesertaan_jkn_warga'] == '3') ? 'selected' : ''; ?>>Swasta
                        </option>
                        <option value="4" <?= ($data['kepesertaan_jkn_warga'] == '4') ? 'selected' : ''; ?>>Tidak Memiliki
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Keberadaan Anggota Keluarga</td>
                <td>
                    <select name="keberadaan_anggota_keluarga_warga">
                        <option value="1" <?= ($data['keberadaan_anggota_keluarga_warga'] == '1') ? 'selected' : ''; ?>>Di Dalam Rumah
                        </option>
                        <option value="2" <?= ($data['keberadaan_anggota_keluarga_warga'] == '2') ? 'selected' : ''; ?>>Di Luar Rumah
                        </option>
                        <option value="3" <?= ($data['keberadaan_anggota_keluarga_warga'] == '3') ? 'selected' : ''; ?>>Di Luar Negeri
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kepemilikan Rumah</td>
                <td>
                    <select name="kepemilikanRumah_warga">
                        <option value="1" <?= ($data['kepemilikanRumah_warga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="2" <?= ($data['kepemilikanRumah_warga'] == '2') ? 'selected' : ''; ?>>Tidak
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input style="border-width: 1px; border-color: black;" type="submit" name="save" value="SAVE">
                    <input style="border-width: 1px; border-color: black;" type="reset" name="reset" value="RESET">
                    <input style="border-width: 1px; border-color: black;" type="hidden" name="id_warga"
                        value="<?= $data['id_warga'] ?>">
                </td>
            </tr>
        </table>

    </form>
    <p><a href="read_kartuKeluarga.php">CANCEL</a></p>
</body>
<?php include "template/footer.php"  ?>

</html>