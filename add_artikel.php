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
        <h1 class="mb-4">Form Edit Artikel</h1>
        <form class="form-group" method="POST" action="create_artikel.php">

            <label class="mb-3" for="judul_artikel">Judul</label>
            <input id="judul_artikel" class=" mb-5 form-control" style="border-width: 1px; border-color: black;"
                type="text" name="judul_artikel" required>

            <label class="mr-5" for="topik_artikel">Topik</label>

            <select class="mb-5" name="topik_artikel">
                <option value="Panduan">Panduan
                </option>
                <option value="Berita">Berita
                </option>
                <option value="Profil">Profil
                </option>
            </select>


            <!-- Isi
                <input class="" style="border-width: 1px; border-color: black;" type="area" name="isi_artikel" value="" required> -->
            <br>

            <label class="mb-3" for="isi_artikel">Isi Artikel</label>

            <textarea class="form-control" style="border-width: 1px; border-color: black;" name="isi_artikel" rows="4"
                cols="50"></textarea>
            <br>






            <input class="ml-96" type="submit" name="save" value="SAVE">
            <input class="ml-10" type="reset" name="reset" value="RESET">
            <input type="hidden" name="id_artikel" value="<?= $data['id_artikel'] ?>">



        </form>
        <p><a href="read_artikel.php">CANCEL</a></p>
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