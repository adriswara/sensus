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
                <a href="read_artikel.php"> <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="img/<?= $data['display_artikel']; ?>" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#55595c" /></img>
                </a>
                <div class="card-body">
                    <p class="card-text"> <?php echo $data['topik_artikel'] ?> <?php echo $data['judul_artikel'] ?> </p>
                    <p class="card-text"> <?php echo $data['isi_artikel'] ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="read_artikel.php"><button type="button" class="btn btn-sm btn-outline-secondary"> Baca </button></a>
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





</body>

<script>
    // 
    const xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    const yValues = [55, 49, 44, 24, 15];
    const barColors = ["red", "green", "blue", "orange", "brown"];

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
    const xValues2 = [100, 200, 300, 400, 500, 600, 700, 800, 900, 1000];

    new Chart("myChart2", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                data: [860, 1140, 1060, 1060, 1070, 1110, 1330, 2210, 7830, 2478],
                borderColor: "red",
                fill: false
            }, {
                data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                borderColor: "green",
                fill: false
            }, {
                data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                borderColor: "blue",
                fill: false
            }]
        },
        options: {
            legend: { display: false }
        }
    });
    // 
</script>

</html>