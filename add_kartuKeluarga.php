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
    <h3>Form Penambahan Kartu Keluarga</h3>
    <form method="POST" action="create_kartuKeluarga.php">
        <table>
            <!-- Form -->
            <tr>

                <td>
                    <p><label>nik_keluarga</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number" name="nik_keluarga"
                        value="" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>jumlah_ibu_melahirkan_keluarga</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="jumlah_ibu_melahirkan_keluarga" value="" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>jumlah_anak_lahir_laki_hidup</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="jumlah_anak_lahir_laki_hidup" value="" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>jumlah_lahir_perempuan_hidup</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="jumlah_anak_lahir_perempuan_hidup" value="" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>jumlah_anak_laki_hidup</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="jumlah_anak_laki_hidup" value="" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>jumlah_anak_perempuan_hidup</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="jumlah_anak_perempuan_hidup" value="" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>jumlah_anak_diinginkan</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="jumlah_anak_diinginkan" value="" required></td>

            </tr>
            <!-- endform -->
            <!-- start select -->
            <tr>
                <td>status_ibadah_rutin_keluarga</td>
                <td>
                    <select name="status_ibadah_rutin_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>kepemilikan_akte_nikah_keluarga</td>
                <td>
                    <select name="kepemilikan_akte_nikah_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_konflik_keluarga</td>
                <td>
                    <select name="status_konflik_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_sumber_penghasilan_keluarga</td>
                <td>
                    <select name="status_sumber_penghasilan_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_kelayakan_makanan_keluarga</td>
                <td>
                    <select name="status_kelayakan_makanan_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_tabungan_keluarga</td>
                <td>
                    <select name="status_tabungan_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_sakit_disabilitas_keluarga</td>
                <td>
                    <select name="status_sakit_disabilitas_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_penggunaan_sosial_media_keluarga</td>
                <td>
                    <select name="status_penggunaan_sosial_media_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_waktu_interaksi_keluarga</td>
                <td>
                    <select name="status_waktu_interaksi_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_interaksi_pasutri</td>
                <td>
                    <select name="status_interaksi_pasutri">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_berkreasi_luarrumah_keluarga</td>
                <td>
                    <select name="status_berkreasi_luarrumah_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_ikut_gotongroyong_rt_keluarga</td>
                <td>
                    <select name="status_ikut_gotongroyong_rt_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_balita_ikut_posyandu_keluarga</td>
                <td>
                    <select name="status_balita_ikut_posyandu_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_balita_ikut_binkel_keluarga</td>
                <td>
                    <select name="status_balita_ikut_binkel_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_remaja_ikut_binkel_keluarga</td>
                <td>
                    <select name="status_remaja_ikut_binkel_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_remaja_ikut_pusatinformasi_konseling_keluarga</td>
                <td>
                    <select name="status_remaja_ikut_pusatinformasi_konseling_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_lansia_ikut_binkel_keluarga</td>
                <td>
                    <select name="status_lansia_ikut_binkel_keluarga">
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Keluarga mengikuti kegiatan usaha ekonomi melalui</td>
                <td>
                    <select name="status_keluarga_ikut_usaha_ekonomi_keluarga">
                        <option value="1">Usaha Peningkatan Pendapatan Keluarga Sejahtera
                        </option>
                        <option value="2">PNM Mekar BUMN
                        </option>
                        <option value="3">Program Keluarga Harapan (PKH) Kemensos
                        </option>
                        <option value="4">Instansi Pemerintah Lain/Swasta/LSM
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
                        <option value="1">Beton
                        </option>
                        <option value="2">Genteng
                        </option>
                        <option value="3">Asbes/seng
                        </option>
                        <option value="4">Kayu/Sirap
                        </option>
                        <option value="5">Bambu
                        </option>
                        <option value="6">Jerami/Ijuk/Daun-daunan
                        </option>
                        <option value="7">Lainnya
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
                        <option value="1">Tembok
                        </option>
                        <option value="2">Kayu/Papan
                        </option>
                        <option value="3">Seng
                        </option>
                        <option value="4">Bambu
                        </option>
                        <option value="5">Lainnya
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
                        <option value="1">Keramik/Marmer/Ubin/Tegel
                        </option>
                        <option value="2">Semen
                        </option>
                        <option value="3">Kayu/Papan
                        </option>
                        <option value="4">Bambu
                        </option>
                        <option value="5">Tanah
                        </option>
                        <option value="6">Lainnya
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
                        <option value="1">Pribadi <= 900 Watt </option>
                        <option value="2">Pribadi > 900 Watt
                        </option>
                        <option value="3">Genset
                        </option>
                        <option value="4">Listrik Bersama
                        </option>
                        <option value="5">Non Listrik
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
                        <option value="1">Air Kemasan/Isi Ulang
                        </option>
                        <option value="2">Ledeng/Pam
                        </option>
                        <option value="3">Sumur Bor
                        </option>
                        <option value="4">Sumur Terlindung
                        </option>
                        <option value="5">Sumur Tidak Terlindung
                        </option>
                        <option value="6">Air Permukaan (Sungai, Danau, DLL)
                        </option>
                        <option value="7">Air Hujan
                        </option>
                        <option value="9">Lainnya
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
                        <option value="1">Ya, dengan Septic Tank
                        </option>
                        <option value="2">Ya, tanpa Septic Tank
                        </option>
                        <option value="3">Tidak, Umum/Bersama
                        </option>
                        <option value="4">Lainnya
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
                        name="luas_rumah_mPersegi_keluarga" value="" required></td>

            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>

                <td>
                    <p><label>Orang yang tinggal dan menetap di rumah/bangunan ini</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="number"
                        name="total_orang_menetap_dirumah_keluarga" value="" required></td>

            </tr>
            <!-- endform -->
            <!-- start select -->
            <tr>
                <td>Bahan bakar utama untuk memasak</td>
                <td>
                    <select name="bahan_bakar_utama_memasak_keluarga">
                        <option value="1">listrik/Gas
                        </option>
                        <option value="2">Minyak Tanah
                        </option>
                        <option value="3">Arang/Kayu
                        </option>
                        <option value="4">Lainnya
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
                        <option value="1">Milik Sendiri
                        </option>
                        <option value="2">Kontrak/Sewa
                        </option>
                        <option value="3">Bebas Sewa
                        </option>
                        <option value="4">Menumpang
                        </option>
                        <option value="5">Dinas
                        </option>
                        <option value="6">Lainnya
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
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>asal_perolehan_info_kb_keluarga</td>
                <td>
                    <select name="asal_perolehan_info_kb_keluarga">
                        <option value="1">Koran/Majalah/Tabloid
                        </option>
                        <option value="2">Televisi/Radio/Videotron
                        </option>
                        <option value="3">Facebook/Instagram/Twitter/Whatsapp/Youtube/dll
                        </option>
                        <option value="4">Seminar/Workshop/Pertemuan/Kanseling/Pameran
                        </option>
                        <option value="5">Leaflet/Lembar Baik/Poster/Spanduk/Konser/Billboard/Baliho
                        </option>
                        <option value="6">Telefon
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
                        <option value="1">Ya
                        </option>
                        <option value="0">Tidak</option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>asal_petugas_perolehan_info_kb_keluarga</td>
                <td>
                    <select name="asal_petugas_perolehan_info_kb_keluarga">
                        <option value="1">Pejabat Pemerintah</option>
                        <option value="2">Petugas Keluarga Berencana</option>
                        <option value="3">Guru/Temen</option>
                        <option value="4">Tokoh Agama</option>
                        <option value="5">Tokoh Masyarakat</option>
                        <option value="6">Dokter</option>
                        <option value="7">Bidan/Perawat</option>
                        <option value="8">Perangkat Desa/Kelurahan</option>
                        <option value="9">Kader</option>
                        <option value="10">Lainnya</option>

                    </select>
                </td>
            </tr>
            <!-- end select -->
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
    <p><a href="read_kartuKeluarga.php">CANCEL</a></p>
</body>

</html>