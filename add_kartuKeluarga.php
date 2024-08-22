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

        <h1 class="mb-4">Form Penambahan Kartu Keluarga</h1>
        <form method="POST" action="create_kartuKeluarga.php">
            <table>
                <!-- Form -->
                <tr>

                    <td class="mr-5 mb-3">
                        <p><label class="mr-5 mb-3">NIK Kartu Keluarga</label></p>
                    </td>
                    <td class="mr-5 mb-3"><input class="mr-5 mb-3" style="border-width: 1px; border-color: black;" type="number"
                            name="nik_keluarga" value="" required></td>

                </tr>
                <!-- endform -->
                <!-- Form -->
                <tr>

                    <td class="mr-5 mb-3">
                        <p><label class="mr-5 mb-3">Jumlah lahir dari ibu</label></p>
                    </td>
                    <td class="mr-5 mb-3"><input class="mr-5 mb-3" style="border-width: 1px; border-color: black;" type="number"
                            name="jumlah_ibu_melahirkan_keluarga" value="" required></td>

                </tr>
                <!-- endform -->
                <!-- Form -->
                <tr>

                    <td class="mr-5 mb-3">
                        <p><label class="mr-5 mb-3">Jumlah anak lahir laki laki</label></p>
                    </td>
                    <td class="mr-5 mb-3"><input class="mr-5 mb-3" style="border-width: 1px; border-color: black;" type="number"
                            name="jumlah_anak_lahir_laki_hidup" value="" required></td>

                </tr>
                <!-- endform -->
                <!-- Form -->
                <tr>

                    <td class="mr-5 mb-3">
                        <p><label class="mr-5 mb-3">Jumlah anak lahir perempuan</label></p>
                    </td>
                    <td class="mr-5 mb-3"><input class="mr-5 mb-3" style="border-width: 1px; border-color: black;" type="number"
                            name="jumlah_anak_lahir_perempuan_hidup" value="" required></td>

                </tr>
                <!-- endform -->
                <!-- Form -->
                <tr>

                    <td class="mr-5 mb-3">
                        <p><label class="mr-5 mb-3">Jumlah anak laki laki yang masih hidup</label></p>
                    </td>
                    <td class="mr-5 mb-3"><input class="mr-5 mb-3" style="border-width: 1px; border-color: black;" type="number"
                            name="jumlah_anak_laki_hidup" value="" required></td>

                </tr>
                <!-- endform -->
                <!-- Form -->
                <tr>

                    <td class="mr-5 mb-3">
                        <p><label class="mr-5 mb-3">Jumlah anak perempuan yang masih hidup</label></p>
                    </td>
                    <td class="mr-5 mb-3"><input class="mr-5 mb-3" style="border-width: 1px; border-color: black;" type="number"
                            name="jumlah_anak_perempuan_hidup" value="" required></td>

                </tr>
                <!-- endform -->
                <!-- Form -->
                <tr>

                    <td class="mr-5 mb-3">
                        <p><label class="mr-5 mb-3">Jumlah anak yang diinginkan</label></p>
                    </td>
                    <td class="mr-5 mb-3"><input class="mr-5 mb-3" style="border-width: 1px; border-color: black;" type="number"
                            name="jumlah_anak_diinginkan" value="" required></td>

                </tr>
                <!-- endform -->
                <!-- start select -->
                <tr>
                    <td class="mr-5 mb-3">Keluarga melakukan ibadah secara rutin?</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Kepala keluarga memiliki akte nikah?</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Keluarga mengalami konfik akhir akhir ini?</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Keluarga memiliki sumber penghasilan utama?</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Keluarga memiliki sumber penghasilan utama?</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Keluarga memiliki akses makanan 4 sehat 5 sempurna selama 6 bulan terakhir ?</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Keluarga Memiliki tabungan atau asset lain nya seperti (Hasil kebun, hasil ternak, atau asset
                        tabungan lainnya)</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Keluarga memiliki anggota yang sakit atau disabilitas dalam 6 bulan terakhir?</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Keluarga memiliki akses internet dan media sosial?</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Keluarga memiliki waktu untuk berinteraksi dalam 6 bulan terakhir?</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Selama 6 bulan terakhir keluarga pernah berekreasi bersama di luar rumah?</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Selama 6 bulan terakhir, keluarga ikut serta dalam kegiatan sosial/gotong royong di lingkungan
                        RT?</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Keluarga memiliki balita ikut kegiatan Posyandu</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Keluarga memiliki balita dan anak (0-6 tahun) ikut kegiatan Bina Keluarga Balita</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Keluarga Memiliki remaja (10-24 tahun) ikut kegiatan Bina Keluarga Remaja</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Ada anggota keluarga masih remaja (10-24 thn) ikut Pusat Informasi Dan Konseling Remaja /
                        Mahasiswa (PIK-R/M)</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Keluarga yang memiliki lansia (umur >= 60 tahun) ikut kegiatan Bina Keluarga Lansia</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Keluarga mengikuti kegiatan usaha ekonomi melalui</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Jenis atap rumah keluarga</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Jenis dinding keluarga</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Jenis lantai keluarga</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Sumber Penerangan Utama</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Sumber air minum utama</td>
                    <td class="mr-5 mb-3">
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
                            <option value="8">Lainnya
                            </option>
                        </select>
                    </td>
                </tr>
                <!-- end select -->
                <!-- start select -->
                <tr>
                    <td class="mr-5 mb-3">Fasilitas Buang Air Besar</td>
                    <td class="mr-5 mb-3">
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

                    <td class="mr-5 mb-3">
                        <p><label class="mr-5 mb-3">Luas rumah/bangunan keseluruhan m2</label></p>
                    </td>
                    <td class="mr-5 mb-3"><input class="mr-5 mb-3" style="border-width: 1px; border-color: black;" type="number"
                            name="luas_rumah_mPersegi_keluarga" value="" required></td>

                </tr>
                <!-- endform -->
                <!-- Form -->
                <tr>

                    <td class="mr-5 mb-3">
                        <p><label class="mr-5 mb-3">Orang yang tinggal dan menetap di rumah/bangunan ini</label></p>
                    </td>
                    <td class="mr-5 mb-3"><input class="mr-5 mb-3" style="border-width: 1px; border-color: black;" type="number"
                            name="total_orang_menetap_dirumah_keluarga" value="" required></td>

                </tr>
                <!-- endform -->
                <!-- start select -->
                <tr>
                    <td class="mr-5 mb-3">Bahan bakar utama untuk memasak</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Kepemilikan rumah/bangunan tempat tinggal</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Status perolehan info kb keluarga</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Asal perolehan info kb keluarga</td>
                    <td class="mr-5 mb-3">
                        <select name="asal_perolehan_info_kb_keluarga">
                            <option value="1">Koran/Majalah/Tabloid
                            </option>
                            <option value="2">Televisi/Radio/Videotron
                            </option>
                            <option value="3">Facebook/Instagram/Twitter/Whatsapp/Youtube/dll
                            </option>
                            <option value="4">Seminar/Workshop/Pertemuan/Kanseling/Pameran
                            </option>
                            <option value="5">Poster/Spanduk/Konser/Billboard/Baliho
                            </option>
                            <option value="6">Telefon
                            </option>
                        </select>
                    </td>
                </tr>
                <!-- end select -->
                <!-- start select -->
                <tr>
                    <td class="mr-5 mb-3">Status petugas asal informasi kb keluarga</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3">Asal petugas perolehan info kb keluarga</td>
                    <td class="mr-5 mb-3">
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
                    <td class="mr-5 mb-3"></td>
                    <td class="mr-5 mb-3">
                        <input type="submit" name="save" value="SAVE">
                        <input type="reset" name="reset" value="RESET">
                        <input type="hidden" name="id_artikel" value="<?= $data['id_artikel'] ?>">
                    </td>
                </tr>
            </table>
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