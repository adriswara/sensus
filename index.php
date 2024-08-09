<?php include "template/header.php" ?>

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
        <?php
        include "connection.php";
        $queryCarousel = "SELECT * FROM `artikel` ORDER BY id_artikel DESC LIMIT 3";
        $dataCarousel = mysqli_query($db_connection, $queryCarousel);
        $i = 1;
        foreach ($dataCarousel as $data):
            ?>
            <div class="carousel-item active">
                <img src="img/<?= $data['display_artikel']; ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5><?php echo $data['topik_artikel'] ?></h5>
                    <p><?php echo $data['judul_artikel'] ?></p>
                </div>
            </div>
            <!--  -->
        <?php endforeach ?>
    </div>
    <!--  -->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
    <!-- start col -->


    <!--  -->

    <?php
    include "connection.php";
    $queryHotNews = "SELECT * FROM `artikel` ORDER BY id_artikel ASC ";
    $dataHotNews = mysqli_query($db_connection, $queryHotNews);
    $i = 1;
    foreach ($dataHotNews as $data):
        ?>
        <!--  -->
        <div class="col">
            <div class="card shadow-sm">
                <a href="read_artikel.php"> <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                        src="img/<?= $data['display_artikel']; ?>" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#55595c" /></img>
                </a>
                <div class="card-body">
                    <p class="card-text"> <?php echo $data['topik_artikel'] ?></p>
                    <p class="card-text"> <?php echo $data['judul_artikel'] ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="read_artikel.php"><button type="button" class="btn btn-sm btn-outline-secondary"> Baca
                                </button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    <?php endforeach ?>

    <!--  -->

</div>

<nav class="bg-gray-800">

    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <!-- leave it blank -->
        </div>
    </div>

</nav>

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">


    <div class="col">
        <div class="card shadow-sm">
            <a href="read_artikel.php">
            </a>
            <div class="card-body">
                <p class="card-text"> Total Kelahiran </p>
                <div class="d-flex justify-content-between align-items-center">
                    <?php
                    include "connection.php";
                    $queryLahir = " SELECT COUNT(id_warga) as angkaLahir FROM `warga` WHERE YEAR(tglLahir_warga) = YEAR(CURRENT_DATE) ";
                    $kelahiran = mysqli_query($db_connection, $queryLahir);
                    $i = 1;
                    foreach ($kelahiran as $data):
                        ?>
                        <p><?php echo $data['angkaLahir'] ?></p>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <a href="read_sensus.php">
            </a>
            <div class="card-body">
                <p class="card-text">Total UMKM</p>
                <div class="d-flex justify-content-between align-items-center">
                    <?php
                    include "connection.php";
                    $queryUMKM = "  SELECT COUNT(id_warga) as angkaUMKM FROM `warga` WHERE pekerjaanKeluarga_warga like '%umkm%'; ";
                    $umkm = mysqli_query($db_connection, $queryUMKM);
                    $i = 1;
                    foreach ($umkm as $data):
                        ?>
                        <p><?php echo $data['angkaUMKM'] ?></p>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>


    <div class="col">
        <div class="card shadow-sm">
            <a href="read_admin.php">
            </a>
            <div class="card-body">
                <p class="card-text">Total JIWA</p>
                <div class="d-flex justify-content-between align-items-center">
                    <?php
                    include "connection.php";
                    $queryJiwa = "  SELECT COUNT(id_warga) as angkaJiwa FROM `warga`";
                    $jiwa = mysqli_query($db_connection, $queryJiwa);
                    $i = 1;
                    foreach ($jiwa as $data):
                        ?>
                        <p><?php echo $data['angkaJiwa'] ?></p>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3 mt-5">


    <div class="col">
        <div class="card shadow-sm">
            <div class="card-body">
                <p class="card-text"> Jiwa Per RW </p>
                <div class="d-flex justify-content-between align-items-center">
                    <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card shadow-sm">
            <a href="read_sensus.php">
            </a>
            <div class="card-body">
                <p class="card-text">Angka Total Kelahiran</p>
                <div class="d-flex justify-content-between align-items-center">
                    <canvas id="myChart2" style="width:100%;max-width:600px"></canvas>
                </div>
            </div>
        </div>
    </div>

</div>


<?php
include "connection.php";
// RW1
$queryRW1 = " select count(id_warga) as totalRW1 from warga where rw_warga = 1; ";
$dataRW1 = mysqli_query($db_connection, $queryRW1);
// RW2
$queryRW2 = " select count(id_warga) as totalRW2 from warga where rw_warga = 2; ";
$dataRW2 = mysqli_query($db_connection, $queryRW2);
// RW3
$queryRW3 = " select count(id_warga) as totalRW3 from warga where rw_warga = 3; ";
$dataRW3 = mysqli_query($db_connection, $queryRW3);
// RW4
$queryRW4 = " select count(id_warga) as totalRW4 from warga where rw_warga = 4; ";
$dataRW4 = mysqli_query($db_connection, $queryRW4);
// RW5
$queryRW5 = " select count(id_warga) as totalRW5 from warga where rw_warga = 5; ";
$dataRW5 = mysqli_query($db_connection, $queryRW5);
// RW6
$queryRW6 = " select count(id_warga) as totalRW6 from warga where rw_warga = 6; ";
$dataRW6 = mysqli_query($db_connection, $queryRW6);
// RW7
$queryRW7 = " select count(id_warga) as totalRW7 from warga where rw_warga = 7; ";
$dataRW7 = mysqli_query($db_connection, $queryRW7);
// RW8
$queryRW8 = " select count(id_warga) as totalRW8 from warga where rw_warga = 8; ";
$dataRW8 = mysqli_query($db_connection, $queryRW8);
// RW9
$queryRW9 = " select count(id_warga) as totalRW9 from warga where rw_warga = 9; ";
$dataRW9 = mysqli_query($db_connection, $queryRW9);
// RW10
$queryRW10 = " select count(id_warga) as totalRW10 from warga where rw_warga = 10; ";
$dataRW10 = mysqli_query($db_connection, $queryRW10);
// RW11
$queryRW11 = " select count(id_warga) as totalRW11 from warga where rw_warga = 11; ";
$dataRW11 = mysqli_query($db_connection, $queryRW11);
// RW12
$queryRW12 = " select count(id_warga) as totalRW12 from warga where rw_warga = 12; ";
$dataRW12 = mysqli_query($db_connection, $queryRW12);
// RW13
$queryRW13 = " select count(id_warga) as totalRW13 from warga where rw_warga = 13; ";
$dataRW13 = mysqli_query($db_connection, $queryRW13);
// RW14
$queryRW14 = " select count(id_warga) as totalRW14 from warga where rw_warga = 14; ";
$dataRW14 = mysqli_query($db_connection, $queryRW14);
// RW15
$queryRW15 = " select count(id_warga) as totalRW15 from warga where rw_warga = 15; ";
$dataRW15 = mysqli_query($db_connection, $queryRW15);
// RW END
// FORW1
foreach ($dataRW1 as $data):
    ?>
    <p id="idRW1"><?php echo $data['totalRW1'] ?></p>
    </div>
<?php endforeach ?>

<!-- FORW2 -->
<?php
foreach ($dataRW2 as $data):
    ?>
    <p id="idRW2"><?php echo $data['totalRW2'] ?></p>
    </div>
<?php endforeach ?>
<!-- FORW3 -->
<?php
foreach ($dataRW3 as $data):
    ?>
    <p id="idRW3"><?php echo $data['totalRW3'] ?></p>
    </div>
<?php endforeach ?>
<!-- FORW4 -->
<?php
foreach ($dataRW4 as $data):
    ?>
    <p id="idRW4"><?php echo $data['totalRW4'] ?></p>
    </div>
<?php endforeach ?>
<!-- FORW5 -->
<?php
foreach ($dataRW5 as $data):
    ?>
    <p id="idRW5"><?php echo $data['totalRW5'] ?></p>
    </div>
<?php endforeach ?>
<!-- FORW6 -->
<?php
foreach ($dataRW6 as $data):
    ?>
    <p id="idRW6"><?php echo $data['totalRW6'] ?></p>
    </div>
<?php endforeach ?>
<!-- FORW7 -->
<?php
foreach ($dataRW7 as $data):
    ?>
    <p id="idRW7"><?php echo $data['totalRW7'] ?></p>
    </div>
<?php endforeach ?>
<!-- FORW8 -->
<?php
foreach ($dataRW8 as $data):
    ?>
    <p id="idRW8"><?php echo $data['totalRW8'] ?></p>
    </div>
<?php endforeach ?>
<!-- FORW9 -->
<?php
foreach ($dataRW9 as $data):
    ?>
    <p id="idRW9"><?php echo $data['totalRW9'] ?></p>
    </div>
<?php endforeach ?>
<!-- FORW10 -->
<?php
foreach ($dataRW10 as $data):
    ?>
    <p id="idRW10"><?php echo $data['totalRW10'] ?></p>
    </div>
<?php endforeach ?>
<!-- FORW11 -->
<?php
foreach ($dataRW11 as $data):
    ?>
    <p id="idRW11"><?php echo $data['totalRW11'] ?></p>
    </div>
<?php endforeach ?>
<!-- FORW12 -->
<?php
foreach ($dataRW12 as $data):
    ?>
    <p id="idRW12"><?php echo $data['totalRW12'] ?></p>
    </div>
<?php endforeach ?>
<!-- FORW13 -->
<?php
foreach ($dataRW13 as $data):
    ?>
    <p id="idRW13"><?php echo $data['totalRW13'] ?></p>
    </div>
<?php endforeach ?>
<!-- FORW14 -->
<?php
foreach ($dataRW14 as $data):
    ?>
    <p id="idRW14"><?php echo $data['totalRW14'] ?></p>
    </div>
<?php endforeach ?>
<!-- FORW15 -->
<?php
foreach ($dataRW15 as $data):
    ?>
    <p id="idRW15"><?php echo $data['totalRW15'] ?></p>
    </div>
<?php endforeach ?>

<!--  -->
<?php
include "connection.php";
$queryLahir = " SELECT COUNT(id_warga) as angkaLahir FROM `warga` WHERE YEAR(tglLahir_warga) = YEAR(2010) ";
$kelahiran = mysqli_query($db_connection, $queryLahir);
$i = 1;
foreach ($kelahiran as $data):
    ?>
    <p><?php echo $data['angkaLahir'] ?></p>
<?php endforeach ?>
<!--  -->

</body>

<script>
    // 
    var RW1 = document.getElementById('idRW1').value;
    var RW2 = document.getElementById('idRW2').value;
    var RW3 = document.getElementById('idRW3').value;
    var RW4 = document.getElementById('idRW4').value;
    var RW5 = document.getElementById('idRW5').value;
    var RW6 = document.getElementById('idRW6').value;
    var RW7 = document.getElementById('idRW7').value;
    var RW8 = document.getElementById('idRW8').value;
    var RW9 = document.getElementById('idRW9').value;
    var RW10 = document.getElementById('idRW10').value;
    var RW11 = document.getElementById('idRW11').value;
    var RW12 = document.getElementById('idRW12').value;
    var RW13 = document.getElementById('idRW13').value;
    var RW14 = document.getElementById('idRW14').value;
    var RW15 = document.getElementById('idRW15').value;

    // 
    const xValues = ["RW 1", "RW 2", "RW 3", "RW 4", "RW 5", "RW 6", "RW 7", "RW 8", "RW 9", "RW 10", "RW 11", "RW 12", "RW 13", "RW 14", "RW 15"];
    const yValues = [RW1, RW2, RW3, RW4, RW5, RW6, RW7, RW8, RW9, RW10, RW11, RW12, RW13, RW14, RW15];
    const barColors = ["red", "green", "blue", "orange", "brown", "pink", "purple", "black", "olive", "cyan", "grey", "maroon", "yellow", "magenta", "sand"];

    new Chart("myChart", {
        type: "bar",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: { display: false },
            title: {
                display: true,
                text: " Sensus "
            }
        }
    });
    // 


    // 
    const xValues2 = [RW1, RW2, RW3, RW4, RW5, RW6, RW7, RW8, RW9, RW10, RW11, RW12, RW13, RW14, RW15];

    new Chart("myChart2", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                borderColor: "green",
                fill: false
            }]
        },
        options: {
            legend: { display: false }
        }
    });
    // 
</script>
<!-- max tahun ke tahun per 10 tahun -->

</html>