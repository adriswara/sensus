<?php include "template/header.php" ?>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
    <div class="col">
        <a href="panduan_warga.php">
            <div class="card shadow-sm">
                <div class="card-body">
                    <p class="card-text"> Panduan
                    </p>
                </div>
            </div>
        </a>
    </div>

    <div class="col">
        <a href="profil_kelurahan.php">
            <div class="card shadow-sm">
                <div class="card-body">
                    <p class="card-text">Profil Kelurahan</p>
                </div>
            </div>
        </a>
    </div>
    <div class="col">
        <a href="berita_kelurahan.php">
            <div class="card shadow-sm">
                <div class="card-body">
                    <p class="card-text">Berita</p>
                </div>
            </div>
        </a>
    </div>
</div>
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 mt-5">
    <!-- start col -->


    <!--  -->

    <?php
    include "connection.php";
    $queryHotNews = "SELECT * FROM `artikel` where topik_artikel != 'Profil' ORDER BY id_artikel ASC ";
    $dataHotNews = mysqli_query($db_connection, $queryHotNews);
    $i = 1;
    foreach ($dataHotNews as $data):
        ?>
        <!--  -->
        <div class="col">
            <div class="card shadow-sm">
                <a href="view_artikel.php?id_artikel=<?= $data['id_artikel'] ?>"> <img class="object-fit-cover" width="100%"
                        height="100%" src="img/<?= $data['display_artikel']; ?>"></img>
                </a>
                <div class="card-body">
                    <p class="card-text"> <?php echo $data['topik_artikel'] ?></p>
                    <p class="card-text"> <?php echo $data['judul_artikel'] ?></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="view_artikel.php?id_artikel=<?= $data['id_artikel'] ?>"><button type="button"
                                    class="btn btn-sm btn-outline-secondary"> Baca
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

<?php include "template/footer.php" ?>

</body>

<script>

</script>
<!-- max tahun ke tahun per 10 tahun -->

</html>