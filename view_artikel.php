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
        <?php
        include "connection.php";
        $querry = "SELECT * FROM artikel WHERE id_artikel='$_GET[id_artikel]'";
        $pet = mysqli_query($db_connection, $querry);
        $data = mysqli_fetch_assoc($pet);
        ?>

        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <!--  -->
            <div class="carousel-inner">
                <!--  -->

                <div class="carousel-item active">
                    <img src="img/<?= $data['display_artikel']; ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5><?php echo $data['topik_artikel'] ?></h5>
                        <p><?php echo $data['judul_artikel'] ?></p>
                    </div>
                </div>
                <!--  -->
            </div>
            <!--  -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <table>
            <tr>
                <td>Judul</td>
                <td>
                    <p> <?= $data['judul_artikel'] ?></p>
                </td>
            </tr>
            <tr>
                <td>Topik</td>
                <td>
                    <p> <?= $data['topik_artikel'] ?></p>
                </td>
            </tr>
            <tr>
                <!-- <td>Isi</td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="area" name="isi_artikel" value="" required></td> -->
                <br>
                <p style="border-width: 1px; border-color: black;" name="isi_artikel" rows="4" cols="50"
                    value="<?= $data['isi_artikel']; ?>"> <?= $data['isi_artikel']; ?> </p>
                <br>
            </tr>
        </table>

    <p><a href="index.php">Kembali</a></p>
</body>

</html>