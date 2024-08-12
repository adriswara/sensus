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
<footer class="section footer-classic context-light bg-gray-50">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p>We are an award-winning creative agency, dedicated to the best result in web design, promotion, business consulting, and marketing.</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>798 South Park Avenue, Jaipur, Raj</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">dkstudioin@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd><a href="tel:#">https://karosearch.com</a> <span>or</span> <a href="tel:#">https://karosearch.com</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="#">About</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacts</a></li>
                <li><a href="#">Pricing</a></li>
              </ul>
            </div>
          </div>
        </div>
      
      </footer>

</body>
<script>
    var map = L.map('map',{scrollWheelZoom: false}).setView([-7.020626611590784, 107.67543567966491], 15);

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