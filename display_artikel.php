<?php include "template/header.php"; ?>

<h3>Change Artikel Photo</h3>
<?php 
    include "connection.php";
    $query = "SELECT * FROM artikel WHERE id_artikel='$_GET[id]'";
    $pet=mysqli_query($db_connection,$query);
    $data=mysqli_fetch_assoc($pet);
    ?>
<form method="post" action="upload_artikel.php" enctype="multipart/form-data">
    <table>
        <tr>
            <td></td>
            <td> <img src="img/<?= $data['display_artikel']; ?>" width="100" height="100" alt=""></td>
        <tr>
            <td>New Photo</td>
            <td>: <input type="file" name="new_photo" required /></td>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;
                <input type="submit" name="upload" value="UPLOAD" />
                <input type="hidden" name="display_artikel" value="<?= $data['display_artikel'];?>" />
                <input type="hidden" name="id_artikel" value="<?= $data['id_artikel']; ?>" />
            </td>
        </tr>
        </tr>
        </tr>
    </table>
</form>
<p><a href="read_artikel.php">CANCEL</a></p>

<?php include "footer.php"; ?>