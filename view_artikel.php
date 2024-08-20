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

    <div class="ml-auto mr-auto mt-10 mb-10">
        <center>
            <p style="font-size: 40px;"><?php echo $data['judul_artikel'] ?></p>
        </center>
        <p style="font-size: 20px; margin-left: 100px;" ><a href="informasi_warga.php">Informasi</a> > <?php echo $data['topik_artikel'] ?><?php echo $data['judul_artikel'] ?></p>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide">
        <!--  -->
        <div class="carousel-inner">
            <!--  -->

            <div class="carousel-item active">
                <img src="img/<?= $data['display_artikel']; ?>" class="d-block ml-auto mr-auto" width="80%" alt="...">
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
            <!-- <td>Isi</td>
                <td><input class="" style="border-width: 1px; border-color: black;" type="area" name="isi_artikel" value="" required></td> -->
            <br>
            <hr>
            <p style="font-size: 24px;text-indent: 100px;" class="ml-48 mr-48 mt-20" name="isi_artikel" rows="4" cols="50"
                value="<?= $data['isi_artikel']; ?>"> <?= $data['isi_artikel']; ?> </p>
            <br>
            <hr>
        </tr>
    </table>
    <?php include 'template/footer.php' ?>
</body>

</html>