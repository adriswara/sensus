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
    L.marker([-7.022515, 107.667668]).addTo(map)
        .bindPopup('RW1')
        .openPopup();
    // RW2
    L.marker([-7.025409, 107.670953]).addTo(map)
        .bindPopup('RW2')
        .openPopup();
    // RW3
    L.marker([-7.026636, 107.668800]).addTo(map)
        .bindPopup('RW3')
        .openPopup();
    // RW4
    L.marker([-7.027283, 107.669641]).addTo(map)
        .bindPopup('RW4')
        .openPopup();
    // RW5
    L.marker([-7.029405, 107.671524]).addTo(map)
        .bindPopup('RW5')
        .openPopup();
    // RW6
    L.marker([-7.037421602265014, 107.669148740685]).addTo(map)
        .bindPopup('RW6')
        .openPopup();
    // RW7
    L.marker([-7.029099, 107.6762746]).addTo(map)
        .bindPopup('RW7')
        .openPopup();
    // RW8
    L.marker([-7.029133, 107.677075]).addTo(map)
        .bindPopup('RW8')
        .openPopup();
    // RW9
    L.marker([-7.024484, 107.677405]).addTo(map)
        .bindPopup('RW9')
        .openPopup();
    // RW10
    L.marker([-7.0215664470139, 107.67739921563283]).addTo(map)
        .bindPopup('RW10')
        .openPopup();
    // RW11
    L.marker([-7.021624, 107.673272]).addTo(map)
        .bindPopup('RW11')
        .openPopup();
    // RW12 
    L.marker([-7.001523, 107.683114]).addTo(map)
        .bindPopup('RW12')
        .openPopup();
    // RW13
    L.marker([-7.002671, 107.677152]).addTo(map)
        .bindPopup('RW13')
        .openPopup();
    // RW14
    L.marker([-7.027483, 107.671844]).addTo(map)
        .bindPopup('RW14')
        .openPopup();
    // RW15
    L.marker([-7.020914, 107.674138]).addTo(map)
        .bindPopup('RW15')
        .openPopup();
    // RW16
    L.marker([-7.044711, 107.668195]).addTo(map)
        .bindPopup('RW16')
        .openPopup();
</script>

</html>