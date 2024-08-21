<?php include "template/header.php"; ?>

<div class="ml-52 mr-96 mt-32 mb-60">
    <h1 class="mb-4">Change Artikel Photo</h1>
    <?php
    include "connection.php";
    $query = "SELECT * FROM artikel WHERE id_artikel='$_GET[id]'";
    $pet = mysqli_query($db_connection, $query);
    $data = mysqli_fetch_assoc($pet);
    ?>

    <form method="post" action="upload_artikel.php" enctype="multipart/form-data">
        <img src="img/<?= $data['display_artikel']; ?>" width="300" height="300" alt="">
        <br>
        <br>
        <br><label class="mb-3">New Photo</Label>
        : <input type="file" name="new_photo" required />
        <br>
        <br>
        &nbsp;
        &nbsp;
        <input type="submit" name="upload" value="UPLOAD" />
        <input type="hidden" name="display_artikel" value="<?= $data['display_artikel']; ?>" />
        <input type="hidden" name="id_artikel" value="<?= $data['id_artikel']; ?>" />
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