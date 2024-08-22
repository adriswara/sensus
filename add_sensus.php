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
    <div class="ml-52 mr-96 mt-32 mb-60">
        <h1 class="mb-4">Form Edit Sensus</h1>
        <form class="form-grup" method="POST" action="create_sensus.php">

            <br><label class="mb-3">Nama</Label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="text" name="nama_warga"
               required>


            <br><label class="mb-3">Umur</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="number" name="umur_warga"
                 required>



            <br><label class="mr-5 mb-3">Jenis Kelamin</label>

            <select name="kelamin_warga">
                <option value="1" >Laki Laki
                </option>
                <option value="2">Perempuan
                </option>
            </select>



            <br><label class="mb-3">Nomor Induk Kartu Keluarga</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="text"
                name="nik_kartuKeluarga_warga" value="<?= $_GET['nik_keluarga'] ?>" readonly="readonly"
                required><?php ?>


            <br><label class="mb-3">Alamat</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="text" name="alamat_warga"
                 required>



            <br><label class="mb-3">RT</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="number" name="rt_warga"
                required>


            <br><label class="mb-3">RW</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="number" name="rw_warga"
                 required>


            <br><label class="mb-3">Tanggal Lahir</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="date"
                name="tglLahir_warga"  required>



            <br><label class="mb-3">Tempat Lahir</label>
            <input class="form-control" style="border-width: 1px; border-color: black;" type="text"
                name="tempatLahir_warga" required>


            <br><label class="mr-5 mb-3">Status Perkawinan Warga</label>

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



            <br><label class="mb-3">Kepemilikan Akta Kelahiran Warga</label>

            <select name="kepemilikan_akta_kelahiran_warga">
                <option value="1" >Ya
                </option>
                <option value="2" >Tidak
                </option>
            </select>



            <br><label class="mr-5 mb-3">Hubungan Dengan Kepala Keluarga</label>

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



            <br><label class="mr-5 mb-3">Agama</label>

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



            <br><label class="mr-5 mb-3">Pekerjaan Keluarga</label>

            <select name="pekerjaanKeluarga_warga">
                <option value="1" >Tidak / Belum Bekerja
                </option>
                <option value="2" >Petani
                </option>
                <option value="3" >Nemayan
                </option>
                <option value="4" >Pedagang
                </option>
                <option value="5" >Pejabat Negara
                </option>
                <option value="6" >PNS/TNI/POLRI
                </option>
                <option value="7" >Pegawai Swasta
                </option>
                <option value="8" >Wiraswasta
                </option>
                <option value="9" >Pensiunan
                </option>
                <option value="10">Pekerja Lepas
                </option>
            </select>



            <br><label class="mr-5 mb-3">Pendidikan</label>

            <select name="pendidikan_warga">
                <option value="1" >Tidak/Belum Sekolah
                </option>
                <option value="2" >Tdk Tamat SD/Sederajat
                </option>
                <option value="3" >Masih SD/Sederajat
                </option>
                <option value="4" >Tamat SD/Sederajat
                </option>
                <option value="5" >Masih SLTP/Sederajat
                </option>
                <option value="6" >Tamat SLTP/Sederajat
                </option>
                <option value="7" >Masih SLTA/Sederajat
                </option>
                <option value="8" >Tamat SLTA/Sederajat
                </option>
                <option value="9" >Masih PT/Sederajat
                </option>
                <option value="10">Tamat PT/Sederajat
                </option>
            </select>



            <br><label class="mr-5 mb-3">Kepesertaan Jkn / Asuransi Kesehatan</label>

            <select name="kepesertaan_jkn_warga">
                <option value="1">
                    BPJS-PBI/Jamkesmas/Jamkesda
                </option>
                <option value="2">BPJS-Non PBI
                </option>
                <option value="3">Swasta
                </option>
                <option value="4">Tidak Memiliki
                </option>
            </select>



            <br><label class="mr-5 mb-3">Keberadaan Anggota Keluarga</label>

            <select name="keberadaan_anggota_keluarga_warga">
                <option value="1">Di Dalam
                    Rumah
                </option>
                <option value="2">Di Luar
                    Rumah
                </option>
                <option value="3">Di Luar
                    Negeri
                </option>
            </select>



            <br><label class="mr-5 mb-3">Kepemilikan Rumah</label>

            <select name="kepemilikanRumah_warga">
                <option value="1" >Ya
                </option>
                <option value="2" >Tidak
                </option>
            </select>





            <input class="ml-96" type="submit" name="save" value="SAVE">
            <input class="ml-10" type="reset" name="reset" value="RESET">
            <input class="" style="border-width: 1px; border-color: black;" type="hidden" name="id_warga"
                value="<?= $data['id_warga'] ?>">




        </form>
        <p><a href="read_kartuKeluarga.php">CANCEL</a></p>
    </div>
    </form>
    <p><a href="read_sensus.php">CANCEL</a></p>
</body>
<?php include "template/footer.php"  ?>

</html>