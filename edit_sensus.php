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
        <h1 class="mb-4">Form Edit Sensus</h1>
        <form class="form-grup" method="POST" action="update_sensus.php">
            <?php
            include "connection.php";
            $querry = "SELECT * FROM warga WHERE id_warga='$_GET[id_warga]'";
            $pet = mysqli_query($db_connection, $querry);
            $data = mysqli_fetch_assoc($pet);
            ?>

            <br><label class="mb-3">Nama</Label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="text" name="nama_warga"
                value="<?= $data['nama_warga'] ?>" required>


            <br><label class="mb-3">Umur</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="number" name="umur_warga"
                value="<?= $data['umur_warga'] ?>" required>



            <br><label class="mr-5 mb-3">Jenis Kelamin</label>

            <select name="kelamin_warga">
                <option value="1" <?= ($data['kelamin_warga'] == '1') ? 'selected' : ''; ?>>Laki Laki
                </option>
                <option value="2" <?= ($data['kelamin_warga'] == '2') ? 'selected' : ''; ?>>Perempuan
                </option>
            </select>



            <br><label class="mb-3">Nomor Induk Kartu Keluarga</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="text"
                name="nik_kartuKeluarga_warga" value="<?= $data['nik_kartuKeluarga_warga'] ?>" readonly="readonly"
                required><?php ?>


            <br><label class="mb-3">Alamat</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="text" name="alamat_warga"
                value="<?= $data['alamat_warga'] ?>" required>



            <br><label class="mb-3">RT</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="number" name="rt_warga"
                value="<?= $data['rt_warga'] ?>" required>


            <br><label class="mb-3">RW</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="number" name="rw_warga"
                value="<?= $data['rw_warga'] ?>" required>


            <br><label class="mb-3">Tanggal Lahir</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="date"
                name="tglLahir_warga" value="<?= $data['tglLahir_warga'] ?>" required>



            <br><label class="mb-3">Tempat Lahir</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="text"
                name="tempatLahir_warga" value="<?= $data['tempatLahir_warga'] ?>" required>


            <br><label class="mr-5 mb-3">Status Perkawinan Warga</label>

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



            <br><label class="mb-3">Kepemilikan Akta Kelahiran Warga</label>

            <select name="kepemilikan_akta_kelahiran_warga">
                <option value="1" <?= ($data['kepemilikan_akta_kelahiran_warga'] == '1') ? 'selected' : ''; ?>>Ya
                </option>
                <option value="2" <?= ($data['kepemilikan_akta_kelahiran_warga'] == '2') ? 'selected' : ''; ?>>Tidak
                </option>
            </select>



            <br><label class="mr-5 mb-3">Hubungan Dengan Kepala Keluarga</label>

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



            <br><label class="mr-5 mb-3">Agama</label>

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



            <br><label class="mr-5 mb-3">Pekerjaan Keluarga</label>

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



            <br><label class="mr-5 mb-3">Pendidikan</label>

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



            <br><label class="mr-5 mb-3">Kepesertaan Jkn / Asuransi Kesehatan</label>

            <select name="kepesertaan_jkn_warga">
                <option value="1" <?= ($data['kepesertaan_jkn_warga'] == '1') ? 'selected' : ''; ?>>
                    BPJS-PBI/Jamkesmas/Jamkesda
                </option>
                <option value="2" <?= ($data['kepesertaan_jkn_warga'] == '2') ? 'selected' : ''; ?>>BPJS-Non PBI
                </option>
                <option value="3" <?= ($data['kepesertaan_jkn_warga'] == '3') ? 'selected' : ''; ?>>Swasta
                </option>
                <option value="4" <?= ($data['kepesertaan_jkn_warga'] == '4') ? 'selected' : ''; ?>>Tidak Memiliki
                </option>
            </select>



            <br><label class="mr-5 mb-3">Keberadaan Anggota Keluarga</label>

            <select name="keberadaan_anggota_keluarga_warga">
                <option value="1" <?= ($data['keberadaan_anggota_keluarga_warga'] == '1') ? 'selected' : ''; ?>>Di Dalam
                    Rumah
                </option>
                <option value="2" <?= ($data['keberadaan_anggota_keluarga_warga'] == '2') ? 'selected' : ''; ?>>Di Luar
                    Rumah
                </option>
                <option value="3" <?= ($data['keberadaan_anggota_keluarga_warga'] == '3') ? 'selected' : ''; ?>>Di Luar
                    Negeri
                </option>
            </select>



            <br><label class="mr-5 mb-3">Kepemilikan Rumah</label>

            <select name="kepemilikanRumah_warga">
                <option value="1" <?= ($data['kepemilikanRumah_warga'] == '1') ? 'selected' : ''; ?>>Ya
                </option>
                <option value="2" <?= ($data['kepemilikanRumah_warga'] == '2') ? 'selected' : ''; ?>>Tidak
                </option>
            </select>





            <input class="ml-96" type="submit" name="save" value="SAVE">
            <input class="ml-10" type="reset" name="reset" value="RESET">
            <input class="" style="border-width: 1px; border-color: black;" type="hidden" name="id_warga"
                value="<?= $data['id_warga'] ?>">




        </form>
        <p><a href="read_kartuKeluarga.php">CANCEL</a></p>
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