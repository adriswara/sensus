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
    <form method="POST" action="create_admin.php">
        <table>
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>nik_keluarga</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="nik_keluarga" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>jumlah_ibu_melahirkan_keluarga</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="jumlah_ibu_melahirkan_keluarga" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>jumlah_anak_lahir_laki_hidup</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="jumlah_anak_lahir_laki_hidup" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>jumlah_lahir_perempuan_hidup</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="jumlah_lahir_perempuan_hidup" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>jumlah_anak_laki_hidup</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="jumlah_anak_laki_hidup" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>jumlah_anak_perempuan_hidup</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="jumlah_anak_perempuan_hidup" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>jumlah_anak_diinginkan</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="jumlah_anak_diinginkan" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
          <!-- start select -->
          <tr>
                <td>status_ibadah_rutin_keluarga</td>
                <td>
                    <select name="status_ibadah_rutin_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>kepemilikan_akte_nikah_keluarga</td>
                <td>
                    <select name="kepemilikan_akte_nikah_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_konflik_keluarga</td>
                <td>
                    <select name="status_konflik_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_sumber_penghasilan_keluarga</td>
                <td>
                    <select name="status_sumber_penghasilan_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_kelayakan_makanan_keluarga</td>
                <td>
                    <select name="status_kelayakan_makanan_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_tabungan_keluarga</td>
                <td>
                    <select name="status_tabungan_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_sakit_disabilitas_keluarga</td>
                <td>
                    <select name="status_sakit_disabilitas_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_penggunaan_sosial_media_keluarga</td>
                <td>
                    <select name="status_penggunaan_sosial_media_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_waktu_interaksi_keluarga</td>
                <td>
                    <select name="status_waktu_interaksi_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_interaksi_pasutri</td>
                <td>
                    <select name="status_interaksi_pasutri">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_berkreasi_luarrumah_keluarga</td>
                <td>
                    <select name="status_berkreasi_luarrumah_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_ikut_gotongroyong_rt_keluarga</td>
                <td>
                    <select name="status_ikut_gotongroyong_rt_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_balita_ikut_posyandu_keluarga</td>
                <td>
                    <select name="status_balita_ikut_posyandu_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_balita_ikut_binkel_keluarga</td>
                <td>
                    <select name="status_balita_ikut_binkel_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_remaja_ikut_binkel_keluarga</td>
                <td>
                    <select name="status_remaja_ikut_binkel_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_remaja_ikut_pusatinformasi_konseling_keluarga</td>
                <td>
                    <select name="status_remaja_ikut_pusatinformasi_konseling_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_lansia_ikut_binkel_keluarga</td>
                <td>
                    <select name="status_lansia_ikut_binkel_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>Select</td>
                <td>
                    <select name="admin_type">
                        <option value="1">option 1
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
                        <option value="1">option 1
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
                        <option value="1">option 1
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
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>sumber_penerangan_keluarga</td>
                <td>
                    <select name="sumber_penerangan_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>sumber_air_keluarga</td>
                <td>
                    <select name="sumber_air_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_fasilitas_bab_keluarga</td>
                <td>
                    <select name="status_fasilitas_bab_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>luas_rumah_mPersegi_keluarga</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="luas_rumah_mPersegi_keluarga" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- Form -->
            <tr>
                
                <td>
                    <p><label>total_orang_menetap_dirumah_keluarga</label></p>
                </td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="text" name="total_orang_menetap_dirumah_keluarga" value=""
                        required></td>
                
            </tr>
            <!-- endform -->
            <!-- start select -->
            <tr>
                <td>bahan_bakar_utama_memasak_keluarga</td>
                <td>
                    <select name="bahan_bakar_utama_memasak_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>kepemilikan_rumah_keluarga</td>
                <td>
                    <select name="kepemilikan_rumah_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>status_perolehan_info_kependudukan_keluarga</td>
                <td>
                    <select name="status_perolehan_info_kependudukan_keluarga">
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>asal_perolehan_info_kependudukan_keluarga</td>
                <td>
                    <select name="asal_perolehan_info_kependudukan_keluarga">
                        <option value="1">option 1
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
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>asal_perolehan_info_kb_keluarga</td>
                <td>
                    <select name="asal_perolehan_info_kb_keluarga">
                        <option value="1">option 1
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
                        <option value="1">option 1
                        </option>
                    </select>
                </td>
            </tr>
            <!-- end select -->
            <!-- start select -->
            <tr>
                <td>asal_petugas_perolehan_info_kb_keluarga</td>
                <td>
                    <select name="asal_petugas_perolehan_info_kb_keluarga">
                        <option value="1">option 1
                        </option>
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