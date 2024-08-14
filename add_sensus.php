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
    <title> SIPEKA</title>
</head>
<!-- 
<?php
//     session_start();
//     if(!isset($_SESSION['login'])) {
// 	    echo "<script>alert('Please Login First !');window.location.replace('index.php');</script>";
// }
?> -->


<body>
    <h1>SIPEKA</h1>
    <h3>Form Penambahan Sensus</h3>
    <form method="POST" action="create_sensus.php">
        <table>
            <tr>
                <td>Nama</td>
                <td><input style="border-width: 1px; border-color: black;" type="text" name="nama_warga" required></td>
            </tr>
            <tr>
                <td>Umur</td>
                <td><input style="border-width: 1px; border-color: black;" type="number" name="umur_warga" required>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="kelamin_warga">
                        <option value="1">Laki Laki
                        </option>
                        <option value="2">Perempuan
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Nomor Induk Kartu Keluarga</td>
                <td><input style="border-width: 1px; border-color: black;" type="text" name="nik_kartuKeluarga_warga" value="<?= $_GET['nik_keluarga'] ?>" readonly="readonly"  required><?php ?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input style="border-width: 1px; border-color: black;" type="text" name="alamat_warga" required>
                </td>
            </tr>
            <tr>
                <td>RT</td>
                <td><input style="border-width: 1px; border-color: black;" type="number" name="rt_warga" required></td>
            </tr>
            <tr>
                <td>RW</td>
                <td><input style="border-width: 1px; border-color: black;" type="number" name="rw_warga" required></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td><input style="border-width: 1px; border-color: black;" type="date" name="tglLahir_warga" required>
                </td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input style="border-width: 1px; border-color: black;" type="text" name="tempatLahir_warga"
                        required></td>
            </tr>
            <tr>
                <td>Status Perkawinan Warga</td>
                <td>
                    <select name="statusPerkawinan_warga">
                        <option value="1">Belum Kawin
                        </option>
                        <option value="2">Kawin
                        </option>
                        <option value="3">Cerai Hidup
                        </option>
                        <option value="4">Cerai Mati
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kepemilikan Akta Kelahiran Warga</td>
                <td>
                    <select name="kepemilikan_akta_kelahiran_warga">
                        <option value="1">Ya
                        </option>
                        <option value="2">Tidak
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Hubungan Dengan Kepala Keluarga</td>
                <td>
                    <select name="hubunganKeluarga_warga">
                        <option value="1">Kepala Keluarga
                        </option>
                        <option value="2">Istri
                        </option>
                        <option value="3">Anak
                        </option>
                        <option value="4">Lainnya
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Agama</td>
                <td>
                    <select name="agama_warga">
                        <option value="1">Islam
                        </option>
                        <option value="2">Kristen
                        </option>
                        <option value="3">Katholik
                        </option>
                        <option value="4">Hindu
                        </option>
                        <option value="5">Budha
                        </option>
                        <option value="6">Khonghucu
                        </option>
                        <option value="7">Penghayat Kepercayaan
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pekerjaan Keluarga</td>
                <td>
                    <select name="pekerjaanKeluarga_warga">
                        <option value="1">Tidak / Belum Bekerja
                        </option>
                        <option value="2">Petani
                        </option>
                        <option value="3">Nemayan
                        </option>
                        <option value="4">Pedagang
                        </option>
                        <option value="5">Pejabat Negara
                        </option>
                        <option value="6">PNS/TNI/POLRI
                        </option>
                        <option value="7">Pegawai Swasta
                        </option>
                        <option value="8">Wiraswasta
                        </option>
                        <option value="9">Pensiunan
                        </option>
                        <option value="10">Pekerja Lepas
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Pendidikan</td>
                <td>
                    <select name="pendidikan_warga">
                        <option value="1">Tidak/Belum Sekolah
                        </option>
                        <option value="2">Tdk Tamat SD/Sederajat
                        </option>
                        <option value="3">Masih SD/Sederajat
                        </option>
                        <option value="4">Tamat SD/Sederajat
                        </option>
                        <option value="5">Masih SLTP/Sederajat
                        </option>
                        <option value="6">Tamat SLTP/Sederajat
                        </option>
                        <option value="7">Masih SLTA/Sederajat
                        </option>
                        <option value="8">Tamat SLTA/Sederajat
                        </option>
                        <option value="9">Masih PT/Sederajat
                        </option>
                        <option value="10">Tamat PT/Sederajat
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kepesertaan Jkn / Asuransi Kesehatan</td>
                <td>
                    <select name="kepesertaan_jkn_warga">
                        <option value="1">BPJS-PBI/Jamkesmas/Jamkesda
                        </option>
                        <option value="2">BPJS-Non PBI
                        </option>
                        <option value="3">Swasta
                        </option>
                        <option value="4">Tidak Memiliki
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Keberadaan Anggota Keluarga</td>
                <td>
                    <select name="keberadaan_anggota_keluarga_warga">
                        <option value="1">Di Dalam Rumah
                        </option>
                        <option value="2">Di Luar Rumah
                        </option>
                        <option value="3">Di Luar Negeri
                        </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Kepemilikan Rumah</td>
                <td>
                    <select name="kepemilikanRumah_warga">
                        <option value="1">Ya
                        </option>
                        <option value="2">Tidak
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
    <p><a href="read_sensus.php">CANCEL</a></p>
</body>

</html>