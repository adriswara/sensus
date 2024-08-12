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
                <a href="read_artikel.php"> <img class="object-fit-cover" width="100%" height="100%" src="img/<?= $data['display_artikel']; ?>"></img>
                </a>
                <div class="card-body">
                    <p class="card-text"> <?php echo $data['topik_artikel'] ?></p>
                    <p class="card-text"> <?php echo $data['judul_artikel'] ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="view_artikel.php?id_artikel=<?=$data['id_artikel']?>"><button type="button" class="btn btn-sm btn-outline-secondary"> Baca
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
$queryRW1 = " SELECT count(id_warga) as totalRW1 from warga where rw_warga = 1; ";
$dataRW1 = mysqli_query($db_connection, $queryRW1);
// RW2
$queryRW2 = " SELECT count(id_warga) as totalRW2 from warga where rw_warga = 2; ";
$dataRW2 = mysqli_query($db_connection, $queryRW2);
// RW3
$queryRW3 = " SELECT count(id_warga) as totalRW3 from warga where rw_warga = 3; ";
$dataRW3 = mysqli_query($db_connection, $queryRW3);
// RW4
$queryRW4 = " SELECT count(id_warga) as totalRW4 from warga where rw_warga = 4; ";
$dataRW4 = mysqli_query($db_connection, $queryRW4);
// RW5
$queryRW5 = " SELECT count(id_warga) as totalRW5 from warga where rw_warga = 5; ";
$dataRW5 = mysqli_query($db_connection, $queryRW5);
// RW6
$queryRW6 = " SELECT count(id_warga) as totalRW6 from warga where rw_warga = 6; ";
$dataRW6 = mysqli_query($db_connection, $queryRW6);
// RW7
$queryRW7 = " SELECT count(id_warga) as totalRW7 from warga where rw_warga = 7; ";
$dataRW7 = mysqli_query($db_connection, $queryRW7);
// RW8
$queryRW8 = " SELECT count(id_warga) as totalRW8 from warga where rw_warga = 8; ";
$dataRW8 = mysqli_query($db_connection, $queryRW8);
// RW9
$queryRW9 = " SELECT count(id_warga) as totalRW9 from warga where rw_warga = 9; ";
$dataRW9 = mysqli_query($db_connection, $queryRW9);
// RW10
$queryRW10 = " SELECT count(id_warga) as totalRW10 from warga where rw_warga = 10; ";
$dataRW10 = mysqli_query($db_connection, $queryRW10);
// RW11
$queryRW11 = " SELECT count(id_warga) as totalRW11 from warga where rw_warga = 11; ";
$dataRW11 = mysqli_query($db_connection, $queryRW11);
// RW12
$queryRW12 = " SELECT count(id_warga) as totalRW12 from warga where rw_warga = 12; ";
$dataRW12 = mysqli_query($db_connection, $queryRW12);
// RW13
$queryRW13 = " SELECT count(id_warga) as totalRW13 from warga where rw_warga = 13; ";
$dataRW13 = mysqli_query($db_connection, $queryRW13);
// RW14
$queryRW14 = " SELECT count(id_warga) as totalRW14 from warga where rw_warga = 14; ";
$dataRW14 = mysqli_query($db_connection, $queryRW14);
// RW15
$queryRW15 = " SELECT count(id_warga) as totalRW15 from warga where rw_warga = 15; ";
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
// YEAR = NOW
$queryLahirNow = " SELECT COUNT(id_warga) as angkaLahirNow , YEAR(CURRENT_DATE) as tahun FROM `warga` WHERE YEAR(tglLahir_warga) = YEAR(CURRENT_DATE) ";
$kelahiranNow = mysqli_query($db_connection, $queryLahirNow);
// YEAR = NOW - 1
$queryLahirMin1 = " SELECT COUNT(id_warga) as angkaLahirMin1 , YEAR(CURRENT_DATE) - 1 as tahun FROM `warga` WHERE YEAR(tglLahir_warga) = YEAR(CURRENT_DATE) - 1 ";
$kelahiranMin1 = mysqli_query($db_connection, $queryLahirMin1);
// YEAR = NOW - 2
$queryLahirMin2 = " SELECT COUNT(id_warga) as angkaLahirMin2 , YEAR(CURRENT_DATE) - 2 as tahun FROM `warga` WHERE YEAR(tglLahir_warga) = YEAR(CURRENT_DATE) - 2 ";
$kelahiranMin2 = mysqli_query($db_connection, $queryLahirMin2);
// YEAR = NOW - 3
$queryLahirMin3 = " SELECT COUNT(id_warga) as angkaLahirMin3 , YEAR(CURRENT_DATE) - 3 as tahun FROM `warga` WHERE YEAR(tglLahir_warga) = YEAR(CURRENT_DATE) - 3 ";
$kelahiranMin3 = mysqli_query($db_connection, $queryLahirMin3);
// YEAR = NOW - 4
$queryLahirMin4 = " SELECT COUNT(id_warga) as angkaLahirMin4 , YEAR(CURRENT_DATE) - 4 as tahun FROM `warga` WHERE YEAR(tglLahir_warga) = YEAR(CURRENT_DATE) - 4 ";
$kelahiranMin4 = mysqli_query($db_connection, $queryLahirMin4);
// YEAR = NOW - 5
$queryLahirMin5 = " SELECT COUNT(id_warga) as angkaLahirMin5 , YEAR(CURRENT_DATE) - 5 as tahun FROM `warga` WHERE YEAR(tglLahir_warga) = YEAR(CURRENT_DATE) - 5 ";
$kelahiranMin5 = mysqli_query($db_connection, $queryLahirMin5);
// YEAR = NOW - 6
$queryLahirMin6 = " SELECT COUNT(id_warga) as angkaLahirMin6 , YEAR(CURRENT_DATE) - 6 as tahun FROM `warga` WHERE YEAR(tglLahir_warga) = YEAR(CURRENT_DATE) - 6 ";
$kelahiranMin6 = mysqli_query($db_connection, $queryLahirMin6);
// YEAR = NOW - 7
$queryLahirMin7 = " SELECT COUNT(id_warga) as angkaLahirMin7 , YEAR(CURRENT_DATE) - 7 as tahun FROM `warga` WHERE YEAR(tglLahir_warga) = YEAR(CURRENT_DATE) - 7 ";
$kelahiranMin7 = mysqli_query($db_connection, $queryLahirMin7);
// YEAR = NOW - 8
$queryLahirMin8 = " SELECT COUNT(id_warga) as angkaLahirMin8 , YEAR(CURRENT_DATE) - 8 as tahun FROM `warga` WHERE YEAR(tglLahir_warga) = YEAR(CURRENT_DATE) - 8 ";
$kelahiranMin8 = mysqli_query($db_connection, $queryLahirMin8);
// YEAR = NOW - 9
$queryLahirMin9 = " SELECT COUNT(id_warga) as angkaLahirMin9 , YEAR(CURRENT_DATE) - 9 as tahun FROM `warga` WHERE YEAR(tglLahir_warga) = YEAR(CURRENT_DATE) - 9 ";
$kelahiranMin9 = mysqli_query($db_connection, $queryLahirMin9);
// YEAR = NOW - 10
$queryLahirMin10 = " SELECT COUNT(id_warga) as angkaLahirMin10 , YEAR(CURRENT_DATE) - 10 as tahun FROM `warga` WHERE YEAR(tglLahir_warga) = YEAR(CURRENT_DATE) - 10";
$kelahiranMin10 = mysqli_query($db_connection, $queryLahirMin10);
// FOR Y = NOW 
foreach ($kelahiranNow as $data):
    ?>
    <p id="idTahunMin0"><?php echo $data['tahun'] ?> </p>
    <p id="idLahirNow"> <?php echo $data['angkaLahirNow'] ?></p>
<?php endforeach ?>
<!-- FOR Y - 1 -->
<?php
foreach ($kelahiranMin1 as $data):
    ?>
    <p id="idTahunMin1"><?php echo $data['tahun'] ?> </p>
    <p id="idLahirMin1"> <?php echo $data['angkaLahirMin1'] ?></p>
<?php endforeach ?>
<!-- FOR Y - 2 -->
<?php
foreach ($kelahiranMin2 as $data):
    ?>
    <p id="idTahunMin2"><?php echo $data['tahun'] ?> </p>
    <p id="idLahirMin2"> <?php echo $data['angkaLahirMin2'] ?></p>
<?php endforeach ?>
<!-- FOR Y - 3 -->
<?php
foreach ($kelahiranMin3 as $data):
    ?>
    <p id="idTahunMin3"><?php echo $data['tahun'] ?> </p>
    <p id="idLahirMin3"> <?php echo $data['angkaLahirMin3'] ?></p>
<?php endforeach ?>
<!-- FOR Y - 4 -->
<?php
foreach ($kelahiranMin4 as $data):
    ?>
    <p id="idTahunMin4"><?php echo $data['tahun'] ?> </p>
    <p id="idLahirMin4"> <?php echo $data['angkaLahirMin4'] ?></p>
<?php endforeach ?>
<!-- FOR Y - 5 -->
<?php
foreach ($kelahiranMin5 as $data):
    ?>
    <p id="idTahunMin5"><?php echo $data['tahun'] ?> </p>
    <p id="idLahirMin5"> <?php echo $data['angkaLahirMin5'] ?></p>
<?php endforeach ?>
<!-- FOR Y - 6 -->
<?php
foreach ($kelahiranMin6 as $data):
    ?>
    <p id="idTahunMin6"><?php echo $data['tahun'] ?> </p>
    <p id="idLahirMin6"> <?php echo $data['angkaLahirMin6'] ?></p>
<?php endforeach ?>
<!-- FOR Y - 7 -->
<?php
foreach ($kelahiranMin7 as $data):
    ?>
    <p id="idTahunMin7"><?php echo $data['tahun'] ?> </p>
    <p id="idLahirMin7"> <?php echo $data['angkaLahirMin7'] ?></p>
<?php endforeach ?>
<!-- FOR Y - 8 -->
<?php
foreach ($kelahiranMin8 as $data):
    ?>
    <p id="idTahunMin8"><?php echo $data['tahun'] ?> </p>
    <p id="idLahirMin8"> <?php echo $data['angkaLahirMin8'] ?></p>
<?php endforeach ?>
<!-- FOR Y - 9 -->
<?php
foreach ($kelahiranMin9 as $data):
    ?>
    <p id="idTahunMin9"><?php echo $data['tahun'] ?> </p>
    <p id="idLahirMin9"> <?php echo $data['angkaLahirMin9'] ?></p>
<?php endforeach ?>
<!-- FOR Y - 10 -->
<?php
foreach ($kelahiranMin10 as $data):
    ?>
    <p id="idTahunMin10"><?php echo $data['tahun'] ?> </p>
    <p id="idLahirMin10"> <?php echo $data['angkaLahirMin10'] ?></p>
<?php endforeach ?>
<!--  -->
</body>

<script>
    // get data jiwa RW
    var RW1 = document.getElementById('idRW1').innerHTML;
    var RW2 = document.getElementById('idRW2').innerHTML;
    var RW3 = document.getElementById('idRW3').innerHTML;
    var RW4 = document.getElementById('idRW4').innerHTML;
    var RW5 = document.getElementById('idRW5').innerHTML;
    var RW6 = document.getElementById('idRW6').innerHTML;
    var RW7 = document.getElementById('idRW7').innerHTML;
    var RW8 = document.getElementById('idRW8').innerHTML;
    var RW9 = document.getElementById('idRW9').innerHTML;
    var RW10 = document.getElementById('idRW10').innerHTML;
    var RW11 = document.getElementById('idRW11').innerHTML;
    var RW12 = document.getElementById('idRW12').innerHTML;
    var RW13 = document.getElementById('idRW13').innerHTML;
    var RW14 = document.getElementById('idRW14').innerHTML;
    var RW15 = document.getElementById('idRW15').innerHTML;
    // chart jiwa per rw
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
    //  end chart
    // get data lahir per 10 tahun
    var jiwaMin0 = document.getElementById('idLahirNow').innerHTML;
    var jiwaMin1 = document.getElementById('idLahirMin1').innerHTML;
    var jiwaMin2 = document.getElementById('idLahirMin2').innerHTML;
    var jiwaMin3 = document.getElementById('idLahirMin3').innerHTML;
    var jiwaMin4 = document.getElementById('idLahirMin4').innerHTML;
    var jiwaMin5 = document.getElementById('idLahirMin5').innerHTML;
    var jiwaMin6 = document.getElementById('idLahirMin6').innerHTML;
    var jiwaMin7 = document.getElementById('idLahirMin7').innerHTML;
    var jiwaMin8 = document.getElementById('idLahirMin8').innerHTML;
    var jiwaMin9 = document.getElementById('idLahirMin9').innerHTML;
    var jiwaMin10 = document.getElementById('idLahirMin10').innerHTML;
    // angka lahir
    var lahirMin0 = document.getElementById('idTahunMin0').innerHTML;
    var lahirMin1 = document.getElementById('idTahunMin1').innerHTML;
    var lahirMin2 = document.getElementById('idTahunMin2').innerHTML;
    var lahirMin3 = document.getElementById('idTahunMin3').innerHTML;
    var lahirMin4 = document.getElementById('idTahunMin4').innerHTML;
    var lahirMin5 = document.getElementById('idTahunMin5').innerHTML;
    var lahirMin6 = document.getElementById('idTahunMin6').innerHTML;
    var lahirMin7 = document.getElementById('idTahunMin7').innerHTML;
    var lahirMin8 = document.getElementById('idTahunMin8').innerHTML;
    var lahirMin9 = document.getElementById('idTahunMin9').innerHTML;
    var lahirMin10 = document.getElementById('idTahunMin10').innerHTML;
    // chart kelahiran per 10 tahun
    const xValues2 = [lahirMin0, lahirMin1, lahirMin2, lahirMin3, lahirMin4, lahirMin5, lahirMin6, lahirMin7, lahirMin8, lahirMin9, lahirMin10];

    new Chart("myChart2", {
        type: "line",
        data: {
            labels: xValues2,
            datasets: [{
                data: [jiwaMin0, jiwaMin1, jiwaMin2, jiwaMin3, jiwaMin4, jiwaMin5, jiwaMin6, jiwaMin7, jiwaMin8, jiwaMin9, jiwaMin10],
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