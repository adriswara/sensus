<?php include "template/header.php" ?>
<div id="map" style="width:100%; height: 80vh" class="mr-auto ml-auto bg-black"></div>
<script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
<!-- MAP -->
<nav class="bg-gray-800">

    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <!-- leave it blank -->
        </div>
    </div>

</nav>
<!-- table -->
<div class="">
    <table class="table table-dark table-hover mb-0 ">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">RT</th>
                <th scope="col">Total Jiwa</th>
            </tr>
        </thead>
        <!-- SELECT COUNT(id_warga), rt_warga FROM `warga` GROUP by rt_warga; -->

        <?php
        include "connection.php";
        $queryJiwaPerRT = " SELECT COUNT(id_warga) as total, rt_warga FROM `warga` GROUP by rt_warga; ";
        $jiwaPerRT = mysqli_query($db_connection, $queryJiwaPerRT);

        $i = 1;
        foreach ($jiwaPerRT as $data):
            ?>

            <tbody>
                <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $data['rt_warga'] ?></td>
                    <td><?php echo $data['total'] ?></td>
                </tr>
            </tbody>
        <?php endforeach ?>


    </table>
</div>
<!-- table -->
<?php include "template/footer.php" ?>

</body>
<script>
    var map = L.map('map', { scrollWheelZoom: false }).setView([-7.020626611590784, 107.67543567966491], 15);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    // marker
    L.marker([-7.020626611590784, 107.67543567966491]).addTo(map)
        .bindPopup('Kantor Kelurahan Wargamekar')
        .openPopup();
    // RW1
    // RW2
    // RW3
    // RW4
    // RW5
    // RW6
    L.marker([-7.037504302728691, 107.66919696978816]).addTo(map)
        .bindPopup('RW6')
        .openPopup();
    // RW7
    // RW8
    // RW9
    // -7.0244838,107.6748297,
    L.marker([-7.0244838,107.6748297]).addTo(map)
        .bindPopup('RW9')
        .openPopup();
    // RW10
    L.marker([-7.020935708973771, 107.67185772112744]).addTo(map)
        .bindPopup('RW10')
        .openPopup();
    // RW11
    // RW12
    // RW13
    // RW14
    // RW15
    // RW16
</script>

</html>