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
    <form method="POST" action="update_kartuKeluarga.php">
        <?php
        include "connection.php";
        $querry = "SELECT * FROM keluarga WHERE nik_keluarga='$_GET[nik_keluarga]'";
        $pet = mysqli_query($db_connection, $querry);
        $data = mysqli_fetch_assoc($pet);
        ?>


<table>
            <!-- Form -->
            <tr>

                <td>
                    <p><label>nik_keluarga</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number" name="nik_keluarga"
                        value="<?= $data['nik_keluarga'] ?>" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>jumlah_ibu_melahirkan_keluarga</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="jumlah_ibu_melahirkan_keluarga" value="<?= $data['jumlah_ibu_melahirkan_keluarga'] ?>" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>jumlah_anak_lahir_laki_hidup</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="jumlah_anak_lahir_laki_hidup" value="<?= $data['jumlah_anak_lahir_laki_hidup'] ?>" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>jumlah_lahir_perempuan_hidup</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="jumlah_anak_lahir_perempuan_hidup" value="<?= $data['jumlah_anak_lahir_perempuan_hidup'] ?>" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>jumlah_anak_laki_hidup</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="jumlah_anak_laki_hidup" value="<?= $data['jumlah_anak_laki_hidup'] ?>" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>jumlah_anak_perempuan_hidup</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="jumlah_anak_perempuan_hidup" value="<?= $data['jumlah_anak_perempuan_hidup'] ?>" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>jumlah_anak_diinginkan</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="jumlah_anak_diinginkan" value="<?= $data['jumlah_anak_diinginkan'] ?>" required></td>

            </tr>
            <!-- endform -->
            <!-- start select -->
            <tr>
                <td>status_ibadah_rutin_keluarga</td>
                <td>
                    <select name="status_ibadah_rutin_keluarga">
                        <option value="1" <?= ($data['status_ibadah_rutin_keluarga'] == '1') ? 'selected' : ''; ?>>Ya 
                        </option>
                        <option value="0" <?= ($data['status_ibadah_rutin_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>kepemilikan_akte_nikah_keluarga</td>
                <td>
                    <select name="kepemilikan_akte_nikah_keluarga">
                        <option value="1" <?= ($data['kepemilikan_akte_nikah_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['kepemilikan_akte_nikah_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_konflik_keluarga</td>
                <td>
                    <select name="status_konflik_keluarga">
                        <option value="1" <?= ($data['status_konflik_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_konflik_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_sumber_penghasilan_keluarga</td>
                <td>
                    <select name="status_sumber_penghasilan_keluarga">
                        <option value="1" <?= ($data['status_sumber_penghasilan_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_sumber_penghasilan_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_kelayakan_makanan_keluarga</td>
                <td>
                    <select name="status_kelayakan_makanan_keluarga">
                        <option value="1" <?= ($data['status_kelayakan_makanan_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_kelayakan_makanan_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_tabungan_keluarga</td>
                <td>
                    <select name="status_tabungan_keluarga">
                        <option value="1" <?= ($data['status_tabungan_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_tabungan_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_sakit_disabilitas_keluarga</td>
                <td>
                    <select name="status_sakit_disabilitas_keluarga">
                        <option value="1" <?= ($data['status_sakit_disabilitas_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_sakit_disabilitas_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_penggunaan_sosial_media_keluarga</td>
                <td>
                    <select name="status_penggunaan_sosial_media_keluarga">
                        <option value="1" <?= ($data['status_penggunaan_sosial_media_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_penggunaan_sosial_media_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_waktu_interaksi_keluarga</td>
                <td>
                    <select name="status_waktu_interaksi_keluarga">
                        <option value="1" <?= ($data['status_waktu_interaksi_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_waktu_interaksi_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_interaksi_pasutri</td>
                <td>
                    <select name="status_interaksi_pasutri">
                        <option value="1" <?= ($data['status_interaksi_pasutri'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_interaksi_pasutri'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_berkreasi_luarrumah_keluarga</td>
                <td>
                    <select name="status_berkreasi_luarrumah_keluarga">
                        <option value="1" <?= ($data['status_berkreasi_luarrumah_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_berkreasi_luarrumah_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_ikut_gotongroyong_rt_keluarga</td>
                <td>
                    <select name="status_ikut_gotongroyong_rt_keluarga">
                        <option value="1" <?= ($data['status_ikut_gotongroyong_rt_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_ikut_gotongroyong_rt_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_balita_ikut_posyandu_keluarga</td>
                <td>
                    <select name="status_balita_ikut_posyandu_keluarga">
                        <option value="1" <?= ($data['status_balita_ikut_posyandu_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_balita_ikut_posyandu_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_balita_ikut_binkel_keluarga</td>
                <td>
                    <select name="status_balita_ikut_binkel_keluarga">
                        <option value="1" <?= ($data['status_balita_ikut_binkel_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_balita_ikut_binkel_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_remaja_ikut_binkel_keluarga</td>
                <td>
                    <select name="status_remaja_ikut_binkel_keluarga">
                        <option value="1" <?= ($data['status_remaja_ikut_binkel_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_remaja_ikut_binkel_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_remaja_ikut_pusatinformasi_konseling_keluarga</td>
                <td>
                    <select name="status_remaja_ikut_pusatinformasi_konseling_keluarga">
                        <option value="1" <?= ($data['status_remaja_ikut_pusatinformasi_konseling_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_remaja_ikut_pusatinformasi_konseling_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_lansia_ikut_binkel_keluarga</td>
                <td>
                    <select name="status_lansia_ikut_binkel_keluarga">
                        <option value="1" <?= ($data['status_lansia_ikut_binkel_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_lansia_ikut_binkel_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Keluarga mengikuti kegiatan usaha ekonomi melalui</td>
                <td>
                    <select name="status_keluarga_ikut_usaha_ekonomi_keluarga">
                        <option value="1" <?= ($data['status_keluarga_ikut_usaha_ekonomi_keluarga'] == '1') ? 'selected' : ''; ?>>Usaha Peningkatan Pendapatan Keluarga Sejahtera
                        </option>
                        <option value="2" <?= ($data['status_keluarga_ikut_usaha_ekonomi_keluarga'] == '2') ? 'selected' : ''; ?>>PNM Mekar BUMN
                        </option>
                        <option value="3" <?= ($data['status_keluarga_ikut_usaha_ekonomi_keluarga'] == '3') ? 'selected' : ''; ?>>Program Keluarga Harapan (PKH) Kemensos
                        </option>
                        <option value="4" <?= ($data['status_keluarga_ikut_usaha_ekonomi_keluarga'] == '4') ? 'selected' : ''; ?>>Instansi Pemerintah Lain/Swasta/LSM
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>jenis_atap_rumah_keluarga</td>
                <td>
                    <select name="jenis_atap_rumah_keluarga">
                        <option value="1" <?= ($data['jenis_atap_rumah_keluarga'] == '1') ? 'selected' : ''; ?>>Beton
                        </option>
                        <option value="2" <?= ($data['jenis_atap_rumah_keluarga'] == '2') ? 'selected' : ''; ?>>Genteng
                        </option>
                        <option value="3" <?= ($data['jenis_atap_rumah_keluarga'] == '3') ? 'selected' : ''; ?>>Asbes/seng
                        </option>
                        <option value="4" <?= ($data['jenis_atap_rumah_keluarga'] == '4') ? 'selected' : ''; ?>>Kayu/Sirap
                        </option>
                        <option value="5" <?= ($data['jenis_atap_rumah_keluarga'] == '5') ? 'selected' : ''; ?>>Bambu
                        </option>
                        <option value="6" <?= ($data['jenis_atap_rumah_keluarga'] == '6') ? 'selected' : ''; ?>>Jerami/Ijuk/Daun-daunan
                        </option>
                        <option value="7" <?= ($data['jenis_atap_rumah_keluarga'] == '7') ? 'selected' : ''; ?>>Lainnya
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>jenis_dinding_keluarga</td>
                <td>
                    <select name="jenis_dinding_keluarga">
                        <option value="1" <?= ($data['jenis_dinding_keluarga'] == '1') ? 'selected' : ''; ?>>Tembok
                        </option>
                        <option value="2" <?= ($data['jenis_dinding_keluarga'] == '2') ? 'selected' : ''; ?>>Kayu/Papan
                        </option>
                        <option value="3" <?= ($data['jenis_dinding_keluarga'] == '3') ? 'selected' : ''; ?>>Seng
                        </option>
                        <option value="4" <?= ($data['jenis_dinding_keluarga'] == '4') ? 'selected' : ''; ?>>Bambu
                        </option>
                        <option value="5" <?= ($data['jenis_dinding_keluarga'] == '5') ? 'selected' : ''; ?>>Lainnya
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>jenis_lantai_keluarga</td>
                <td>
                    <select name="jenis_lantai_keluarga">
                        <option value="1" <?= ($data['jenis_lantai_keluarga'] == '1') ? 'selected' : ''; ?>>Keramik/Marmer/Ubin/Tegel
                        </option>
                        <option value="2" <?= ($data['jenis_lantai_keluarga'] == '2') ? 'selected' : ''; ?>>Semen
                        </option>
                        <option value="3" <?= ($data['jenis_lantai_keluarga'] == '3') ? 'selected' : ''; ?>>Kayu/Papan
                        </option>
                        <option value="4" <?= ($data['jenis_lantai_keluarga'] == '4') ? 'selected' : ''; ?>>Bambu
                        </option>
                        <option value="5" <?= ($data['jenis_lantai_keluarga'] == '5') ? 'selected' : ''; ?>>Tanah
                        </option>
                        <option value="6" <?= ($data['jenis_lantai_keluarga'] == '6') ? 'selected' : ''; ?>>Lainnya
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Sumber Penerangan Utama</td>
                <td>
                    <select name="sumber_penerangan_keluarga">
                        <option value="1" <?= ($data['sumber_penerangan_keluarga'] == '1') ? 'selected' : ''; ?>>Pribadi <= 900 Watt </option>
                        <option value="2" <?= ($data['sumber_penerangan_keluarga'] == '2') ? 'selected' : ''; ?>>Pribadi > 900 Watt
                        </option>
                        <option value="3" <?= ($data['sumber_penerangan_keluarga'] == '3') ? 'selected' : ''; ?>>Genset
                        </option>
                        <option value="4" <?= ($data['sumber_penerangan_keluarga'] == '4') ? 'selected' : ''; ?>>Listrik Bersama
                        </option>
                        <option value="5" <?= ($data['sumber_penerangan_keluarga'] == '5') ? 'selected' : ''; ?>>Non Listrik
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Sumber air minum utama</td>
                <td>
                    <select name="sumber_air_keluarga">
                        <option value="1" <?= ($data['sumber_air_keluarga'] == '1') ? 'selected' : ''; ?>>Air Kemasan/Isi Ulang
                        </option>
                        <option value="2" <?= ($data['sumber_air_keluarga'] == '2') ? 'selected' : ''; ?>>Ledeng/Pam
                        </option>
                        <option value="3" <?= ($data['sumber_air_keluarga'] == '3') ? 'selected' : ''; ?>>Sumur Bor
                        </option>
                        <option value="4" <?= ($data['sumber_air_keluarga'] == '4') ? 'selected' : ''; ?>>Sumur Terlindung
                        </option>
                        <option value="5" <?= ($data['sumber_air_keluarga'] == '5') ? 'selected' : ''; ?>>Sumur Tidak Terlindung
                        </option>
                        <option value="6" <?= ($data['sumber_air_keluarga'] == '6') ? 'selected' : ''; ?>>Air Permukaan (Sungai, Danau, DLL)
                        </option>
                        <option value="7" <?= ($data['sumber_air_keluarga'] == '7') ? 'selected' : ''; ?>>Air Hujan
                        </option>
                        <option value="8" <?= ($data['sumber_air_keluarga'] == '8') ? 'selected' : ''; ?>>Lainnya
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Fasilitas Buang Air Besar</td>
                <td>
                    <select name="status_fasilitas_bab_keluarga">
                        <option value="1" <?= ($data['status_fasilitas_bab_keluarga'] == '1') ? 'selected' : ''; ?>>Ya, dengan Septic Tank
                        </option>
                        <option value="2" <?= ($data['status_fasilitas_bab_keluarga'] == '2') ? 'selected' : ''; ?>>Ya, tanpa Septic Tank
                        </option>
                        <option value="3" <?= ($data['status_fasilitas_bab_keluarga'] == '3') ? 'selected' : ''; ?>>Tidak, Umum/Bersama
                        </option>
                        <option value="4" <?= ($data['status_fasilitas_bab_keluarga'] == '4') ? 'selected' : ''; ?>>Lainnya
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>Luas rumah/bangunan keseluruhan m2</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="luas_rumah_mPersegi_keluarga" value="<?= $data['luas_rumah_mPersegi_keluarga'] ?>" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>Orang yang tinggal dan menetap di rumah/bangunan ini</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="total_orang_menetap_dirumah_keluarga" value="<?= $data['total_orang_menetap_dirumah_keluarga'] ?>" required></td>

            </tr>
            <!-- endform -->
            <!-- start select -->
            <tr>
                <td>Bahan bakar utama untuk memasak</td>
                <td>
                    <select name="bahan_bakar_utama_memasak_keluarga">
                        <option value="1" <?= ($data['bahan_bakar_utama_memasak_keluarga'] == '1') ? 'selected' : ''; ?>>listrik/Gas
                        </option>
                        <option value="2" <?= ($data['bahan_bakar_utama_memasak_keluarga'] == '2') ? 'selected' : ''; ?>>Minyak Tanah
                        </option>
                        <option value="3" <?= ($data['bahan_bakar_utama_memasak_keluarga'] == '3') ? 'selected' : ''; ?>>Arang/Kayu
                        </option>
                        <option value="4" <?= ($data['bahan_bakar_utama_memasak_keluarga'] == '4') ? 'selected' : ''; ?>>Lainnya
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Kepemilikan rumah/bangunan tempat tinggal</td>
                <td>
                    <select name="kepemilikan_rumah_keluarga">
                        <option value="1" <?= ($data['kepemilikan_rumah_keluarga'] == '1') ? 'selected' : ''; ?>>Milik Sendiri
                        </option>
                        <option value="2" <?= ($data['kepemilikan_rumah_keluarga'] == '2') ? 'selected' : ''; ?>>Kontrak/Sewa
                        </option>
                        <option value="3" <?= ($data['kepemilikan_rumah_keluarga'] == '3') ? 'selected' : ''; ?>>Bebas Sewa
                        </option>
                        <option value="4" <?= ($data['kepemilikan_rumah_keluarga'] == '4') ? 'selected' : ''; ?>>Menumpang
                        </option>
                        <option value="5" <?= ($data['kepemilikan_rumah_keluarga'] == '5') ? 'selected' : ''; ?>>Dinas
                        </option>
                        <option value="6" <?= ($data['kepemilikan_rumah_keluarga'] == '6') ? 'selected' : ''; ?>>Lainnya
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_perolehan_info_kb_keluarga</td>
                <td>
                    <select name="status_perolehan_info_kb_keluarga">
                        <option value="1" <?= ($data['status_perolehan_info_kb_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_perolehan_info_kb_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>asal_perolehan_info_kb_keluarga</td>
                <td>
                    <select name="asal_perolehan_info_kb_keluarga">
                        <option value="1" <?= ($data['asal_perolehan_info_kb_keluarga'] == '1') ? 'selected' : ''; ?>>Koran/Majalah/Tabloid
                        </option>
                        <option value="2" <?= ($data['asal_perolehan_info_kb_keluarga'] == '2') ? 'selected' : ''; ?>>Televisi/Radio/Videotron
                        </option>
                        <option value="3" <?= ($data['asal_perolehan_info_kb_keluarga'] == '3') ? 'selected' : ''; ?>>Facebook/Instagram/Twitter/Whatsapp/Youtube/dll
                        </option>
                        <option value="4" <?= ($data['asal_perolehan_info_kb_keluarga'] == '4') ? 'selected' : ''; ?>>Seminar/Workshop/Pertemuan/Kanseling/Pameran
                        </option>
                        <option value="5" <?= ($data['asal_perolehan_info_kb_keluarga'] == '5') ? 'selected' : ''; ?>>Poster/Spanduk/Konser/Billboard/Baliho
                        </option>
                        <option value="6" <?= ($data['asal_perolehan_info_kb_keluarga'] == '6') ? 'selected' : ''; ?>>Telefon
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_petugas_asal_informasi_kb_keluarga</td>
                <td>
                    <select name="status_petugas_asal_informasi_kb_keluarga">
                        <option value="1" <?= ($data['status_petugas_asal_informasi_kb_keluarga'] == '1') ? 'selected' : ''; ?>>Ya
                        </option>
                        <option value="0" <?= ($data['status_petugas_asal_informasi_kb_keluarga'] == '0') ? 'selected' : ''; ?>>Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>asal_petugas_perolehan_info_kb_keluarga</td>
                <td>
                    <select name="asal_petugas_perolehan_info_kb_keluarga">
                        <option value="1" <?= ($data['asal_petugas_perolehan_info_kb_keluarga'] == '1') ? 'selected' : ''; ?>>Pejabat Pemerintah</option>
                        <option value="2" <?= ($data['asal_petugas_perolehan_info_kb_keluarga'] == '2') ? 'selected' : ''; ?>>Petugas Keluarga Berencana</option>
                        <option value="3" <?= ($data['asal_petugas_perolehan_info_kb_keluarga'] == '3') ? 'selected' : ''; ?>>Guru/Temen</option>
                        <option value="4" <?= ($data['asal_petugas_perolehan_info_kb_keluarga'] == '4') ? 'selected' : ''; ?>>Tokoh Agama</option>
                        <option value="5" <?= ($data['asal_petugas_perolehan_info_kb_keluarga'] == '5') ? 'selected' : ''; ?>>Tokoh Masyarakat</option>
                        <option value="6" <?= ($data['asal_petugas_perolehan_info_kb_keluarga'] == '6') ? 'selected' : ''; ?>>Dokter</option>
                        <option value="7" <?= ($data['asal_petugas_perolehan_info_kb_keluarga'] == '7') ? 'selected' : ''; ?>>Bidan/Perawat</option>
                        <option value="8" <?= ($data['asal_petugas_perolehan_info_kb_keluarga'] == '8') ? 'selected' : ''; ?>>Perangkat Desa/Kelurahan</option>
                        <option value="9" <?= ($data['asal_petugas_perolehan_info_kb_keluarga'] == '9') ? 'selected' : ''; ?>>Kader</option>
                        <option value="10" <?= ($data['asal_petugas_perolehan_info_kb_keluarga'] == '10') ? 'selected' : ''; ?>>Lainnya</option>

                    </select>
                </td>
            </tr>
            <!-- end select -->
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="save" value="SAVE">
                    <input type="reset" name="reset" value="RESET">
                    <input type="hidden" name="nik_keluarga" value="<?= $data['nik_keluarga'] ?>">
                </td>
            </tr>
        </table>


    </form>
    <p><a href="read_kartuKeluarga.php">CANCEL</a></p>
</body>

</html>